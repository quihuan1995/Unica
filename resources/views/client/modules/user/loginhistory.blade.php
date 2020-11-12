@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
<main>
@include('client.layout.headuser')

    <main>
       
        <div class="container">
            <div id="main-content">
                <br />
                <div class="main-inner">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span style="font-weight: bold;"> <i class="fa fa-history" aria-hidden="true"></i> Lịch sử đăng
                            nhập</h1></span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>MÔ TẢ</th>
                                            <th>ĐỊA CHỈ IP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Đăng nhập lúc: 09:39:18 01-09-2020</td>
                                            <td>113.178.33.32</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Đăng nhập lúc: 16:33:21 31-08-2020</td>
                                            <td>171.241.32.58</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection