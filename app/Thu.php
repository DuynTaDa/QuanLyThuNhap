<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Thu extends Model
{
    static function getAll()
    {
        $arr = DB::table('tblthu')->get();
        return $arr;
    }
    
    static function insert($obj)
    {
    	DB::table('tblthu')->insert([
    		'ngayThu' => $obj->ngayThu,
    		'nguonThu' => $obj->nguonThu,
    		'soTien' => $obj->soTien
    	]);
    }

    static function tinh_tong_thu_theo_thang($thang)
    {
        $arr = DB::select('select sum(soTien) as tongThu from tblthu where month(ngayThu) = ?', [$thang]);
        return $arr;
    }
}
