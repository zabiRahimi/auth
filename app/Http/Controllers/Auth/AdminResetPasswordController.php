<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Password;
use Auth;

class AdminResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    public function __construct()
    {
    $this->middleware('admin');
    }
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function guard()
    {
        return Auth::guard('admin');
    }
    protected function broker()
    {
        return Password::broker('admins');
    }
    public function showResetForm(Request $request, $token = null)
    {
      return view('auth.passwords.admin_reset')->with(
          ['token' => $token, 'email' => $request->email]
      );
    }
}//end class
