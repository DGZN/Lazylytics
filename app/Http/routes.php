<?php

Route::get('/debug', function(){

	$client = new Google_Client;
	dd($client);
	return 'Debugging';

});

Route::get('/', 'HomeController@index');

Route::get('/GA/login', 'HomeController@GAlogin');

Route::get('/gaOauth', 'HomeController@login');

Route::get('/accounts', 'HomeController@accounts');

Route::get( '/properties/{account_id}', [ 'uses' => 'HomeController@properties' ] )->where('account_id', '\d+');

Route::get( '/views/{account_id}/{property_id}', [ 'uses' => 'HomeController@views' ] )->where([ 'account_id', '\d+', 'property_id', '\d+' ]);

Route::get('/metadata', 'HomeController@metadata');

Route::get('/segments', 'HomeController@segments');

Route::get('/builder', 'HomeController@builder');

Route::post('/report', 'HomeController@report');

Route::post('/packaged', 'HomeController@packaged');

Route::get('/reports', function(){

	return View::make('reports.index');

});

Route::get('home', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::resource('traces', 'TracesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
