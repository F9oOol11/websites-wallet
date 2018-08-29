@extends('template.app')

@section('content')
<div id="main">
    <div class="container">
      <h1>مجمعة المواقع</h1>
      <p> جميع مواقعك المفضلة في مكان واحد, احفظ جميع المواقع المهمة لك للرجوع اليها في اي وقت وبسهولة</p>
      <a href="/register" class="btn-subscribe"><span> انشئ حسابك مجانا </span></a>
    </div>
  <div class="overlay"></div>
</div>
<div id="section1">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="test">
        <h2> 1 </h2>
        <img src="/images/slider-one.png" alt="">
        <p>ادخل الصفحة التي تريد حفظها</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="test">
        <h2> 2 </h2>
        <img src="/images/slider-two.png" alt="">
        <p>انتقل الى مجمعة المواقع مباشرة من خلال تغير الرابط</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="test">
          <h2> 3 </h2>
          <img src="/images/slider-three.png" alt="">
          <p>هذا كل شيئ ! سيتم حفظ الصفحة تلقائيا في مجمعتك</p>
      </div>
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
</div>
  </div>
</div>

<div id="features">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <img src="images/icon1.png" alt="">
        <h2>احفظ مواقعك</h2>
        <p>
          يمكنك اضافة عدد لانهائي من المواقع وتقسيمها الى اقسام ليسهل الرجوع إليها في أي وقت ومن أي جهاز
        </p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="images/icon2.png" alt="">
        <h2>شارك محفظتك </h2>
        <p>توفر مجمعة المواقع اماكنية مشاركة مواقعك المفضلة للاصدقاء من خلال رابط مخصص يعرض جميع مواقعك المفضلة </p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="images/icon3.png" alt="">
        <h2>نظام ذكي</h2>
        <p>مجمعة المواقع تملتك نظام ذكي ومرن يسهل عليك عملية حفظ المواقع والرجوع اليها من خلال اداة البحث لتوفير تجربة مستخدم رائعة</p>
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
