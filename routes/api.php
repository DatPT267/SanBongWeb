<?php

use Illuminate\Http\Request;
use App\Truong;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function ()
{	

	Route::post('login', 'AuthController@login');
	Route::post('signup', 'AuthController@signup');
	

	Route::group(['middleware' => 'auth:api'], function (){
		Route::get('logout', 'AuthController@logout');
		Route::get('user', 'AuthController@user');
		Route::get('list-user','AuthController@listUser');
        Route::post('update-user/{id}', 'AuthController@updateUser');	
		Route::get('delete-user/{id}', 'AuthController@deleteUser');
	});
});

Route::get('list-user','AuthController@listUser' );



Route::get('list-san', 'AppController@listSanbong');
Route::get('tintuchot', 'AppController@TinTucHot');
Route::get('coso/{quan}', 'AppController@listCoSo');
Route::get('dssan/{id}', 'AppController@listSan' );

Route::post('datsan', 'AppController@DatSan');
Route::post('khunggio', 'AppController@KhungGio');
Route::post('addthongbao', 'AppController@ThongBao' );
Route::get('thongbao/{id}', 'AppController@listThongBao' );
Route::get('clb', 'AppController@listCLB' );
Route::get('thanhvien/{id}', 'AppController@listTV' );
Route::post('addthanhvien', 'AppController@addTV');
