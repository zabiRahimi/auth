<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/sendEmailForgot.css') }}" rel="stylesheet"> --}}
    <style media="screen">
    *{box-sizing: border-box;direction: rtl;}
    .headerSendEmailForgot{width: 100%;height: 35px; line-height: 25px;margin: 5px 0; background-color: #e3e3e3;color: #8f8f8f;border-bottom: 3px solid #bebebe;border-radius: 3px;text-align: center;float: right;}
    .darkhastSendEmailForgot{width: 100%;;margin: 5px 0;padding:2px 6px 3px;float: right;text-align: right;font-size: 12px;color: #697980;}
    .dangerSendEmailForgot{width: 100%;margin: 15px 0;padding: 4px 6px 6px;;color:#b1793e; background-color: #ffead4; border: 1px solid #dbb48b;border-radius: 3px;text-align: right;float: right;}
    .dangerSendEmailForgot strong{color:#9f6425; }
    .mainSendEmailForgot{width: 100%; margin: 10px 0; padding: 10px 15px;background-color: #d9d9d9;border-radius: 3px;text-align: justify;float: right;}
    .mainSendEmailForgot div{width: 100%; margin: 10px 0; padding: 10px 6px 15px;background-color: #f1f1f1;text-align: center;;float: right;}
    .mainSendEmailForgot div a{width: 100px; padding:5px 20px 11px 20px; background: #13add6; color: #fff; border-radius: 3px; text-decoration: none;}
    .footerSendEmailForgot{width: 100%; padding: 10px;color: #bed1c0;background-color: #969696;border-top: 3px solid #000000;text-align: center;float: right;}
    .footerSendEmailForgot div{width: 350px;margin: 10px calc((100% - 350px) / 2);padding: 0 20px 4px;;color: #fff;border-radius: 6px; background-color: #000;}
    .footerSendEmailForgot div a{color: #fff;}
    @media (max-width:400px){
      .dangerSendEmailForgot{font-size: 14px;}
      .footerSendEmailForgot div{width: calc(100% - 8px);margin: 5px 4px;padding: 0 10px 4px;}


    }
    </style>


  </head>
  <body>
    <div class="container-fluid">
        <div class="headerSendEmailForgot">
          بازیابی رمز عبور
        </div>
        <div class="darkhastSendEmailForgot">
          ارسال شده از فروشگاه fatak  به درخواست شما جهت بازیابی رمز عبور .
        </div>
        <div class="dangerSendEmailForgot">
           <strong>هشدار !!</strong> چنانچه شما درخواستی برای فراموشی رمز عبور نداشته اید این ایمیل را نادیده بگیرد و آن را پاک کنید .
        </div>
        <div class="mainSendEmailForgot">
          جهت بازیابی رمز جدید دکمه زیر را انتخاب کنید ، چنانچه دکمه عمل نکرد برروی آن
          کلیک راست کرده و گزینه <span>copy link location</span> را انتخاب کرده سپس در آدرس بار مرورگر پیس کرده و آن را اجرا کنید .
          <div >

              <a href="@if (!empty($url)){{ $url }}@endif">بازیابی رمز عبور</a>
          </div>
        </div>

        <div class="footerSendEmailForgot">
          این ایمیل به صورت خودکار برای شما ارسال شده است لذا از پاسخ دادن خوداری کنید .
          <div class="">
            <a href="www.fatak.ir">فروشگاه اینترنتی فاتک www.fatak.ir</a>
          </div>
        </div>

    </div>
  </body>
</html>
