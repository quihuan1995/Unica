@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
@include('client.layout.headuser',array("customer" => $customer))
    <div class="container">
        <div class="para">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 pd-l-md-0">
                    <div id="menu">
                        <p><i class="fa fa-play-circle"></i> Khóa học trọn đời</p>
                    </div>
                    <div style="background: #fff; overflow: auto;">
                        <div class="para">
                            <form  action="{{route('user.seach')}}" method="post">
                                @csrf
                                <div class="form-inline">
                                    <div class="seach-box col-lg-10 col-md-10 col-sm-12">
                                        <input style="width: 100%;" type="text" class="form-control"
                                            name="seach_data" placeholder="Tìm kiếm khóa học...">
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-12">
                                        <button  type="submit" class="btn btn-success">Tìm
                                            kiếm</button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <div class="ugb">
                                @foreach ($courses as $course)
                                <div class="ugb-lg-box">
                                    <div class="ugb-block-img">
                                        <img class="img-responsive" src="media/test1.jpg" />
                                        <p>{{$course->title}}</p>
                                    </div>
                                    <div class="ugb-block-txt">
                                        <p>Giảng viên: {{$course->teacher->user->full_name}}</p>
                                        <a href="#" class="btn btn-success" href="#"><i aria-hidden="true"></i> <i class="fa fa-play-circle"></i> Vào học ngay</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach

                            </div>
                            
                            <div align='right'>
                                {{$courses->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 pdl-0 pd-r-md-0 col-xs-12-pd">
                    <div class="text-center">
                        <a href="#" class="btn btn-success">Trải nghiệm</a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection