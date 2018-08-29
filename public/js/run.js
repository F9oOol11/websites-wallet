function truncate(){
	$('input[name=name]').val("");
	$('input[name=subject]').val("");
	$('input[name=email]').val("");
	$('input[name=phone]').val("");
	$('textarea[name=message]').val("");
};
$(document).ready(function(){
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
	});
	$('.alert-close').click(function(){
		$(this).parent().hide();
	});
});
$(document).ready(function(){
	$('.contact-btn').click(function(){
		var errors = [];
		if($('input[name=name]').val() == ""){
			errors[0] = "empty name";
			$('input[name=name]').addClass("input-error");
			$('.contact-error1').text("هذا الحقل مطلوب");
		}else{
			$('input[name=name]').removeClass("input-error");
			$('.contact-error1').text("");
		}
		if($('input[name=subject]').val() == ""){
			errors[1] = "empty subject";
			$('input[name=subject]').addClass("input-error");
			$('.contact-error2').text("هذا الحقل مطلوب");
		}else{
			$('input[name=subject]').removeClass("input-error");
			$('.contact-error2').text("");
		}
		if($('input[name=email]').val() == ""){
			errors[2] = "empty email";
			$('input[name=email]').addClass("input-error");
			$('.contact-error3').text("هذا الحقل مطلوب");
		}else{
			$('input[name=email]').removeClass("input-error");
			$('.contact-error3').text("");
		}
		if($('textarea[name=message]').val() == ""){
			errors[3] = "empty message";
			$('textarea[name=message]').addClass("input-error");
			$('.contact-error4').text("هذا الحقل مطلوب");
		}else{
			$('textarea[name=message]').removeClass("input-error");
			$('.contact-error4').text("");
		}

		if($('input[name=name]').val().length >=255 ){
			errors[4] = "wrong name";
			$('input[name=name]').addClass("input-error");
			$('.contact-error1').text("الاسم طويل جدا");
		}
		if($('input[name=subject]').val().length >=255 ){
			errors[5] = "wrong subject";
			$('input[name=subject]').addClass("input-error");
			$('.contact-error2').text("الموضوع طويل جدا");
		}
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!regex.test($('input[name=email]').val())){
			errors[6] = "wrong email";
			$('input[name=email]').addClass("input-error");
			$('.contact-error3').text("البريد الإلكتروني المدخل غير صحيح");
		}
		if(!$.isNumeric($('input[name=phone]').val()) || $('input[name=phone]').val().length > 15){
			errors[7] = "wrong number";
			$('input[name=phone]').addClass("input-error");
			$('.contact-error5').text("رقم الجوال غير صحيح");
		}else{
			$('input[name=phone]').removeClass("input-error");
			$('.contact-error5').text("");
		}
		if(errors.length < 1){
			var csrf_token   =   $('meta[name="csrf-token"]').attr('content');
$.ajaxSetup({
headers: {"X-CSRF-TOKEN": csrf_token}
});
  	var name = $('input[name=name]').val(),
			subject = $('input[name=subject]').val(),
			email = $('input[name=email]').val(),
			phone = $('input[name=phone]').val(),
			message = $('textarea[name=message]').val();
			$.ajax({
				type: 'POST',
				url: '/contact',
				dataType: 'json',
				data: {name:name, subject:subject, email:email, phone:phone, message:message},
				beforeSend: function(){
					$('.contact-btn').text('جار الإرسال');
				},
				success: function(data){
					if(data.status === 'passed'){
						$('.contact-message').text('تم ارسال الرسالة بنجاح');
						$('.contact-message').removeClass('send-failed');
						$('.contact-message').addClass('send-success');
						$('.contact-message').show("fast").delay(5000).fadeOut();
						truncate();
					}else{
						$('.contact-message').text('لم يتم ارسال الرسالة لخطأ الرجاء معاودة المحاولة');
						$('.contact-message').removeClass('send-success');
						$('.contact-message').addClass('send-failed');
						$('.contact-message').show("fast").delay(5000).fadeOut();
						truncate();
					}
					$('.contact-btn').text('ارسال');
				},
				error: function(){
					$('.contact-message').text('لم يتم ارسال الرسالة لخطأ الرجاء معاودة المحاولة');
					$('.contact-message').removeClass('send-success');
					$('.contact-message').addClass('send-failed');
					$('.contact-message').show("fast").delay(5000).fadeOut();
				}
			})

		}

	});
});
