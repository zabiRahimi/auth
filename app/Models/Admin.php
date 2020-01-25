<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\SendForgotPasswordNotification;
class Admin extends Authenticatable
{
  use Notifiable;
  protected $guard = 'admin';
  protected $table = 'admins';

  protected $fillable = ['name','username','mobaile','email',  'password','date_ad','date_up'];

  protected $hidden = ['password',  'remember_token'];
  public $timestamps = false;
  public function sendPasswordResetNotification($token)
  {
    $url="http://localhost:8000/admin/password/reset/$token";//آدرس فرم ست کردن رمز جدید
    $this->notify(new SendForgotPasswordNotification($url));
  }
}
