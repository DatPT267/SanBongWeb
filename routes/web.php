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

//ADMIN

Route::get('admin/dangnhap', 'UserController@getdangnhapAdmin');
Route::post('admin/dangnhap', 'UserController@postdangnhapAdmin');
Route::get('admin/logout', 'UserController@getdangxuatAdmin');

Route::group(['prefix' => 'admin' , 'middleware'=>'adminLogin'], function() {
    Route::group(['prefix' => 'phong'], function() {
    	
        Route::get('danhsach', 'PhongTNController@getDanhSach');
        
        Route::get('sua/{id}', 'PhongTNController@getSua');
        Route::post('sua/{id}', 'PhongTNController@postSua');

        Route::get('them', 'PhongTNController@getThem');
        Route::post('them', 'PhongTNController@postThem');

        Route::get('xoa/{id}', 'PhongTNController@getXoa');
    });
    Route::group(['prefix' => 'truong'], function() {
    	
       Route::get('danhsach', 'TruongController@getDanhSach');
        
        Route::get('sua/{id}', 'TruongController@getSua');
        Route::post('sua/{id}', 'TruongController@postSua');

        Route::get('them', 'TruongController@getThem');
        Route::post('them', 'TruongController@postThem');

        Route::get('xoa/{id}', 'TruongController@getXoa');
    });
    Route::group(['prefix' => 'caulacbo'], function() {
    	
        Route::get('danhsach', 'CauLacBoController@getDanhSach');
         
        Route::get('sua/{id}', 'CauLacBoController@getSua');
        Route::post('sua/{id}', 'CauLacBoController@postSua');
 
        Route::get('them', 'CauLacBoController@getThem');
        Route::post('them', 'CauLacBoController@postThem');
 
        Route::get('xoa/{id}', 'CauLacBoController@getXoa');
    });
    Route::group(['prefix' => 'thanhvien'], function() {
    	
         Route::get('danhsach/{id}', 'ThanhVienController@getDanhSach');
         
         Route::get('sua/{id}', 'ThanhVienController@getSua');
         Route::post('sua/{id}', 'ThanhVienController@postSua');
 
         Route::get('them', 'ThanhVienController@getThem');
         Route::post('them', 'ThanhVienController@postThem');
 
         Route::get('xoa/{id}', 'ThanhVienController@getXoa');
    });
    Route::group(['prefix' => 'tintuc'], function() {
    	//admin/tintuc/danhsach
        Route::get('danhsach', 'TinTucController@getDanhSach')->name('dstintuc');
       
        Route::get('sua/{id}', 'TinTucController@getSua');
        Route::post('sua/{id}', 'TinTucController@postSua');

        Route::get('them', 'TinTucController@getThem');
        Route::post('them', 'TinTucController@postThem');

        Route::get('xoa/{id}','TinTucController@getXoa');
    });
    Route::group(['prefix' => 'user'], function() {
    	//admin/user/danhsach
        Route::get('danhsach', 'UserController@getDanhSach');
       
        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}','UserController@getXoa');
    });
    Route::group(['prefix' => 'thietbi'], function() {
        
        Route::get('danhsach/{id}', 'ThietBiConTroller@getDanhSach');
       
        Route::get('sua/{id}', 'ThietBiConTroller@getSua');
        Route::post('sua/{id}', 'ThietBiConTroller@postSua');

        Route::get('them/{id}', 'ThietBiConTroller@getThem');
        Route::post('them/{id}', 'ThietBiConTroller@postThem');

        Route::get('xoa/{id}','ThietBiConTroller@getXoa');
    });
    Route::group(['prefix' => 'loaiphong'], function() {
        
        Route::get('danhsach', 'LoaiPhongConTroller@getDanhSach');
       
        Route::get('sua/{id}', 'LoaiPhongConTroller@getSua');
        Route::post('sua/{id}', 'LoaiPhongConTroller@postSua');

        Route::get('them', 'LoaiPhongConTroller@getThem');
        Route::post('them', 'LoaiPhongConTroller@postThem');

        Route::get('xoa/{id}','LoaiPhongConTroller@getXoa');
    });
    Route::group(['prefix' => 'datphong'], function() {
        
        Route::get('danhsach', 'DatPhongConTroller@getDanhSach');
        Route::post('danhsach', 'DatPhongConTroller@postDanhSach');
       
        Route::get('sua/{id}', 'DatPhongConTroller@getSua');
        Route::post('sua/{id}', 'LoaiPhongConTroller@postSua');

        Route::get('them', 'DatPhongConTroller@getThem');
        Route::post('them', 'DatPhongConTroller@postThem');

        Route::get('xoa/{id}','DatPhongConTroller@getXoa');
    });
    Route::group(['prefix' => 'lich'], function() {
        
        Route::get('events/{id}' ,'EventController@index');
      

        Route::get('addevent/{id}' ,'EventController@getAdd');
        Route::post('addevent/{id}' ,'EventController@postAdd');
        
        Route::get('display/{id}' ,'EventController@display');
        
        Route::get('edit/{id}' ,'EventController@getEdit');
        Route::post('edit/{id}' ,'EventController@postEdit')->name('postAdd');
        
        Route::get('delete/{id}' ,'EventController@getDelete');
    });


   

});


/* NguoiDung */
Route::post('dangnhap', 'PagesController@postDangNhap');
Route::post('dangky', 'PagesController@postDangKy');
Route::get('dangxuat', 'PagesController@getDangXuat')->name('logout');
Route::post('changepass', 'PagesController@possChangePass');
Route::post('changeAccount', 'PagesController@possChangeAcc');
Route::get('khuyenmai', function() {
    return view('pages.khuyenmai');
});
Route::get('khachhang', "PagesController@getKhachHang");
Route::get('trangchu','PagesController@trangchu')->name('trangchu');

/*dat san*/
Route::get('timdoitac', function() {
    return view('pages.timdoitac');
});

Route::get('test', 'PagesController@test');
Route::get('quanlytimdoi', function() {
    return view('pages.quanlytimdoi');
});
Route::get('thongtintaikhoan', 'PagesConTroller@getTaiKhoan');
Route::get('tintuc', 'PagesController@getTinTuc');
Route::get('tintuc/{chitiet}', 'PagesConTroller@getTinTucChiTiet');

Route::get('dstruong/{quan}','PagesController@getDSTruong');

Route::get('dstruong/{quan}/{truong}','PagesController@getDSPhong');
Route::get('dstruong/{quan}/{truong}/{phong}','PagesController@getPhong');
Route::post('dstruong/{quan}/{truong}/{phong}','PagesController@postPhong');
/* END NguoiDung*/

