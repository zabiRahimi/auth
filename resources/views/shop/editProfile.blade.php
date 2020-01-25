@extends('shop.layoutShop')
@section('title') پروفایل {{ $user->name }} @endsection
@section('content')
  <div class="divEditForm">
     <div class="headForm">ویرایش پروفایل</div>
     {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                <ul>
           @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif --}}
    @if (\Session::has('ok'))
      <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('ok') !!}</li>
        </ul>
    </div>
    @endif
    @if (\Session::has('error'))
      <div class="alert alert-danger">
        <ul>
            <li>{!! Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
     <form class="formEditForm" action="{{ route('shop.edit.profile') }}" method="post">
       @csrf
       <div class="form-group">
         <label for="shop">نام فروشگاه</label>
         <input type="text" class="form-control @error ('shop') errorInput @enderror " id="shop" name="shop" value="{{ $user->shop }}">
         @error('shop')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror

       </div>
       <div class="form-group">
         <label for="name">نام و نام خانوادگی</label>
         <input type="text" class="form-control @error ('name') errorInput @enderror" id="name" name="name" value="{{ $user->name }}">
         @error('name')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="username">نام کاربری</label>
         <input type="text" class="form-control @error ('username') errorInput @enderror" id="username" name="username" value="{{ $user->username }}">
         @error('username')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="mobaile">موبایل</label>
         <input type="text" class="form-control @error ('mobaile') errorInput @enderror" id="mobaile" name="mobaile" value="{{ $user->mobaile }}">
         @error('mobaile')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="email">ایمیل</label>
         <input type="text" class="form-control @error ('email') errorInput @enderror" id="email" name="email" value="{{ $user->email }}">
         @error('email')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <button type="submit" class="btn " name="button">ثبت ویرایش</button>
       </div>
     </form>
  </div>
@endsection
