      <div class="cleafix" style="position:relative">
            <div class="unica-top hidden-xs">
                <div class="container">
                    <div class="row col-width-lg">
                        <div class="col-lg-2 col-md-2 col-sm-2 logo-md">
                            <h1 class="unica-logo">
                                <a href="/" class="head-logo"><img src="media/unica.png" /></a>
                            </h1>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-5 search-sm">
                            <form class="unica-search-boxtop navbar-form form-inline" action=""> <input autocomplete="off" name="key" class="form-control unica-input-search" placeholder="Tìm khóa học, giảng viên" required> <button type="submit" class="btn unica-btn-search"><i class="fas fa-search" aria-hidden="true"></i></button>                                </form>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-5 account-sm">
                            @if(Auth::guard('customers')->check())
                                <ul class="db-item">
                                        <li>
                                            <a href="#" class="unica-active-course" id="login-active" style="margin-top: 0;">
                                                <p class="hidden-xs hidden-md hidden-sm">kich hoat khoa hoc</p>
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="db-item-learn hidden-xs">
                                                <i class="fa fa-sign-in" aria-hidden="true"></i> Vao hoc
                                            </a>
                                        </li>
                                        <li class="mgtop">
                                            <a href="#" class="unica-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="margin-left:16px; top:-17px"><b>0</b></span></a>
                                        </li>
                                        <li class="mgtop" style="margin-left: 0px;">
                                            <a class="db-item-circle hidden-xs" href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="btn-group mgtop">
                                            <a class="db-item-circle dropdown-toggle" data-toggle="dropdown" href="#">
                                                <img class="img-responsive" src="media/" />
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu db-drop">
                                                <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>Nạp thẻ</a></li>
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Cập nhật hồ sơ</a></li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('client.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                            @else
                                <a href="#" class="unica-active-course">
                                        <p class="hidden-md hidden-xs hidden-sm">Kích hoạt khóa học</p><i class="fas fa-unlock-alt" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="unica-cart"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span><b>0</b></span></a>
                                    <ul class="unica-account">
                                        <li><a class="unica-login" href="/login">ĐĂNG NHẬP</a></li>
                                        <li><a class="unica-register" href="/register">ĐĂNG KÝ</a></li>
                                    </ul>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="sm-mobile-menu hidden-lg hidden-md hidden-sm">
                <div class="sm-navi-btn offcanvas-toggle js-offcanvas-has-events" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div class="c_header__search-wrapper pull-left">
                    <a class="c_header__mobile-bt mobile-bt--search udi udi-search" data-toggle="collapse" data-target="#searchpanel"> <i class="fa fa-search"></i> </a>
                    <div class="c_header__search collapse" id="searchpanel">
                        <div class="c_quick-search__form">
                            <form class="searchbox" action=""> <input autocomplete="off" class="form-control sm-form" name="key" placeholder="Tìm khóa học, giảng viên" required> <button type="submit" class="btn sm-btn-search"><i class="fa fa-search" aria-hidden="true"></i></button> </form>
                        </div>
                    </div>
                </div>
                <nav class="navibar-mobile" role="navigation">
                    <div class="navbar-offcanvas navbar-offcanvas-touch offcanvas-transform js-offcanvas-done" id="js-bootstrap-offcanvas">
                        <div class="sidenav-brand"> <a class="remove-navibar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            <div class="sm_logo_brand"><img src=""
                                    alt=""></div>
                        </div>
                        <ul class="nav navbar-nav sm-customize-menu">
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
                            <li><a title="Khóa học Tiếng Anh, Tiếng Nhật, Tiếng Hàn, Tiếng Trung Giao Tiếp" href="/course/ngoai-ngu"><i class="fa fa fa-language" aria-hidden="true"></i> Ngoại ngữ</a>
                                <ul class="issub" style="z-index:1002;display:none">
                                    <li><a href="/course/ngoai-ngu">Tất cả Ngoại ngữ</a></li>
                                    <li><a href="/tag/tieng-han">Tiếng Hàn</a></li>
                                    <li><a href="/tag/tieng-anh">Tiếng Anh</a></li>
                                    <li><a href="/tag/tieng-trung">Tiếng Trung</a></li>
                                    <li><a href="/tag/tieng-nhat">Tiếng Nhật</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <a class="logo-mobile" href="/"><img src="media/unica.png"
                        alt="Học Online: 1500+ Khóa học trực tuyến cho người đi là"></a>
                <a class="cart-mobile" href="/gio-hang"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="unica-sl-cart"><b>0</b></span> </a>
                <div class="login-mobile"> <span class="ava-img" data-toggle="collapse" data-target="#userPanel"><i class="fa fa-user"></i></span>
                    <div id="userPanel" class="popover user-login-panel collapse">
                        <div class="popover-content"> <a class="btn btn-block btn-white" href="/login" class="btnDangxuat"><i class="fa fa-sign-in" aria-hidden="true"></i> ĐĂNG NHẬP</a> <a class="btn btn-block btn-white" href="/register" class="btnDangxuat">ĐĂNG KÝ</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="between-head-main"></div>
