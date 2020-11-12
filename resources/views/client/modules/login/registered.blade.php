<html lang="vi"><head>
    <title>Trang quản trị tài khoản Unica.vn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/client/" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="https://static.unica.vn/icon/favicon.ico">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('media/display-1.jpg');">

<div class="wrap-login100 p-l-110 p-r-110 p-t-20 p-b-13">
    <form method="POST" class="login100-form validate-form flex-sb flex-w" action="{{route('client.create')}}">
        @csrf
            <img src="media/logo-1.png">
        </span>

        <div class="p-t-11 p-b-1 col-md-12" style="text-align: center;color: #555">
            <h3 class="font-w">ĐĂNG KÝ TÀI KHOẢN</h3>
        </div>

        <div class="wrap-input100  register-input" data-validate="Yêu cầu nhập đầy đủ Họ và tên của bạn">
            <input placeholder="Họ và tên" class="input100" type="text" name="full_name" value="">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100  register-input" data-validate="Yêu cầu nhập Email của bạn">
            <input placeholder="Email" class="input100" type="email" name="email" value="">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100  register-input" data-validate="Yêu cầu nhập Số điện thoại của bạn">
            <input placeholder="Số điện thoại" class="input100" type="tel" name="phone" value="">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100  register-input" data-validate="Yêu cầu nhập mật khẩu">
            <input placeholder="Mật khẩu, lớn hơn 6 ký tự" class="input100" type="password" name="password">
            <span class="focus-input100"></span>
        </div>


        <div class="container-login100-form-btn m-t-17">
            <button type="submit" class="login100-form-btn btn">
                ĐĂNG KÝ
            </button>
        </div>

        <div class="clearfix"></div>
        <div class="p-t-10 p-b-10 col-md-12">
            <center>
            <span class="txt1">
                Hoặc
            </span>
            </center>
        </div>
          <div class="container-login100-form-btn-2">
            <a style="width: 100%;" href="javascript:void(0)" class="btn-face m-b-20">
              <img class="img-face" src="media/icon-face.png" width="27px" height="27px" alt="">
              <span class="login-face">ĐĂNG NHẬP BẰNG FACEBOOK</span>
            </a>
           </div>
        <div class="w-full text-center">
            <span class="txt2">
                Bạn có tài khoản?
            </span>
            <a href="/login" class="txt2 bo1">
                Đăng nhập
            </a>
        </div>
    </form>
</div>

    </div>
</div>


<div id="dropDownSelect1"></div>




<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=vi&amp;v=NjbyeWjjFy97MXGZ40KrXu3v&amp;k=6LcLsycTAAAAABTE6i9OmvP8VvJ-yqWPFZ0JWQ4l&amp;cb=hcvzbpycftw8" name="c-33wkkzr9" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div>
   <script src="/static/js/app.7d8bc81d.js"></script>
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=40d3550850ae264010dd149527b4f3bd&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/NjbyeWjjFy97MXGZ40KrXu3v/recaptcha__vi.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</body>
</html>
