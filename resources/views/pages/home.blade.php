@extends('template.app')

@section('content')
<div class="container home">
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <div class="add-box">
        <h3>اضافة موقع جديد</h3>
          <form class="add-form" action="/add-new" method="post">
            @csrf
            <label for="webname"> رابط الموقع: </label>
              <input type="text" name="link" value="" placeholder="مثال : www.google.com">
              <label for="webname">الاسم المختصر: </label>
                <input type="text" name="web_name" value="" placeholder="مثال :google">
                @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <div class="alert alert-danger added-success">
                  <span class="alert-close"> X </span>
                  {{$error}}
                </div>
                @endforeach
                @endif
                <button type="submit" name="button"> اضافة +</button>
          </form>
      </div>
    </div>
    <div class="col-xs-12 col-md-8">
      <div class="add-box wallet">
        @if(count($sites) < 0)
        <p class="sad"> :( </p>
          <p> لا يوجد مواقع حاليا في مجمعتك قم بإضافة المزيد !</p>
        @else
        <ul class="sites-menu">
          @foreach($sites as $site)
          <li>{{$site->web_name}}</li>

          @endforeach
        </ul>
        @endif
      </div>
    </div>

  </div>

</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
          <h2>اتصل بنا</h2>
          <label class="contact-label" for="name">الاسم</label>
          <input class="contact-input" type="text" name="name" value="" placeholder="الرجاء كتابة الاسم">
          <div class="contact-error contact-error1">  </div>
          <label class="contact-label" for="subject">الموضوع</label>
          <input class="contact-input" type="subject" name="subject" value="" placeholder="الرجاء كتابة موضوع الرسالة">
          <div class="contact-error contact-error2">  </div>
          <label class="contact-label" for="email">البريد الإلكتروني</label>
          <input class="contact-input" type="email" name="email" value="" placeholder="الراجاء كتابة البريد الإلكتروني">
          <div class="contact-error contact-error3">  </div>
          <label class="contact-label" for="phone">الجوال</label>
          <input class="contact-input" type="text" name="phone" value="" placeholder="رقم الجوال متبوعا بمفتاح الدولة">
          <div class="contact-error contact-error5">  </div>
          <label class="contact-label" for="message">الرسالة</label>
          <textarea class="contact-input" name="message" rows="8" cols="80"></textarea>
          <div class="contact-error contact-error4">  </div>
          <button type="submit" class="contact-btn" name="send">ارسال</button>
      </div>
      <div class="col-xs-12 col-md-6">
        hello one
      </div>

    </div>
  </div>
</footer>
<div id="suffex">
  <ul class="right-list">
    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li><a href="https://www.facebook.com/profile.php?id=100009300700888"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="https://twitter.com/Faisal_Jehad_15"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  </ul>
  <p>Made by <strong> <a href="https://www.facebook.com/profile.php?id=100009300700888" target="_blank"> Faisal </a> </strong> © 2018</p>
  <div class="clear"></div>
</div>
<div class="contact-message">
  تم ارسال الرسالة بنجاح
</div>
@endsection
