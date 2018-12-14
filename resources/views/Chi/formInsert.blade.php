@extends('master')
@section('title', 'Thêm phiếu chi')
@section('content')
<div class="form_insert">
	<div class="form_title">
		<h3>Thêm phiếu chi</h3>
	</div>
	<form action="{{route('phieuChiXuLy')}}" class="form-horizontal" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <!-- ngày chi -->
        <div class="form-group">
            <label class="control-label col-sm-12">Ngày chi:</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" name="txtNgayChi">
            </div> 
        </div> 
        <!-- Lý do chi -->
        <div class="form-group">
        	<label class="control-label col-sm-12">Lý do chi:</label>
            <div class="col-sm-12">
            	<input type="text" class="form-control" name="txtLyDo">
            </div> 
        </div>    
        <!-- số tiền -->
        <div class="form-group">
        	<label class="control-label col-sm-12">Số tiền:</label>
            <div class="col-sm-12">
            	<input type="text" class="form-control" name="txtSoTien">
            </div> 
        </div>    
        <!-- button -->
        <div class="form-group">
        	<div class="row">
        		<div class="col-md-4"></div>
        		<div class="col-md-6">
        			<input type="reset" class="btn btn-outline-warning" value="Nhập lại">
        			<input type="submit" class="btn btn-outline-primary" value="Thêm phiếu">        			
        		</div>
        	</div>
        </div>  
    </form>
</div>
@endsection