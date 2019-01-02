<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Chi extends Model
{
    static function getAll()
    {
    	$arr = DB::table('tblchi')->get();
    	return $arr;
    } 

    static function insert($obj)
    {
    	DB::table('tblchi')->insert([
    		'ngayChi' => $obj->ngayChi,
    		'lyDo' => $obj->lyDo,
    		'soTien' => $obj->soTien
    	]);
    }

    static function tinh_tong_chi_theo_thang($thang)
    {
        $arr = DB::select('select sum(soTien) as tongChi from tblchi where month(ngayChi) = ?', [$thang]);
        return $arr;
    }
}
