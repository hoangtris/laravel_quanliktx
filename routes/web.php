<?php

use Illuminate\Support\Facades\Route;

/*
|
| Web Routes
|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Page Controller
Route::get('index',[
	'as' => 'trangchu',
	'uses' => 'PageController@index'
]);
Route::get('gioithieu',[
	'as' => 'gioithieu',
	'uses' => 'PageController@gioithieu'
]);
Route::get('tintuc',[
	'as' => 'tintuc',
	'uses' => 'PageController@tintuc'
]);
Route::get('lienhe',[
	'as' => 'lienhe',
	'uses' => 'PageController@lienhe'
]);
Route::get('dangkiphong',[
	'as' => 'dangkiphong',
	'uses' => 'PageController@phong'
]);

Route::get('dangkiphong/khuvuc/{kv}',[
	'as' => 'dangkiphong/khuvuc',
	'uses' => 'PageController@phongtheokhuvuc'
]);

Route::get('dangkiphong/loaiphong/{lp}',[
	'as' => 'dangkiphong/loaiphong',
	'uses' => 'PageController@phongtheoloaiphong'
]);

Route::get('dangkiphong/mucgia/{mg}',[
	'as' => 'dangkiphong/mucgia',
	'uses' => 'PageController@phongtheomucgia'
]);

Route::get('dangkiphong/search',[
	'as' => 'dangkiphong/search',
	'uses' => 'PageController@phongtheotimkiem'
]);

Route::get('xemphong/{id}',[
	'as' => 'xemphong',
	'uses' => 'PageController@xemphong'
]);

Route::get('dangki',[
	'as' => 'dangki',
	'uses' => 'PageController@dangki'
]);
Route::post('dangki',[
	'as' => 'dangki',
	'uses' => 'PageController@postdangki'
]);

//------------AJAX xử lý form đăng kí
Route::post('cmnd',[
	'as' => 'cmnd',
	'uses' => 'AjaxController@cmnd'
]);

Route::post('sdt',[
	'as' => 'sdt',
	'uses' => 'AjaxController@sdt'
]);

Route::post('email',[
	'as' => 'email',
	'uses' => 'AjaxController@email'
]);

Route::post('username',[
	'as' => 'username',
	'uses' => 'AjaxController@username'
]);
//------------AJAX xử lý form đăng kí



Route::get('dangnhap',[
	'as' => 'dangnhap',
	'uses' => 'PageController@dangnhap'
]);

