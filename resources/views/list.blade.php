@extends('master')
@section('title', 'Trang chủ')
@section('content')
	<div class="row">
		<div class="col-md-6 w3agile-notifications">
			<div class="table-agile-info">
		 		<div class="panel panel-default">
				    <div class="panel-heading">
				    Danh sách thu
				    </div>
					<div class="table-responsive">
				      	<table class="table" ui-jq="footable" ui-options='{
					        "paging": {
					          "enabled": true
					        },
					        "filtering": {
					          "enabled": true
					        },
					        "sorting": {
					          "enabled": true
					        }}'>
					        <thead>
					          	<tr>
						            <th data-breakpoints="xs">STT</th>
						            <th>Ngày thu</th>
						            <th data-breakpoints="xs sm md">Nguồn thu</th>
						            <th data-breakpoints="xs">Số tiền</th>
					          	</tr>
					        </thead>
					        <tbody>
					        	@foreach($danhSachThu as $objThu)
								<tr>
									<td>{{$objThu->maThu}}</td>
									<td>{{$objThu->ngayThu}}</td>
									<td>{{$objThu->nguonThu}}</td>
									<td>{{$objThu->soTien}}</td>
								</tr>
								@endforeach
					        </tbody>
				      </table>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-md-6 w3agile-notifications">
			<div class="table-agile-info">
		 		<div class="panel panel-default">
				    <div class="panel-heading">
				    Danh sách chi
				    </div>
					<div class="table-responsive">
				      	<table class="table" ui-jq="footable" ui-options='{
					        "paging": {
					          "enabled": true
					        },
					        "filtering": {
					          "enabled": true
					        },
					        "sorting": {
					          "enabled": true
					        }}'>
					        <thead>
					          	<tr>
						            <th data-breakpoints="xs">STT</th>
						            <th>Ngày chi</th>
						            <th data-breakpoints="xs sm md">Lý do chi</th>
						            <th data-breakpoints="xs">Số tiền</th>
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
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="table-agile-info">
	 		<div class="panel panel-default">
			    <div class="panel-heading">
			    Thống kê - Đánh giá
			    </div>
				<div class="table-responsive">
			      	<table class="table" ui-jq="footable" ui-options='{
				        "paging": {
				          "enabled": true
				        },
				        "filtering": {
				          "enabled": true
				        },
				        "sorting": {
				          "enabled": true
				        }}'>
				        <thead>
				          	<tr>
					            <th>STT</th>
					            <th>Tháng năm</th>
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