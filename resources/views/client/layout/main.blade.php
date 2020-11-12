<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/client/" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!------HEADER-->
    <header>
        @include('client.layout.head')
    </header>
    <!---END HEADER-->

    <!--Main-->
        @yield('content')
    <!--End Main-->

    <!--Footer-->
    <footer>
        @include('client.layout.foot')
    </footer>
    <!--End Footer-->

    @section('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(".sm-navi-btn").on("click", (function() {
                $(".js-offcanvas-done").addClass("in")
            })), $(".remove-navibar").on("click", (function() {
                $(".js-offcanvas-done").removeClass("in")
            }))
        </script>
        <!---END Footer-->
        <script src="/js/style.js"></script>
        <script src="/js/home.js"></script>
        <script>
            function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
        </script>
    @show
</body>

</html>

