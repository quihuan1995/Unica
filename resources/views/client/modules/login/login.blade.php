    <html lang="vi">
    <head>
        <title>Trang quản trị tài khoản Unica.vn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/client/" />
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="https://static.unica.vn/icon/favicon.ico">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css">
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('media/display-1.jpg');">

    <div class="wrap-login100 p-l-110 p-r-110 p-t-20 p-b-13">
        <form id="login_normal" name="login_normal" method="POST" action="" class="login100-form validate-form flex-sb flex-w">
           @csrf
            <span class="login100-form-title p-b-10"><img src="media/logo-1.png"></span>

            <div class="col-md-12" style="text-align: center;color: #555">&nbsp;
                <h3 class="font-w">ĐĂNG NHẬP</h3>
            </div>

            <div class="wrap-input100" data-validate="Email không được để trống">
                <input class="input100" type="text" name="email" placeholder="Nhập email" value="">
                <span class="focus-input100"></span>
            </div>

            <div class="clearfix"></div>

            <div class="p-t-1"> &nbsp;</div>
            <div class="wrap-input100 validate-input" data-validate="Mật khẩu không được để trống">
                <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn m-t-17">
                <button type="submit" class="login100-form-btn btn">ĐĂNG NHẬP</button>
            </div>
            <div class="p-t-10 p-b-10 col-md-12">
                <center><span class="txt1 ">Hoặc</span></center>
            </div>

            <div class="clearfix"></div>
            <div class="container-login100-form-btn-2">
                <a style="width: 100%;" href="javascript:void(0)"  class="btn-face m-b-20 ">
                <img class="img-face" src="media/icon-face.png"  width="27px" height="27px" alt="">
                <span class="login-face">ĐĂNG NHẬP BẰNG FACEBOOK</span>
                </a>
            </div>
            <div class="w-full text-center">
                <span class="txt2">Bạn chưa có tài khoản?</span>
                <a href="/registered" class="txt2 bo1">Đăng ký mới</a>
                <br>
                <a style="color: red;" href="/reset_pass" class="txt2 m-l-5">Quên mật khẩu?</a>
            </div>

            <div class="clearfix"></div>

        </form>
    </div>

        </div>
    </div>


    <div id="dropDownSelect1"></div>


    <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>

 <script src="media/app.7d8bc81d.js"></script>
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=606aff05c3b5d25d149500b340f0a73a&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
</body>
</html>
