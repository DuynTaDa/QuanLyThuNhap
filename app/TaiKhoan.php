<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TaiKhoan extends Model
{
    static function login($obj)
    {
    	// $arr = DB::table('tblTaiKhoan')
	    // 	->where([
	    // 		['user','=','$obj->user'],
	    // 		['pass','=','$obj->pass']
	    // 	])
	    // 	->get();
    	// return $arr;
        $arr = DB::select('select * from tblTaiKhoan where user = ? and pass = ?',[$obj->user, $obj->pass]);
        return $arr;
    }

    static function register($obj)
    {
    	DB::table('tblTaiKhoan')->insert([
    		'user' => $obj->user,
    		'pass' => $obj->pass
    	]);
    }
}
