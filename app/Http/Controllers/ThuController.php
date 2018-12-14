<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thu;
use App\Chi;

class ThuController extends Controller
{
    public function form_insert_thu()
    {
        return view('Thu.formInsert');
    }
    
    public function insert_record(Request $rq)
    {
    	$objThu = new Thu();
    	$objThu->ngayThu = $rq->txtNgayThu;
    	$objThu->nguonThu = $rq->txtNguonThu ;
    	$objThu->soTien = $rq->txtSoTien ;
    	Thu::insert($objThu);
    	return redirect()->route('trangChu');
    }

    public function show_list()
    {
    	$arrThu = Thu::getAll();
        $arrChi = Chi::getAll();
    	return view('list', ['danhSachThu' => $arrThu, 'danhSachChi' => $arrChi]);
    }
}
