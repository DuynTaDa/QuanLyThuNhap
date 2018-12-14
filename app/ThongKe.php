<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ThongKe extends Model
{
    static function getAll()
    {
    	$arr = DB::table('tblThongKe')
    		->join('tblDanhGia', 'tblThongKe.maDanhGia', '=', 'tblDanhGia.maDanhGia')
    		->get();
    	return $arr;
    }

    static function insert($obj)
    {
    	DB::table('tblThongKe')->insert([
    		'thang' => $obj->thangNam,
    		'tongThu' => $obj->tongThu,
    		'tongChi' => $obj->tongChi,
    		'soDu' => $obj->soDu,
    		'maDanhGia' => $obj->maDanhGia
    	]);
    }
}

