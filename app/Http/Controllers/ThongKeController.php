<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThongKe;
use App\Thu;
use App\Chi;
use DB;

class ThongKeController extends Controller
{
    public function insert_record()
    {
    	$arrThu = Thu::getAll();
    	$arrChi = Chi::getAll();
    	$arrTk = ThongKe::getAll();
    	if(count($arrThu) == 0)
    	{
    		return redirect()->route('phieuThu')->with('warning', 'Chưa có bản ghi trong bảng Danh sách thu.');
    	}elseif(count($arrChi) == 0)
    	{
    		return redirect()->route('phieuChi')->with('warning', 'Chưa có bản ghi trong bảng Danh sách chi.');
    	}else
    	{
	    	//nếu ngày htai là ngày đầu tháng
	    	$arr = explode('/',date('d/m/Y')); 
	    	if($arr[0] == 1)
	    	{
	    		//lấy tháng trước đó
	    		$arr1 = explode('/',date('d/m/Y', strtotime(date("d/m/Y", strtotime(date('d/m/Y'))) . " -1 month"))); 
	    		$thangNam = implode('/', array($arr1[1], $arr1[2]));

	    		//kiểm tra đã thống kê tháng này hay chưa
	    		$arrGetBy = ThongKe::getByMonth((int)$arr1[1]);
	    		if(count($arrGetBy) < 1)
	    		{	
	    			//tính tổng thu, chi theo tháng hiện tại
		    		$arrTongThu = Thu::tinh_tong_thu_theo_thang($arr1[1]);
			    	$arrTongChi = Chi::tinh_tong_chi_theo_thang($arr1[1]);
			    	$tongThu = $arrTongThu[0]->tongThu; //cột tổng thu
			    	$tongChi = $arrTongChi[0]->tongChi;
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
			    	//insert bảng Tk
			    	$objThongKe = new ThongKe();
			    	$objThongKe->thangNam = $thangNam;
			    	$objThongKe->tongThu = $tongThu;
			    	$objThongKe->tongChi = $tongChi;
			    	$objThongKe->soDu = $soDu;
			    	$objThongKe->maDanhGia = $maDanhGia;
			    	
		    		ThongKe::insert($objThongKe);
			    	return view('list', ['danhSachThongKe' => $arrTk, 'danhSachThu' => $arrThu, 'danhSachChi' => $arrChi]);
			    }else
			    {
			    	return view('list', ['danhSachThongKe' => $arrTk, 'danhSachThu' => $arrThu, 'danhSachChi' => $arrChi]);
			    }
	    	}else
	    	{
		    	return view('list', ['danhSachThongKe' => $arrTk, 'danhSachThu' => $arrThu, 'danhSachChi' => $arrChi]);
	    	}
	    }
    }
}
