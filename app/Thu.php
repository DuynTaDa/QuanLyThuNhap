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

    static function tinh_tong_thu()
    {
        $arr = DB::table('tblthu')
            ->select(DB::raw('sum(soTien) as tongThu'))
            ->where('month(CURRENT_DATE())', 'month(ngayThu)')
            ->get();
        return $arr;
    }
}

// INSERT INTO tblthongke (thang, tongThu, tongChi, maDanhGia) VALUES (CURRENT_DATE(), (SELECT SUM(soTien) AS tongThu FROM tblthu), (SELECT SUM(soTien) AS tongChi FROM tblchi), 2)