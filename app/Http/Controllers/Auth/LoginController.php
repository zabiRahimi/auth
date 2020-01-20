<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = '/home';
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)

   {

       $input = $request->all();



       $this->validate($request, [

           'username' => 'required',

           'password' => 'required',
           // 'email' => 'required',

       ]);



       // $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';//چنانچه بخواهیم از ایمیل و یا نام کاربری استفاده کنیم می توان از این دستور استفاده کرد
       // چنانچه بخواهیم از ایمیل ، موبایل و نام کاربری استفاده کنیم می توان با دستور زیر مشخص کرد که کاربر از کدام فیلد استفاده می کند
       if(preg_match('/^09[0-9]{9}$/', $request->username)){$fieldType='mobaile';}
       elseif(filter_var($request->username, FILTER_VALIDATE_EMAIL)){$fieldType='email';}
       else{$fieldType='username';}
       if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))

       {

           return redirect()->route('home');

       }else{

           return redirect()->route('login')

               ->with('error','Email-Address And Password Are Wrong.');
       }
   }
}// end class
