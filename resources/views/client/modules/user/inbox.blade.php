@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
<main>
@include('client.layout.headuser')

        <div id="main">
            <div class="container ">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12 inbox">
                        <div class="heading"><i class="fa fa-envelope-o" aria-hidden="true" style="padding-right:5px;"></i>Danh sách thư</div>
                        <div class="table">
                          
                             <table class="tablee">
                                <thead>
                                    <tr> 
                                        <th><b>Người gửi</b></th>
                                  
                                    <th><b>Tiêu đề</b></th>
                                
                                    <th><b>Thời gian</b></th>
                                </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unica.vn</td>
                                        <td>Thông báo đăng nhập tài khoản Unica.vn</td>
                                        <td>16:22:52 05-09-2020</td>
                                    </tr>
                                    <tr>
                                        <td>Unica.vn</td>
                                        <td>Thông báo đăng nhập tài khoản Unica.vn</td>
                                        <td>16:22:52 05-09-2020</td>
                                    </tr>
                                    <tr>
                                        <td>Unica.vn</td>
                                        <td>Thông báo đăng nhập tài khoản Unica.vn</td>
                                        <td>16:22:52 05-09-2020</td>
                                    </tr>
                                    <tr>
                                        <td>Unica.vn</td>
                                        <td>Thông báo đăng nhập tài khoản Unica.vn</td>
                                        <td>16:22:52 05-09-2020</td>
                                    </tr>
                                  
                                    
                                </tbody>
                             </table>
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @endsection