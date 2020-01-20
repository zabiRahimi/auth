<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
   Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
   // //Customer Password Reset routes
   Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
   Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');;
   Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
   Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  }) ;
Route::get('/adminProfile', 'Admin\AdminController@profile')->name('adminDashboard')->middleware('admin');
Route::get('/email', 'HomeController@email');

Route::prefix('shop')->group(function() {
   Route::get('/register','Auth\ShopRegisterController@showRegistrationForm')->name('shop.register');
   Route::post('/register','Auth\ShopRegisterController@register')->name('shop.register.sabt');
   Route::get('/login','Auth\ShopLoginController@showLoginForm')->name('shop.login');
   Route::post('/login', 'Auth\ShopLoginController@login')->name('shop.login.submit');
   Route::get('/logout', 'Auth\ShopLoginController@logout')->name('shop.logout');
   // //Customer Password Reset routes
   Route::post('/password/email','Auth\ShopForgotPasswordController@sendResetLinkEmail')->name('shop.password.email');
   Route::post('/password/reset', 'Auth\ShopResetPasswordController@reset')->name('shop.password.update');;
   Route::get('/password/reset', 'Auth\ShopForgotPasswordController@showLinkRequestForm')->name('shop.password.request');
   Route::get('/password/reset/{token}', 'Auth\ShopResetPasswordController@showResetForm')->name('shop.password.reset');
  }) ;
  Route::get('/shopProfile', 'ShopController@profile')->name('shopProfile')->middleware('shop');
  Route::get('/shopShowFormProfile', 'ShopController@showFormProfile')->name('shop.show.form.profile')->middleware('shop');
  Route::post('/shopEditProfile', 'ShopController@shopEditProfile')->name('shop.edit.profile')->middleware('shop');
  Route::get('/shopShowFormPas', 'ShopController@showFormPas')->name('shop.show.form.pas')->middleware('shop');
