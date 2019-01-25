<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<title>@yield('title')</title>

	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{asset('visitor/css/bootstrap.min.css')}}" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{asset('visitor/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('visitor/css/style-responsive.css')}}" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('visitor/css/font.css')}}" type="text/css"/>
	<link href="{{asset('visitor/css/font-awesome.css')}}" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('visitor/css/morris.css')}}" type="text/css"/>
	<!-- calendar -->
	<link rel="stylesheet" href="{{asset('visitor/css/monthly.css')}}">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	
</head>
<body>
	<div class="log-w3">
	<div class="w3layouts-main">
		<h2>Đăng nhập</h2>
		@if(session('login_err') || session('must_login') || session('register_mess') || session('logout_mess'))
			<div class="alert alert-danger alert-dismissible position-center">
	            <button type="button" class="close" data-dismiss="alert">&times; &nbsp;</button>
	            {{session('login_err')}} 
	            {{session('must_login')}} 
	            {{session('register_mess')}} 
	            {{session('logout_mess')}}
	        </div>
		@endif
		<form action="{{route('dangNhap')}}" method="post">
			{{csrf_field()}}
			<input type="text" class="ggg" name="txtUser" placeholder="Username" required="">
			<input type="password" class="ggg" name="txtPass" placeholder="Password" required="">
			<a href="#">Lại quên mật khẩu?</a>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="btn_login">
				
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>

		</form>
		<p>Bạn không có tài khoản à ?<a href="{{route('dangKy')}}">Tạo tài khoản đê</a></p>
	</div>
</div>
	
	<script src="{{asset('visitor/js/jquery2.0.3.min.js')}}"></script>
	<script src="{{asset('visitor/js/raphael-min.js')}}"></script>
	<script src="{{asset('visitor/js/morris.js')}}"></script>
	
	<script src="{{asset('visitor/js/bootstrap.js')}}"></script>
	<script src="{{asset('visitor/js/jquery.dcjqaccordion.2.7.js')}}"></script>
	<script src="{{asset('visitor/js/scripts.js')}}"></script>
	<script src="{{asset('visitor/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('visitor/js/jquery.nicescroll.js')}}"></script>
		@stack('js')
	</body>
</html>