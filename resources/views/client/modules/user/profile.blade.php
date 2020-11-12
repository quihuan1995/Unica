@extends('client.layout.main')
@section('title','profile')
@section('content')
@include('client.layout.headuser')
<main>
   <div class="container">
   <div class="right">

   <div id="main-content">
      <div class="panel panel-default">
         <div class="panel-heading">
            <span style="font-weight: bold;"><i class="fa fa-user" aria-hidden="true"></i> Thông tin cá nhân</span>
            <div class="pull-right">
               <a href="/dashboard/user/password" class="btn btn-xs btn-warning margin-left"><i class="fa fa-refresh"></i> Thay đổi mật khẩu</a>
            </div>
         </div>
         <div class="panel-body">
            <form  action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input style="height: 50%;" id="img" type="file" name="avatar" class="form-control full"
                            onchange="changeImg(this)">
                            <p>(Ảnh vuông và < 500KB)</p>
                            <img style="max-height:100px" id="avatar" src="../uploads/images/avatars/{{ $customer->avatar }}">
                        </div>
                        <div class="form-group">
                            <label>Thành phố</label>
                            <input  type="text" name="city" class="form-control full" value="{{ json_decode($customer->address)->city }}">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input  type="text" name="streetAddress" class="form-control full" value="{{ json_decode($customer->address)->streetAddress }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input  type="text" name="full_name" class="form-control full" value="{{$customer->full_name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input  type="text" name="email" class="form-control full" value="{{$customer->email}}">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input  type="text" name="phone" class="form-control full" value="{{$customer->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input  type="text" name="full_name" class="form-control full" value="{{$customer->birthday}}">
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select id="muser-gender" class="form-control" name="gender">
                                <option value="female"
                                @if ($customer->gender=='female')
                                    selected
                                @endif
                                >Nữ</option>
                                <option value="male" 
                                @if ($customer->gender=='male')
                                    selected
                                @endif
                                >Nam</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success"><i class="fa fa-save"></i> Lưu lại</button>
                        </div>
                    </div>
                </div>
            </form>
         </div>
      </div>
   </div>
</main>
@endsection
@push('foot-scripts')


@endpush
