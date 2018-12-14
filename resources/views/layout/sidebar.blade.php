<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('trangChu')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang Chủ</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Thêm Phiếu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('phieuThu')}}">Phiếu Thu</a></li>
                        <li><a href="{{route('phieuChi')}}">Phiếu Chi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>