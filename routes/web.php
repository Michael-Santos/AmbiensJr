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

Route::singularResourceParameters();

// Rotas públicas
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/home', 'HomeController@index')->name('home');

// Rotas relacionadas à autenticação usuário normal
	// Login
	Route::get('/admin/entrar', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/admin/entrar', 'Auth\LoginController@login');
	
	// Logout
	Route::post('/admin/sair', 'Auth\LoginController@logout')->name('logout');

	// Registration
		Route::get('/admin/registrar', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('/admin/registrar', 'Auth\RegisterController@register');

	// Redifinição de senha
		Route::get('/admin/senha/redefinir', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('/admin/senha/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
		Route::get('/admin/senha/redefinir/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('/admin/senha/redefinir', 'Auth\ResetPasswordController@reset');
