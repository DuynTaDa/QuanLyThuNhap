<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chi;

class ChiController extends Controller
{
    public function form_insert_chi()
    {
    	return view('Chi/formInsert');
    }

    public function insert_record(Request $rq)
    {
    	$objChi = new Chi();
    	$objChi->ngayChi = $rq->txtNgayChi ;
    	$objChi->lyDo = $rq->txtLyDo ;
    	$objChi->soTien = $rq->txtSoTien ;
    	Chi::insert($objChi);
    	return redirect()->route('trangChu');
    }
}
