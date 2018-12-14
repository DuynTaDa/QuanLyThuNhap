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
Route::get('trangChu', 'ThuController@show_list')->name('trangChu');
Route::get('trangChu', 'ThongKeController@show_list')->name('trangChu');
Route::get('phieuThu', 'ThuController@form_insert_thu')->name('phieuThu');
Route::post('phieuThu', 'ThuController@insert_record')->name('phieuThuXuLy');
Route::get('phieuChi', 'ChiController@form_insert_chi')->name('phieuChi');
Route::post('phieuChi', 'ChiController@insert_record')->name('phieuChiXuLy');