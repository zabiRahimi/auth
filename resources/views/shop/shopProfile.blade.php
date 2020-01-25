@extends('shop.layoutShop')
@section('title')فروشگاه @endsection
@section('content')
  @if (session('status'))
      <div class="alert alert-success successSendEmail" role="alert">
          {{ session('status') }}
      </div>
  @endif
 <h1 class="shop">فروشگاه : <span>{{ $user->shop }}</span> </h1>
@endsection
