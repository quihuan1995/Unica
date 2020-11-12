@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
@include('client.layout.headuser')
<div class="container">
    <div class="para">
        <div class="row">
            <div class="col-lg-12">
                <div class="para-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="discover-tab" data-toggle="tab" href="#discover" role="tab" aria-controls="discover" aria-selected="true">Khám phá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false">Yêu thích</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="discover" role="tabpanel" aria-labelledby="discover-tab">
                            <div class="u-combo-course">
                                @foreach ($courses as $course)
                                <div class="u-combo-usua">
                                    <div class="img-combo-favorited"><img class="img-responsive" src="media/test1.jpg"
                                            alt="" /></div>
                                    <div class="des-combo-w">
                                        <a href="#">{{$course->title}}</a>
                                        <div class="">{{$course->teacher->user->full_name}}</div>
                                        <div class="">
                                            <p>Đánh giá: {{$course->total_rate}}</p>
                                            <span><i class="fa fa-users" aria-hidden="true"></i> 1177 học viên</span>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="price-a">{{number_format($course->sale_price,0,",",".")}}<sup>đ</sup></div>
                                        <div class="price-b">{{number_format($course->regular_price,0,",",".")}}<sup>đ</sup></div>
                                        <div class="price-c">(-{{100-ceil($course->sale_price/$course->regular_price*100)}}%)</div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div align='right'>
                                {{$courses->links()}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                            <div class="u-combo-course">
                                @foreach ($wishlists as $wishlist)
                                <div class="u-combo-usua">
                                    <div class="img-combo-favorited"><img class="img-responsive" src="media/test1.jpg"
                                            alt="" /></div>
                                    <div class="des-combo-w">
                                        <a href="#">{{$wishlist->title}}</a>
                                        <div class="">{{$wishlist->teacher->user->full_name}}</div>
                                        <div class="">
                                            <p>Đánh giá: {{$wishlist->total_rate}}</p>
                                            <span><i class="fa fa-users" aria-hidden="true"></i> 1177 học viên</span>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="price-a">{{number_format($wishlist->sale_price,0,",",".")}}<sup>đ</sup></div>
                                        <div class="price-b">{{number_format($wishlist->regular_price,0,",",".")}}<sup>đ</sup></div>
                                        <div class="price-c">(-{{100-ceil($wishlist->sale_price/$wishlist->regular_price*100)}}%)</div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div align='right'>
                                {{$wishlists->links()}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection