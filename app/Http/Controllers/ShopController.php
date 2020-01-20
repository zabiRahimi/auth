<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Shop;
use Auth;
class ShopController extends Controller
{
   public function __construct()
   {
     $this->middleware('shop');
   }
    public function profile(Request $request)
    {
      // $user=auth('shop')->user();
      $user=Auth::guard('shop')->user();
    return view('shop.shopProfile',compact('user'));
    }
    public function showFormProfile()
    {
      $user=Auth::guard('shop')->user();
      return view('shop.editProfile',compact('user'));
    }
    public function showFormPas()
    {
      return view('shop.editPas');
    }

    public function shopEditProfile(Request $request)
    {
      $user_id=Auth::guard('shop')->id();
    return  $this->validate($request, [
        'shop'   => 'required|unique:shops,shop,'.$user_id,
        'name'   => 'required',
        'username'   => 'required|unique:shops',
        'mobaile'   => 'required|unique:shops,mobaile,'.$user_id,
        'email'   => 'required|unique:shops,email,'.$user_id,
      ]);

    }
}
