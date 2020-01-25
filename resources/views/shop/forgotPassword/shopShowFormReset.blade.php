@extends('shop.forgotPassword.layoutForgotPasShop')
@section('title')ارسال رمز جدید@endsection
@section('headerforgotshop') <h3>ارسال رمز جدید</h3>@endsection
@section('mainForgotShop')
  <div class="divForgotShop">
    <div class="divHeaderForgotShop">
      ایجاد رمز جدید
    </div>
    <form class="formForgotShop" action="{{ route('shop.SendForm.reset') }}" method="post">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group">
        <input type="email" class="form-control @error ('email') errorInput @enderror" name="email" value="{{ old('email') }}" placeholder="ایمیل را وارد کنید" required  oninvalid="this.setCustomValidity('لطفا ایمیل را  صحیح وارد کنید ')" oninput="setCustomValidity('')" autofocus>
        @error('email')
          <span class="error" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <input type="password" class="form-control @error ('password') errorInput @enderror" name="password" value="" placeholder="رمز جدید را وارد کنید" required  oninvalid="this.setCustomValidity('لطفا رمز جدید را وارد کنید')" oninput="setCustomValidity('')" autocomplete="password">
        @error('password')
          <span class="error" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <input type="password" class="form-control @error ('password_confirmation') errorInput @enderror" name="password_confirmation" value="" placeholder="تکرار رمز جدید را وارد کنید" required  oninvalid="this.setCustomValidity('لطفا تکرار رمز جدید را وارد کنید')" oninput="setCustomValidity('')" autocomplete="password_confirmation">
        @error('password_confirmation')
          <span class="error" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btnForgotPasShop"  name="button">ثبت</button>
      </div>
    </form>
  </div>
@endsection
