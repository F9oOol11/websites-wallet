@extends('template.app')
@section('content')
  <div class="container reg">

  @if(isset($sites) && count($sites) > 0)
    @foreach($sites as $site)
    {{$site->web_link}}<br>
    @endforeach
    @else
    <h2> nothing to show</h2>
    @endif
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
