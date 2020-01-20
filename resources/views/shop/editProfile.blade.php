@extends('shop.layoutShop')
@section('title') پروفایل {{ $user->name }} @endsection
@section('content')
  <div class="divEditForm">
     <div class="headForm">ویرایش پروفایل</div>
     <form class="formEditForm" action="{{ route('shop.edit.profile') }}" method="post">
       @csrf
       <div class="form-group">
         <label for="shop">نام فروشگاه</label>
         <input type="text" class="form-control" id="shop" name="shop" value="{{ $user->shop }}">
         @error('shop')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="name">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
       </div>
       <div class="form-group">
         <label for="username">نام کاربری</label>
         <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
       </div>
       <div class="form-group">
         <label for="mobaile">موبایل</label>
         <input type="text" class="form-control" id="mobaile" name="mobaile" value="{{ $user->mobaile }}">
       </div>
       <div class="form-group">
         <label for="email">ایمیل</label>
         <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
       </div>
       <div class="form-group">
         <button type="submit" class="btn " name="button">ثبت ویرایش</button>
       </div>
     </form>
  </div>
@endsection
