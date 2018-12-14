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

    static function tinh_tong_chi()
    {
        $arr = DB::table('tblchi')
            ->select(DB::raw('sum(soTien) as tongChi'))
            ->where('month(CURRENT_DATE())', 'month(ngayChi)')
            ->get();
        return $arr;
    }
}
