<div id="dashboard" style="background-image:url(https://unica.vn/media/img/bg-db.jpg)">
   <button class="navbar navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target=".menu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
   </button> 
   <div class="container">
      <div class="row">
         <p>Học viên:Nguyễn Tiến</p>
         <div class="col-lg-12 col-md-12 col-sm-12 dadmenu">
            <div class="menu">
               <nav>
                  <ul>
                     <li><a href="{{ route('user.course') }}"> <i class="fa fa-book"></i>Khoá học</a></li>
                     <li><a href="{{ route('user.profile') }}"><i class="fa fa-user" aria-hidden="true"></i>Hồ sơ cá Nhân</a></li>
                     <li><a href="{{ route('user.wishlist') }}"><i class="fa fa-book"></i>Yêu Thích</a> </li>
                     <li><a href="{{ route('user.discover') }}"><i class="fa fa-search-plus" aria-hidden="true"></i>Khám Phá</a> </li>
                     <li><a href="{{ route('user.order') }}"><i class="fa fa-history" aria-hidden="true"></i>Lịch sử Đặt Hàng</a></li>
                     <li><a href="{{ route('user.inbox') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Hộp Thư</a></li>
                     <li class="btn-group pull">
                        <a href="#" data-toggle="dropdown"> Thêm <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a> 
                        <ul class="dropdown-menu" role="menu">
                           <li class=""><a href="{{ route('user.loginhistory') }}" class=""> <i class="fa fa-history" aria-hidden="true"></i> Lịch sử đăng nhập</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>