@extends('shop.forgotPassword.layoutForgotPasShop')
@section('title')ایمیل بازیابی رمز@endsection
@section('headerforgotshop') <h3>وارد کردن ایمیل برای بازیابی رمز عبور </h3>@endsection
@section('mainForgotShop')
  <div class="divForgotShop">
    <div class="divHeaderForgotShop">
      وارد کردن ایمیل
    </div>
    @if (session('status'))
        <div class="alert alert-success successSendEmail" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="formForgotShop" action="{{ route('shop.send.email') }}" method="post">
      @csrf
      <div class="form-group">
        <input type="email" class="form-control inputForgotPasShop" name="email" value="" placeholder="ایمیل را وارد کنید" required  oninvalid="this.setCustomValidity('لطفا ایمیل را  صحیح وارد کنید ')" oninput="setCustomValidity('')" autofocus>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btnForgotPasShop"  name="button">ارسال ایمیل</button>
      </div>
    </form>
  </div>
@endsection
