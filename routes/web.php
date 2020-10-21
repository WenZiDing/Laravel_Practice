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

Route::get('/user/{id?}',function($id=null){
	if(!is_null($id)){
		return redirect()->route('profile');
	}else{
		return 'nono';
	}
});

Route::get('/student/profile', function() {
	return 'yes';
})->name('profile');
