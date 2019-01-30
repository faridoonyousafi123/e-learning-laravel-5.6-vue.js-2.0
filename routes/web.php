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
])->middleware('auth');


//Administrator Routes

Route::get('/applyadmin',[

	'uses' => 'AdministratorController@index',
	'as' => 'apply.admin'

]);

Route::post('/submitrequest',[

	'uses' => 'AdministratorController@submitUserRequest',
	'as' => 'request.submit'

]);

Route::get('/users',[

	'uses' => 'AdministratorController@sendUsers',
	'as' => 'show.users'

]);

Route::get('/users-approved',[

	'uses' => 'AdministratorController@sendApprovedUsers',
	'as' => 'show.approvedUsers'

]);






Route::get('/logout', function() { auth()->logout(); return redirect('/'); });


Route::get('/register/confirm','confirmEmailController@index')->name('confirm-email');



Route::get('/', function () {

	return view('welcome');

})->name('welcome');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('checkuser');



Route::group(['prefix'=>'admin','middleware'=> 'checkuser'], function(){

	Route::get('/series/create',[

		'uses' => 'SeriesController@create',
		'as'   => 'series.create'
	])->middleware('admin');

	Route::post('/series/store',[

		'uses' => 'SeriesController@store',
		'as'   => 'series.store'
	]);

	Route::get('/admin-requests',[

	'uses' => 'AdministratorController@showAdminRequests',
	'as' => 'requests.show'

	])->middleware('admin');

	Route::post('/approve-request',[

	'uses' => 'AdministratorController@approveRequest',
	'as' => 'user.approve'

	]);

	Route::post('/reject-request',[

	'uses' => 'AdministratorController@rejectRequest',
	'as' => 'user.reject'

	]);


	Route::post('/revoke-request',[

	'uses' => 'AdministratorController@revokeRequestBack',
	'as' => 'user.revokeRequest'

	]);




});





Route::get('{provider}/auth',[
	'uses' => 'SocialsController@auth',
	'as' => 'social.auth'
]);

Route::get('{provider}/redirect',[
	'uses' => 'SocialsController@authCallBack',
	'as' => 'social.authCallBack'
]);
