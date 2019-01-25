<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaiKhoan;

class TaiKhoanController extends Controller
{
    public function login()
    {
    	return view('TaiKhoan.login');
    }

    public function loginXuLy(Request $rq)
    {
    	$obj = new TaiKhoan();
    	$obj->user = $rq->txtUser;
    	$obj->pass = $rq->txtPass;
    	$arr = TaiKhoan::login($obj);
    	if(count($arr) > 0)
    	{
    		session()->put('user', $obj->user);
    		return redirect()->route('trangChu');
    	}else
    	{
    		return redirect()->route('dangNhap')->with('login_err', 'Tài khoản không tồn tại.');
    	}
    }

    public function register()
    {
        return view('TaiKhoan.register');
    }

    public function registerXuLy(Request $rq)
    {
        $obj = new TaiKhoan();
        $obj->user = $rq->txtUser;
        $obj->pass = $rq->txtPass;
        TaiKhoan::register($obj);
        return redirect()->route('dangNhap')->with('register_mess','Đăng ký thành công rồi nha.');
    }

    public function logoutXuLy()
    {
        if (session()->has('user')) 
        {
            session()->flush();
            return redirect()->route('dangNhap')->with('logout_mess','Đăng xuất tài khoản thành công.');
        }
    }
}
