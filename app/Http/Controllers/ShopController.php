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
      $messages = [
        'shop.required' => 'نام فروشگاه را وارد کنید .',
        'shop.unique' => 'نام فروشگاه تکراری است .',
      ];
      $user_id=Auth::guard('shop')->id();
      $request->validate([
        'shop'   => 'bail|required|unique:shops,shop,'.$user_id,
        'name'   => 'required',
        'username'   => 'required|unique:shops,username,'.$user_id,
        'mobaile'   => 'required|unique:shops,mobaile,'.$user_id,
        'email'   => 'required|unique:shops,email,'.$user_id,
      ],$messages);
      try {
        $update=Shop::find($user_id);
        $update->shop=$request->shop;
        $update->name=$request->name;
        $update->username=$request->username;
        $update->mobaile=$request->mobaile;
        $update->email=$request->email;
        $update->date_up=time();
        $update->save();
        $check=$update->id;
        if (!empty($check)) {
          return back()->with('ok' ,'اطلاعات ثبت شد .');
        }
      } catch (\Exception $e) {
          return back()->with('error' ,'اطلاعات ثبت نشد .');
      }
    }

    public function shopEditPas(Request $request)
    {

      $messages = [
        'oldPas.required' => 'رمز فعلی را وارد کنید .',
        'newPas.required' => 'رمز جدید را وارد کنید .',
        'newPas.confirmed' => 'تکرار رمز نادرست است .',
        'newPas.min' => 'رمز باید بیشتر از 8 حرف باشد .',

      ];

      $request->validate([
        'oldPas'   => 'required',
        'newPas'   => 'required|min:8|confirmed',
      ],$messages);

      // if (Auth::guard('shop')->attempt([ 'password' => $request->oldPas], $request->remember)) {
      $databasPas=Auth::guard('shop')->user()->password;
      $userPas=$request->oldPas;
      if (Hash::check($userPas,$databasPas)) {
        try {
          $user_id=Auth::guard('shop')->id();
          $update=Shop::find($user_id);
          $update->password=Hash::make($request->newPas);
          $update->date_up=time();
          $update->save();
          $check=$update->id;
          if (!empty($check)) {
            return back()->with('ok' ,'رمز جدید ثبت شد');
          }
        } catch (\Exception $e) {
            return back()->with('error' ,'رمز جدید ثبت نشد .');
        }
      }
      else{
        return back()->with('error' ," رمز فعلی نا معتبر است . ");
      }

    }
}//end class
