<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThongKe;
use App\Thu;
use App\Chi;

class ThongKeController extends Controller
{
    public function show_list()
    {
    	$arr = ThongKe::getAll();
    	return view('list', ['danhSachThongKe' => $arr]);
    }

    public function insert_record()
    {
    	$date = date('d/m/Y');
    	$arr = explode('/',date('d/m/Y')); //nếu ngày htai là ngày đầu tháng
    	if($arr[0] == 1)
    	{
    		$arr1 = explode('/',date('d/m/Y', strtotime(date("d/m/Y", strtotime($today)) . " -1 month"))); //lấy tháng trước đó
    		$thangNam = implode('/', array($arr1[1], $arr1[2]));

    		$tongThu = Thu::tinh_tong_thu();
	    	$tongChi = Chi::tinh_tong_chi();
	    	$soDu = $tongThu - $tongChi;
	    	if($tongChi > $tongThu/3)
	    	{
	    		$maDanhGia = 3;
	    	}elseif($tongChi < $tongThu/3)
	    	{
	    		$maDanhGia = 1;
	    	}else
	    	{
	    		$maDanhGia = 2;
	    	}

	    	$objThongKe = new ThongKe();
	    	$objThongKe->thangNam = $thangNam;
	    	$objThongKe->tongThu = $tongThu;
	    	$objThongKe->tongChi = $tongChi;
	    	$objThongKe->soDu = $soDu;
	    	$objThongKe->maDanhGia = $maDanhGia;
	    	ThongKe::insert($objThongKe);
	    	return rediect()->route('trangChu');
    	}
    }
}
