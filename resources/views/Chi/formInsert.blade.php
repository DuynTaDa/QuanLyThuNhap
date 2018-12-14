@extends('master')
@section('title', 'Thêm phiếu chi')
@section('content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm phiếu chi
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form class="form-horizontal" role="form" action="{{route('phieuChiXuLy')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="txtNgayChi" class="col-lg-2 col-sm-2 control-label">Ngày chi</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" name="txtNgayChi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtLyDo" class="col-lg-2 col-sm-2 control-label">Lý do</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="txtLyDo" placeholder="Lý do">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtSoTien" class="col-lg-2 col-sm-2 control-label">Số tiền</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="txtSoTien" placeholder="Số tiền">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-6">
                            <button type="reset" class="btn btn-warning">Nhập lại</button>
                            <button type="submit" class="btn btn-primary">Thêm phiếu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
@endsection