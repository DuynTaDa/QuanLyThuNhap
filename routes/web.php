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
    return view('master');
});
Route::get('trangChu', 'ThongKeController@insert_record')->name('trangChu');
Route::get('phieuThu', 'ThuController@form_insert_thu')->name('phieuThu');
Route::post('phieuThu', 'ThuController@insert_record')->name('phieuThuXuLy');
Route::get('phieuChi', 'ChiController@form_insert_chi')->name('phieuChi');
Route::post('phieuChi', 'ChiController@insert_record')->name('phieuChiXuLy');

Route::get('dangNhap','TaiKhoanController@login')->name('dangNhap');
Route::post('dangNhap','TaiKhoanController@loginXuLy')->name('dangNhap');
Route::get('dangKy','TaiKhoanController@register')->name('dangKy');
Route::post('dangKy','TaiKhoanController@registerXuLy')->name('dangKy');
Route::post('dangXuat','TaiKhoanController@logoutXuLy')->name('dangXuat');