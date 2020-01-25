@extends('shop.layoutShop')
@section('title') تغییر رمز @endsection
@section('content')
  <div class="divEditForm">
     <div class="headForm">تغییر رمز</div>
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
     <form class="formEditForm" action="{{ route('shop.edit.pas') }}" method="post">
       @csrf
       <div class="form-group">
         <label for="oldPas">رمز فعلی</label>
         <input type="password" class="form-control" id="oldPas" name="oldPas" value="" autofocus>
         @error('oldPas')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="newPas">رمز جدید</label>
         <input type="password" class="form-control" id="newPas" name="newPas" value="">
         @error('newPas')
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>
       <div class="form-group">
         <label for="newPas_comfirm">تکرار رمز جدید</label>
         <input type="password" class="form-control" id="newPas_comfirm" name="newPas_confirmation" value="">
         @error('newPas_confirmation)
           <span class="error" role="alert">
               <strong>{{ $message }}</strong>
           </span>
         @enderror
       </div>

       <div class="form-group">
         <button type="submit" class="btn " name="button">تغییر رمز</button>
       </div>
     </form>
  </div>
@endsection
