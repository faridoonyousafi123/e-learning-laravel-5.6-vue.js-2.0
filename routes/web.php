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




Route::get('/mail', function () {
    return new App\Mail\ConfirmYourMail;
});

Route::get('/confirmemail',[

	'uses' => 'confirmEmailController@show',
	'as' => 'email.confirm'
]);

Route::get('/logout', function() { auth()->logout(); return redirect('/'); });


Route::get('/register/confirm','confirmEmailController@index')->name('confirm-email');



Route::get('/', function () {
    
    return view('welcome');

})->name('welcome');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('checkuser');








Route::get('{provider}/auth',[
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);

Route::get('{provider}/redirect',[
    'uses' => 'SocialsController@authCallBack',
    'as' => 'social.authCallBack'
]);
