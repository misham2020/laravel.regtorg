<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




//Route::auth();

    Route::match(['get', 'post'], '/', 'IndexController@index')->name('main');
    Route::get( '/article/{aliases}', 'ArticleController@index')->name('article');



//Route::auth();

//admin/service
Route::group(['prefix'=>'admin' ,'middleware'=>'auth' ], function() {
	
	//admin
	Route::get('/',function() {
		
		if(view()->exists('admin.pages')) {
			$data = ['title' => 'Панель администратора'];
			
			return view('admin.pages',$data);
		}
		abort(404);
	});
	
	//admin/pages
	Route::group(['prefix'=>'pages'],function() {
		
		///admin/pages
		Route::get('/',['uses'=>'PageController@index','as'=>'pages']);
		
		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'PagesAddController@index','as'=>'pagesAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{article}',['uses'=>'PagesEditController@index','as'=>'pagesEdit']);
		
	});

}); 

Route::get('/reg', 'UserController@create')->name('register.create');
Route::post('/reg', 'UserController@store')->name('register.store');

Route::get('/log', 'UserController@loginForm')->name('login.create');
Route::post('/log', 'UserController@login')->name('log_in');
Route::get('/logoutt', 'UserController@logout')->name('log_out');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
