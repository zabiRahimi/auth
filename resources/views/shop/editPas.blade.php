@extends('shop.layoutShop')
@section('title') تغییر رمز @endsection
@section('content')
  <div class="divEditForm">
     <div class="headForm">تغییر رمز</div>
     <form class="formEditForm" action="" method="post">
       <div class="form-group">
         <label for="pas">رمز فعلی</label>
         <input type="text" class="form-control" id="pas" name="pas" value="" autofocus>
       </div>
       <div class="form-group">
         <label for="pasNew">رمز جدید</label>
         <input type="text" class="form-control" id="pasNew" name="pasNew" value="">
       </div>
       <div class="form-group">
         <label for="username">تکرار رمز جدید</label>
         <input type="text" class="form-control" id="username" name="username" value="">
       </div>

       <div class="form-group">
         <button type="submit" class="btn " name="button">تغییر رمز</button>
       </div>
     </form>
  </div>
@endsection
