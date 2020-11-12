@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
@include('client.layout.headuser')
            <div id="main">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 center">
                            <h3>Bạn quan tâm đến chủ đề nào?(Bấm chọn)</h3>
                            <div class="row midlane">
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Công nghệ thông tin</span>
                                        <button type="button" class="pull-right btn-add category-add">
                                <i data-type="remove" class="category-2 fa fa-check"></i>
                            </button></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Nuôi dạy con</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Phát triển cá nhân</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>sức khoẻ-giới tính</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>kinh doanh-khởi nghiệp</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Marketing</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Thiết kế</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Ngoại ngữ</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Phong cách sống</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Tin văn phòng</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>sales,bán hàng</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Nhiếp ảnh,dựng phim</span></div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="boxmid"><span>Hôn nhân & gia đình</span></div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="clearfix">
                                        <center><a href="/khampha2.html" class="btn btn-danger btn-bott"><i class="fa fa-share" aria-hidden="true"></i>Bước tiếp theo</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
            </div>
        @endsection