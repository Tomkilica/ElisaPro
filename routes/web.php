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

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');

Auth::routes();


Route::get('/single/{id}', 'ShopController@single');
Route::get('/shop', 'ShopController@shop');

Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@create');
Route::get('/forgot', 'RegistrationController@forgotPasswordShow');

Route::post('/login', 'LoginUserController@store');
Route::get('/login', 'LoginUserController@index');

Route::get('/cart', 'CartController@show');

Route::get('/logout', 'LoginUserController@destroy');
Route::get('/email/{id}/activate', 'LoginUserController@activateEmail');

Route::get('/credentials', 'CredentialsController@show');
Route::post('/credentials', 'CredentialsController@create');
Route::get('/success', 'CredentialsController@success');

Route::get('/terms', 'TermsController@terms');
Route::get('/purchase', 'TermsController@purchase');
Route::get('/protection', 'TermsController@protection');




Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('password/reset/{token}', 'Auth\ResetsPasswords@showResetForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

