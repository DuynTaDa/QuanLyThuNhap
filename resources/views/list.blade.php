@extends('master')
@section('title', 'Trang chủ')
@section('content')
	<div class="title">
		<h3>Quản lý thu nhập</h3>
	</div>
	<div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>STT</th>
            <th>Ngày chi</th>
            <th>Lý do chi</th>
            <th>Số tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          	@foreach($danhSachChi as $objChi)
			<tr>
				<td>{{$objChi->maChi}}</td>
				<td>{{$objChi->ngayChi}}</td>
				<td>{{$objChi->lyDo}}</td>
				<td>{{$objChi->soTien}}</td>
			</tr>
			@endforeach
        </tbody>
      </table>
	</div>

	<div class="table">		
		<div id="tblChi">
			<table>
				<thead>
					<tr>
						<td colspan="4">Danh sách chi</td>
					</tr>
					<tr>
						<td>STT</td>
						<td>Ngày chi</td>
						<td>Lý do chi</td>
						<td>Số tiền</td>
					</tr>
				</thead>
				<tbody>
					@foreach($danhSachChi as $objChi)
					<tr>
						<td>{{$objChi->maChi}}</td>
						<td>{{$objChi->ngayChi}}</td>
						<td>{{$objChi->lyDo}}</td>
						<td>{{$objChi->soTien}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="table">	
		<div id="tblThongKe">
			<table>
				<thead>
					<tr>
						<th colspan="4">Thống kê - Đánh giá</th>
					</tr>
					<tr>
						<th>STT</th>
						<th>Tháng/Năm</th>
						<th>Tổng thu</th>
						<th>Tổng chi</th>
						<th>Số dư</th>
						<th>Đánh giá</th>
					</tr>
				</thead>
				<tbody>
					@foreach($danhSachThongKe as $objThongKe)
					<tr>
						<td>{{$objThongKe->maTk}}</td>
						<td>{{$objThongKe->tongThu}}</td>
						<td>{{$objThongKe->tongChi}}</td>
						<td>{{$objThongKe->soDu}}</td>
						<td>{{$objThongKe->giaTri}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@push('js')
	<script type="text/javascript">
		$(document).ready(function()
		{

		})
	</script>
@endpush