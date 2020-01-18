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
//
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.post');
// Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//
// /*
//  _  admin profile routes
//  */
// Route::group(['middleware'=>'admin'], function() {
//     Route::get('/admin/home', 'admin\HomeController@index');
// });
Route::prefix('admin')->group(function() {
   Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

   // //Customer Password Reset routes
   Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
   Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
   Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
   Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


  }) ;
  Route::get('/adminProfile', 'Admin\AdminController@profile')->name('adminDashboard')->middleware('admin');
Route::get('/email', 'HomeController@email');

// Route::prefix('customer')->group(function() {
// //Customer Password Reset routes Route::post('/password/email','Auth\CustomerForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
// Route::post('/password/reset', 'Auth\CustomerResetPasswordController@reset');
// Route::get('/password/reset', 'Auth\CustomerForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
// Route::get('/password/reset/{token}', 'Auth\CustomerResetPasswordController@showResetForm')->name('customer.password.reset');
// });
