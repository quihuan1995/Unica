@extends('client.layout.main')
@section('title','detail')
@section('content')
    <div id="body" >
        <!-- Detail -->
        <!-- Top -->
        <div id="detail-top">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12" id="u-course-highlight">
                <div class="breadcumb-detail-course">
                    <ul class="breadcrumb">
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Category</a></li>
                    <li>
                        Học làm kỹ xảo trong sản xuất video bằng ADOBE AFTER EFFECTS
                    </li>
                    </ul>
                </div>
                <h1 itemprop="itemReviewed">
                    <span itemprop="name"
                    >Học làm kỹ xảo trong sản xuất video bằng ADOBE AFTER
                    EFFECTS</span
                    >
                </h1>
                <div class="detail-desc" itemprop="description">
                    Khoá học làm video bằng AFTER EFFECTS - Khóa học giúp bạn thành
                    thạo làm kỹ xảo video, biết cách áp dụng các kỹ xảo 2D, 3D trong
                    phần mềm Adobe After Effects để tạo kỹ xảo theo yêu cầu công
                    việc.
                </div>
                <div class="flex-container">
                    <div class="detail-tea" itemprop="author">
                    <img
                        class="picture-teacher-circle"
                        src="static/img/987190.jpg"
                        alt=""
                    />
                    <a href="#">Vũ Tiến Thành</a>
                    </div>
                    <div class="detail-rate">
                    <span class="star-rate">
                        <i class="far fa-star" aria-hidden="true"></i>
                        <i class="far fa-star" aria-hidden="true"></i>
                        <i class="far fa-star" aria-hidden="true"></i>
                        <i class="far fa-star" aria-hidden="true"></i>
                        <i class="far fa-star" aria-hidden="true"></i>
                    </span>
                    <span>15 đánh giá</span>
                    </div>
                    <div class="detail-student">
                    <span><i class="fas fa-users" aria-hidden="true"></i></span>
                    <span> 999 học viên</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Bot -->
        <div id="detail-bottom">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                <div
                    class="html5-video-player embed-responsive embed-responsive-16by9"
                >
                    <iframe
                    class="embed-responsive-item"
                    src="https://www.youtube.com/embed/CulBRA4HFgk"
                    allowfullscreen
                    ></iframe>
                </div>
                <div class="block-buy-small-1 clearfix" >
                    <div class="bb-left">
                    <div class="price">
                        <span class="a">500.000<sup>đ</sup></span>
                        <span class="b">700.000<sup>đ</sup></span>
                        <span class="c">-22%</span>
                    </div>
                    <div class="time">
                        <i class="fa fa-clock" aria-hidden="true">Thời gian ưu đãi còn 1 ngày</i>
                    </div>
                    <div class="btn-s">
                        <a class="btn btn-danger" href="">ĐĂNG KÍ HỌC</a>
                        <a class="btn btn-success" href=""><i class="fa fa-cart-plus" aria-hidden="true"></i> THÊMVÀO GIỎ HÀNG</a>
                        <p>Hoàn tiền trong 7 ngày nếu không hài lòng</p>
                    </div>
                    </div>
                    <div class="bb-right">
                        <div class="block-ulti">
                            <ul>
                            <li>
                                <i class="far fa-clock" aria-hidden="true"></i>Thời
                                lượng: <strong>04 giờ 01 phút</strong>
                            </li>
                            <li>
                                <i class="fa fa-play-circle" aria-hidden="true"></i>Giáo
                                trình: <strong>45 bài giảng</strong>
                            </li>
                            <li>
                                <i class="fa fa-history" aria-hidden="true"></i>Sở hữu
                                khóa học trọn đời
                            </li>
                            <li>
                                <i class="fa fa-certificate" aria-hidden="true"></i>Cấp
                                chứng nhận hoàn thành
                            </li>
                            <li>
                                <i class="fa fa-percent" aria-hidden="true"></i>Giảm
                                thêm <strong>10%</strong> khi thanh toán online
                            </li>
                            </ul>
                        </div>
                        <center><a href="#">Bạn có mã giảm giá ?</a></center>
                        <div class="coupon">
                            <div class="form-group">
                                <input id="my-input" class="form-control" type="text" placeholder="Nhập mã giảm giá ..." name=""/>
                            </div>
                            <button class="btn btn-primary" type="submit">Áp dụng</button>
                            {{-- <div class="note">
                                <span>Coupon không hợp lệ</span>
                            </div> --}}
                        </div>
                        {{-- <hr />
                        <div class="more-hv">
                            <h5>Bạn cần đào tạo cho nhiều hơn 5 người?</h5>
                            <p class="form-group">
                            Giúp team bạn phát triển mỗi ngày với nền tảng đào tạo nội
                            bộ chuyên nghiệp và hàng trăm khoá học chất lượng.
                            </p>
                            <button class="btn" type="submit">Đăng kí ngay</button>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-detail">
                    <ul>
                    <li><a href="#u-des-course">Giới thiệu</a></li>
                    <li><a href="#u-list-course">Nội dung khóa học</a></li>
                    <li><a href="#u-course-teacher">Thông tin giảng viên</a></li>
                    <li><a href="#u-rate-hv">Đánh giá</a></li>
                    </ul>
                </div>
                <div class="u-learn-what">
                    <h3>Bạn sẽ học được những gì</h3>
                    <div class="content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Hiểu được quy trình làm việc
                            của phần mềm Adobe After Effects
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Nắm được tư duy làm video -
                            kỹ xảo bằng After Effect, tư duy chuyển động, tư duy màu
                            sắc, layer...
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Tự làm video đẹp mắt và sinh
                            động, sáng tạo
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Thành thạo các công cụ của
                            Adobe After Effect
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Biết cách áp dụng các kỹ xảo
                            2D, 3D trong phần mềm Adobe After Effects để tạo kỹ xảo
                            theo yêu cầu
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="title">
                            <i class="fa fa-check"></i>Tự tin ứng tuyển vào các vị
                            trí sản xuất video chuyên nghiệp, vị trí editor tại các
                            công ty doanh nghiệp truyền thông, quảng cáo.
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="u-des-course" id="u-des-course">
                    <h3>Giới thiệu khóa học</h3>
                    <h4>
                    <span
                        >Kỹ xảo hình ảnh - đỉnh cao của công nghệ ứng dụng trong sản
                        xuất video</span
                    >
                    </h4>
                    <p>
                    Kỹ xảo hình ảnh là một trong những yếu tố quan trọng trong sản
                    xuất video, giúp những thước phim trở nên sống động và thu hút
                    hơn. Sử dụng kỹ xảo trong video đang trở thành xu hướng quảng
                    cáo mới, giúp nâng cao giá trị thương hiệu, đem lại nhiều lợi
                    nhuận hơn cho doanh nghiệp.
                    </p>
                    <p>
                    Vậy làm sao để có một sản phẩm sử dụng kỹ xảo chuyên nghiệp,
                    bắt mắt?
                    </p>
                    <p>
                    Tất cả sẽ được giải đáp trong khóa học "<strong
                        >Học làm kỹ xảo trong sản xuất video bằng ADOBE AFTER
                        EFFECTS</strong
                    >"
                    </p>
                    <p>
                    Khóa học do giảng viên Vũ Tiến Thành hướng dẫn sẽ trang bị cho
                    học viên những kiến thức cơ bản về kỹ xảo đa phương tiện và
                    cách tạo các hiệu ứng hình ảnh bằng phần mềm ADOBE AFTER
                    EFFECTS. Bạn sẽ được tiếp cận với những phương pháp học trực
                    tuyến hiện đại mà không kém phần hiệu quả. Bạn sẽ hiểu rõ quy
                    trình làm việc của phần mềm Adobe After Effects, biết cách áp
                    dụng các kỹ xảo 2D, 3D trong phần mềm Adobe After Effect.
                    </p>
                    <h4>Khóa học này có gì mà bạn không thể bỏ qua</h4>
                    <p>
                    <i class="fa fa-check"></i>Hướng dẫn chi tiết nhất toàn bộ
                    kiến thức về After Effect để bạn có thể thành thạo sử dụng
                    chúng hiệu quả chính xác nhất
                    </p>
                    <p>
                    <i class="fa fa-check"></i>Hệ thống các layer có trong phần
                    mềm After Effect: Keyframes, Ram Preview, Animating Layers,
                    Layer Modes, ... và ứng dụng kỹ xảo cho từng hệ thống layer
                    hoàn chỉnh.
                    </p>
                    <p>
                    <i class="fa fa-check"></i>3D - Hiệu ứng sáng tạo tuyệt vời
                    trong After Effect, làm việc với Light, keying và tracking.
                    </p>
                    <p>
                    <i class="fa fa-check"></i>Các hiệu ứng khác trong After
                    Effect
                    </p>
                    <p>
                    <i class="fa fa-check"></i>Xử lý Audio cơ bản trong After
                    Effect
                    </p>
                    <p>
                    <i class="fa fa-check"></i>Tự ứng dụng sáng tạo vào những dự
                    án sản phẩm video kỹ xảo khác của bạn
                    </p>
                    <p>
                    <i class="fa fa-check"></i>Và còn rất rất nhiều kiến thức sử
                    dụng phầm mềm cũng như tư duy sáng tạo trong After Effect được
                    truyền tải trong khóa học.
                    </p>
                    <p>
                    Vậy còn chờ gì nữa, tham gia khóa học "<strong
                        >Học làm kỹ xảo trong sản xuất video bằng ADOBE AFTER
                        EFFECTS</strong
                    >" tại Unica!
                    </p>
                </div>
                <div class="u-list-course" id="#u-list-course">
                    <div class="container">
                    <h3>Nội dung khóa học</h3>
                    <div id="accordion">
                        <div class="card">
                        <!-- phần  -->
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse1">
                                <i class="fa fa-minus-square">Phần 1 : Tổng quan về After Effect</i>
                            </a>
                        </div>
                        <!-- bài -->
                        <div id="collapse1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">
                                    <button type="button" class="btn btn-success video-btn" data-toggle="modal" data-target="#myModal-1">
                                        Học thử
                                    </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="collapse1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            id="collapse1"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="clear-fix"></div>
                            <br>
                            <span>Tag : </span>
                            <a href="#" class="tag badge btn btn-primary">After Effect</a>
                            <a href="#" class="tag badge btn btn-primary">Khóa học</a>
                            <div class="u-combo-buy">
                                <h3>Khóa học liên quan</h3>
                                <div class="u-combo-course">
                                    <ul>
                                        <li>
                                            <div class="u-combo-usua clearfix">
                                                <div class="img">
                                                    <img class="img-reponsive lazy" src="static/img/946535.jpg" alt="">
                                                </div>
                                                <div class="des">
                                                    <a href="#">Xử lý video, hình ảnh và audio với Adobe Premiere, After
                                                        Effects, Audition, Photoshop</a>
                                                    <p class="teacher-x">Laam Xung</p>
                                                    <span class="rate">
                                                        <p>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i> (12)</p>
                                                        <i class="fa fa-user" aria-hidden="true"></i> 99 học viên
                                                    </span>
                                                </div>
                                                <div class="price">
                                                    <span class="price-a">700.000<sup>đ</sup></span>
                                                    <span class="price-b">800.000<sup>đ</sup></span>
                                                    <span class="price-c">-15%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="u-combo-usua clearfix">
                                                <div class="img">
                                                    <img class="img-reponsive lazy" src="static/img/946535.jpg" alt="">
                                                </div>
                                                <div class="des">
                                                    <a href="#">Xử lý video, hình ảnh và audio với Adobe Premiere, After
                                                        Effects, Audition, Photoshop</a>
                                                    <p class="teacher-x">Laam Xung</p>
                                                    <span class="rate">
                                                        <p>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i> (12)</p>
                                                        <i class="fa fa-user" aria-hidden="true"></i> 99 học viên
                                                    </span>
                                                </div>
                                                <div class="price">
                                                    <span class="price-a">700.000<sup>đ</sup></span>
                                                    <span class="price-b">800.000<sup>đ</sup></span>
                                                    <span class="price-c">-15%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="u-combo-usua clearfix">
                                                <div class="img">
                                                    <img class="img-reponsive lazy" src="static/img/946535.jpg" alt="">
                                                </div>
                                                <div class="des">
                                                    <a href="#">Xử lý video, hình ảnh và audio với Adobe Premiere, After
                                                        Effects, Audition, Photoshop</a>
                                                    <p class="teacher-x">Laam Xung</p>
                                                    <span class="rate">
                                                        <p>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i> (12)</p>
                                                        <i class="fa fa-user" aria-hidden="true"></i> 99 học viên
                                                    </span>
                                                </div>
                                                <div class="price">
                                                    <span class="price-a">700.000<sup>đ</sup></span>
                                                    <span class="price-b">800.000<sup>đ</sup></span>
                                                    <span class="price-c">-15%</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- course-teacher -->
                            <div class="u-course-teacher" id="u-course-teacher">
                                <h3>Thông tin giảng viên</h3>
                                <div class="clearfix">
                                    <div class="uct-l">
                                        <div class="avatar"><img src="static/img/987190.jpg" alt="" class="img-fluid lazy">
                                        </div>
                                        <div class="rate">
                                            <span><strong><i class="fa fa-users"> 9.999</i></strong> học viên</span><br>
                                            <span><strong><i class="fa fa-play-circle"> 10</i></strong> khóa học</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">
                                    <button type="button" class="btn btn-success video-btn" data-toggle="modal" data-target="#myModal-2">
                                        Học thử
                                    </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="collapse2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="collapse2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- phần  -->
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse3">
                            <i class="fa fa-minus-square">Phần 3: Ý nghĩa của lớp 3D và các hiệu ứng 3D</i>
                            </a>
                        </div>
                        <!-- bài -->
                        <div
                            id="collapse3"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">
                                    <button
                                        type="button"
                                        class="btn btn-success video-btn"
                                        data-toggle="modal"
                                        data-target="#myModal-3"
                                    >
                                        Học thử
                                    </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            id="collapse3"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            id="collapse3"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- phần  -->
                        <div class="card-header">
                            <a
                            class="card-link"
                            data-toggle="collapse"
                            href="#collapse4"
                            >
                            <i class="fa fa-minus-square">
                                Phần 4: Hiệu ứng, plugin và script trong After
                                Effects</i
                            >
                            </a>
                        </div>
                        <!-- bài -->
                        <div
                            id="collapse4"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">
                                    <button
                                        type="button"
                                        class="btn btn-success video-btn"
                                        data-toggle="modal"
                                        data-target="#myModal-2"
                                    >
                                        Học thử
                                    </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            id="collapse4"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            id="collapse4"
                            class="collapse show"
                            data-parent="#accordion"
                        >
                            <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="title">
                                    <i
                                        class="fa fa-play-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Bài 1: Làm quen với các cửa sổ giao diện phần
                                    mềm Adobe After Effect P1
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="link">&nbsp;</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="time">00:05:28</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clear-fix"></div>
                <br />
                <span>Tag : </span>
                <a href="#" class="tag badge btn btn-primary">After Effect</a>
                <a href="#" class="tag badge btn btn-primary">Khóa học</a>
                <div class="u-combo-buy">
                    <h3>Khóa học liên quan</h3>
                    <div class="u-combo-course">
                    <ul>
                        <li>
                        <div class="u-combo-usua clearfix">
                            <div class="img">
                            <img
                                class="img-reponsive lazy"
                                src="static/img/946535.jpg"
                                alt=""
                            />
                            </div>
                            <div class="des">
                            <a href="#"
                                >Xử lý video, hình ảnh và audio với Adobe Premiere,
                                After Effects, Audition, Photoshop</a
                            >
                            <p class="teacher">Laam Xung</p>
                            <span class="rate">
                                <p>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                (12)
                                </p>
                                <i class="fa fa-user" aria-hidden="true"></i> 99 học
                                viên
                            </span>
                            </div>
                            <div class="price">
                            <span class="price-a">700.000<sup>đ</sup></span>
                            <span class="price-b">800.000<sup>đ</sup></span>
                            <span class="price-c">-15%</span>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="u-combo-usua clearfix">
                            <div class="img">
                            <img
                                class="img-reponsive lazy"
                                src="static/img/946535.jpg"
                                alt=""
                            />
                            </div>
                            <div class="des">
                            <a href="#"
                                >Xử lý video, hình ảnh và audio với Adobe Premiere,
                                After Effects, Audition, Photoshop</a
                            >
                            <p class="teacher">Laam Xung</p>
                            <span class="rate">
                                <p>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                (12)
                                </p>
                                <i class="fa fa-user" aria-hidden="true"></i> 99 học
                                viên
                            </span>
                            </div>
                            <div class="price">
                            <span class="price-a">700.000<sup>đ</sup></span>
                            <span class="price-b">800.000<sup>đ</sup></span>
                            <span class="price-c">-15%</span>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="u-combo-usua clearfix">
                            <div class="img">
                            <img
                                class="img-reponsive lazy"
                                src="static/img/946535.jpg"
                                alt=""
                            />
                            </div>
                            <div class="des">
                            <a href="#"
                                >Xử lý video, hình ảnh và audio với Adobe Premiere,
                                After Effects, Audition, Photoshop</a
                            >
                            <p class="teacher">Laam Xung</p>
                            <span class="rate">
                                <p>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                                (12)
                                </p>
                                <i class="fa fa-user" aria-hidden="true"></i> 99 học
                                viên
                            </span>
                            </div>
                            <div class="price">
                            <span class="price-a">700.000<sup>đ</sup></span>
                            <span class="price-b">800.000<sup>đ</sup></span>
                            <span class="price-c">-15%</span>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                <!-- course-teacher -->
                <div class="u-course-teacher" id="u-course-teacher">
                    <h3>Thông tin giảng viên</h3>
                    <div class="clearfix">
                    <div class="uct-l">
                        <div class="avatar">
                        <img
                            src="static/img/987190.jpg"
                            alt=""
                            class="img-fluid lazy"
                        />
                        </div>
                        <div class="rate">
                        <span
                            ><strong><i class="fa fa-users"> 9.999</i></strong> học
                            viên</span
                        ><br />
                        <span
                            ><strong><i class="fa fa-play-circle"> 10</i></strong>
                            khóa học</span
                        >
                        </div>
                    </div>
                    <div class="uct-r">
                        <div class="name"><a href="#">Lâm Xung</a></div>
                        <div class="des">
                        <p>
                            Giảng viên Guitar - Youtuber nổi tiếng cộng đồng guitar
                            Việt Nam
                        </p>
                        </div>
                        <div class="more">
                        <p>
                            <strong>Giảng viên Hà Kế Tú </strong> với kinh nghiệm 12
                            năm để chơi đàn và nghiên cứu về âm nhạc, 5 năm kinh
                            nghiệm tổ chức các khóa học Guitar offline tại Úc và Hà
                            Nội, đào tạo hàng trăm học viên trong những khóa: Guitar
                            cổ điển, Fingerstyle và Đệm hát. Hà Kế Tú là một trong
                            những Giảng viên, Youtuber có tên tuổi trong cộng đồng
                            Guitar tại Việt Nam.
                        </p>
                        <p>
                            22/7/2016 Kênh youtube của anh đạt mốc 100k followers và
                            trở thành một trong những Cộng đồng Guitar lớn nhất Việt
                            Nam.
                        </p>
                        <p>
                            Phương pháp giảng dạy của anh chú trọng tới căn bản, áp
                            dụng thực tế trong việc học nhạc và luôn hướng tới học
                            viên để có hiệu quả cao nhất.Haketu là một trong những
                            người đầu tiên có kênh Youtube dạy guitar phi lợi nhuận
                            tại Việt Nam.
                        </p>
                        <p>
                            - Thời điểm hiện tại, kênh youtube của Haketu đã đạt mức
                            160,000 subscribers.
                        </p>
                        <p>
                            - Giảng viên xuất phát từ học âm nhạc cổ điển, và hiện
                            đã có hơn 12 năm chơi đàn và nghiên cứu về guitar, cũng
                            như viết ra hàng trăm bản guitar tab để làm học liệu.
                        </p>
                        <p>
                            - Haketu được biết tới với phương pháp truyền tải cách
                            học đơn giản, dễ hiểu và hiệu quả, nên nhiều người tìm
                            tới học cả online và offline rất đông.
                        </p>
                        <p>
                            - Hiện tại Facebook cũng có trên 125,000 người theo dõi.
                        </p>
                        <p>
                            - Thế mạnh của Haketu là khả năng chuyển soạn
                            fingerstyle độc tấu trên guitar, và nổi tiếng nhất là
                            Nhật ký của mẹ (nhạc sĩ Nguyễn Văn Chung).
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="u-rate-hv clearfix" id="u-rate-hv">
                    <h3>Đánh giá của học viên</h3>
                    <div class="rate-left">
                    <div class="number-big-rate">4</div>
                    <div class="star-big-rate">
                        <span class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="count-rate">1000 đánh giá</div>
                    </div>
                    <div class="rate-right">
                    <!-- 5* -->
                    <div class="level-rate clearfix">
                        <div class="progress">
                        <div
                            class="progress-bar bg-primary"
                            style="width: 65%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            &nbsp;
                        </div>
                        </div>
                        <div class="star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="num">65%</div>
                    </div>
                    <!-- 4* -->
                    <div class="level-rate clearfix">
                        <div class="progress">
                        <div
                            class="progress-bar bg-primary"
                            style="width: 15%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            &nbsp;
                        </div>
                        </div>
                        <div class="star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="num">15%</div>
                    </div>
                    <!-- 3* -->
                    <div class="level-rate clearfix">
                        <div class="progress">
                        <div
                            class="progress-bar bg-primary"
                            style="width: 8%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            &nbsp;
                        </div>
                        </div>
                        <div class="star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="num">8%</div>
                    </div>
                    <!-- 2* -->
                    <div class="level-rate clearfix">
                        <div class="progress">
                        <div
                            class="progress-bar bg-primary"
                            style="width: 6%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            &nbsp;
                        </div>
                        </div>
                        <div class="star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="num">6%</div>
                    </div>
                    <!-- 1* -->
                    <div class="level-rate clearfix">
                        <div class="progress">
                        <div
                            class="progress-bar bg-primary"
                            style="width: 6%"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            &nbsp;
                        </div>
                        </div>
                        <div class="star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="num">6%</div>
                    </div>
                    </div>
                </div>
                <div class="u-cm-hv">
                    <h3>Nhận xét của học viên</h3>
                    <!-- comment -->
                    <div class="comment clearfix">
                    <div class="comment-left">
                        <div class="avatar">
                        <img
                            class="img-fluid lazy"
                            src="static/img/987190.jpg"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="comment-right">
                        <div class="name">
                        <p>Quách Tĩnh</p>
                        </div>
                        <div class="rate-star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="word">
                        <p>Muốn học khoá của a vì đơn giản a đàn rất hay</p>
                        </div>
                    </div>
                    </div>
                    <!-- comment -->
                    <div class="comment clearfix">
                    <div class="comment-left">
                        <div class="avatar">
                        <img
                            class="img-fluid lazy"
                            src="static/img/987190.jpg"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="comment-right">
                        <div class="name">
                        <p>Quách Tĩnh</p>
                        </div>
                        <div class="rate-star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="word">
                        <p>Muốn học khoá của a vì đơn giản a đàn rất hay</p>
                        </div>
                    </div>
                    </div>
                    <!-- comment -->
                    <div class="comment clearfix">
                    <div class="comment-left">
                        <div class="avatar">
                        <img
                            class="img-fluid lazy"
                            src="static/img/987190.jpg"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="comment-right">
                        <div class="name">
                        <p>Quách Tĩnh</p>
                        </div>
                        <div class="rate-star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="word">
                        <p>Muốn học khoá của a vì đơn giản a đàn rất hay</p>
                        </div>
                    </div>
                    </div>
                    <!-- comment -->
                    <div class="comment clearfix">
                    <div class="comment-left">
                        <div class="avatar">
                        <img
                            class="img-fluid lazy"
                            src="static/img/987190.jpg"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="comment-right">
                        <div class="name">
                        <p>Quách Tĩnh</p>
                        </div>
                        <div class="rate-star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="word">
                        <p>Muốn học khoá của a vì đơn giản a đàn rất hay</p>
                        </div>
                    </div>
                    </div>
                    <!-- comment -->
                    <div class="comment clearfix">
                    <div class="comment-left">
                        <div class="avatar">
                        <img
                            class="img-fluid lazy"
                            src="static/img/987190.jpg"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="comment-right">
                        <div class="name">
                        <p>Quách Tĩnh</p>
                        </div>
                        <div class="rate-star">
                        <span class="star-rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="word">
                        <p>Muốn học khoá của a vì đơn giản a đàn rất hay</p>
                        </div>
                    </div>
                        <!-- Video học thử modal -->
                    </div>
                    <div class="paginate" style="padding: 10px 50px">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#">Trước</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">Tiếp</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div id="position-style" class="block-buy-small clearfix">
                    <div class="bb-left">
                    <div class="price">
                        <span class="a">500.000<sup>đ</sup></span>
                        <span class="b">700.000<sup>đ</sup></span>
                        <span class="c">-22%</span>
                    </div>
                    <div class="time">
                        <i class="fa fa-clock" aria-hidden="true">
                        Thời gian ưu đãi còn 1 ngày</i
                        >
                    </div>
                    <div class="btn-s">
                        <a class="btn btn-danger" href="">ĐĂNG KÍ HỌC</a>
                        <a class="btn btn-success" href=""
                        ><i class="fa fa-cart-plus" aria-hidden="true"></i> THÊM
                        GIỎ HÀNG</a
                        >
                        <p>Hoàn tiền trong 7 ngày nếu không hài lòng</p>
                    </div>
                    </div>
                    <div class="bb-right">
                    <div class="block-ulti">
                        <ul>
                        <li>
                            <i class="far fa-clock" aria-hidden="true"></i>Thời
                            lượng: <strong>04 giờ 01 phút</strong>
                        </li>
                        <li>
                            <i class="fa fa-play-circle" aria-hidden="true"></i>Giáo
                            trình: <strong>45 bài giảng</strong>
                        </li>
                        <li>
                            <i class="fa fa-history" aria-hidden="true"></i>Sở hữu
                            khóa học trọn đời
                        </li>
                        <li>
                            <i class="fa fa-certificate" aria-hidden="true"></i>Cấp
                            chứng nhận hoàn thành
                        </li>
                        <li>
                            <i class="fa fa-percent" aria-hidden="true"></i>Giảm
                            thêm <strong>10%</strong> khi thanh toán online
                        </li>
                        </ul>
                    </div>
                    <center><a href="#">Bạn có mã giảm giá ?</a></center>
                    <div class="coupon">
                        <div class="form-group">
                        <input
                            id="my-input"
                            class="form-control"
                            type="text"
                            placeholder="Nhập mã giảm giá ..."
                            name=""
                        />
                        </div>
                        <button class="btn btn-primary" type="submit">
                        Áp dụng
                        </button>
                        <div class="note">
                        <span>Coupon không hợp lệ</span>
                        </div>
                    </div>
                    <hr />
                    <div class="more-hv">
                        <h5>Bạn cần đào tạo cho nhiều hơn 5 người?</h5>
                        <p class="form-group">
                        Giúp team bạn phát triển mỗi ngày với nền tảng đào tạo nội
                        bộ chuyên nghiệp và hàng trăm khoá học chất lượng.
                        </p>
                        <button class="btn" type="submit">Đăng kí ngay</button>
                    </div>
                    </div>
                </div>
                </div>

                <!-- right -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                <div id="block-buy-post" class="block-buy clearfix" style="position: fixed; top: 75px; left: 1039px; width: 375px;">
                    <div class="bb-left">
                    <div class="price">
                        <span class="a">500.000<sup>đ</sup></span>
                        <span class="b">700.000<sup>đ</sup></span>
                        <span class="c">-22%</span>
                    </div>
                    <div class="time-udai">
                        <i class="fa fa-clock" aria-hidden="true">
                        Thời gian ưu đãi còn 1 ngày</i
                        >
                    </div>
                    <div class="btn-s" style="    text-align: center;">
                        <a class="btn-buy-course" href="">ĐĂNG KÍ HỌC NGAY</a>
                        <a class="btn-cart-course btn-add_cart" href=""><i class="fas fa-cart-plus" aria-hidden="true"></i> THÊM VÀO GIỎ HÀNG</a>
                        <p>Hoàn tiền trong 7 ngày nếu không hài lòng</p>
                    </div>
                    </div>
                    <div class="bb-right">
                    <div class="block-ulti" style="color: #555;">
                        <ul style="margin-left: 0;">
                        <li>
                            <i class="far fa-clock" aria-hidden="true"></i>Thời
                            lượng: <strong>04 giờ 01 phút</strong>
                        </li>
                        <li>
                            <i class="fas fa-play-circle" aria-hidden="true"></i>Giáo
                            trình: <strong>45 bài giảng</strong>
                        </li>
                        <li>
                            <i class="fas fa-history" aria-hidden="true"></i>Sở hữu
                            khóa học trọn đời
                        </li>
                        <li>
                            <i class="fas fa-certificate" aria-hidden="true"></i>Cấp
                            chứng nhận hoàn thành
                        </li>
                        <li>
                            <i class="fas fa-percent" aria-hidden="true"></i>Giảm
                            thêm <strong>10%</strong> khi thanh toán online
                        </li>
                        </ul>
                    </div>
                    <center><a href="#">Bạn có mã giảm giá ?</a></center>
                    <div class="coupon">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" placeholder="Nhập mã giảm giá ..." name="" style="float: right"/>
                        </div>
                        <button class="coupon-submit btn btn-coupon" type="button">Áp dụng</button>
                        {{-- <div class="note">
                            <span>Coupon không hợp lệ</span>
                        </div> --}}
                    </div>
                    <hr />
                    <div class="more-hv">
                        <h5>Bạn cần đào tạo cho nhiều hơn 5 người?</h5>
                        <p class="form-group">
                        Giúp team bạn phát triển mỗi ngày với nền tảng đào tạo nội
                        bộ chuyên nghiệp và hàng trăm khoá học chất lượng.
                        </p>
                        <button class="btn" type="submit">Đăng kí ngay</button>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Modal -->
                <div class="thisIsModal">
                <div
                    class="modal fade"
                    id="myModal-1"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/CulBRA4HFgk"
                            id="video"
                            allowscriptaccess="always"
                            allow="autoplay"
                            ></iframe>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="modal fade"
                    id="myModal-2"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/utXzzBpNyDU"
                            id="video"
                            allowscriptaccess="always"
                            allow="autoplay"
                            ></iframe>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="modal fade"
                    id="myModal-3"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/utXzzBpNyDU"
                            id="video"
                            allowscriptaccess="always"
                            allow="autoplay"
                            ></iframe>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="modal fade"
                    id="myModal-4"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/utXzzBpNyDU"
                            id="video"
                            allowscriptaccess="always"
                            allow="autoplay"
                            ></iframe>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End Detail -->
        <!-- Video học thử modal -->
    </div>
@endsection
