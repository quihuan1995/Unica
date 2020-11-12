@extends('cms.layout.main', array(
"pageTitle" => "New member",
"breadCrumbs" => array(
array(
"name" => "Create User",
"link" => "/name",
"active" => true
)
)))

@push("head-title")
Admin LTE
@endpush

@section('content')
<div class=" col-lg-12">

    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-lg-7 card" style="background: #f2f2f2">
                        <div class="card-body">
                            <div class="form-group">
                                <label style="font-weight: bolder">Họ và tên</label>
                                <input style="height: 50%;" type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
                                {!!showError($errors,'full_name')!!}
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Địa chỉ Email</label>
                                <input style="height: 50%;" type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                            {!!showError($errors,'email')!!}
                            <div class="form-group">
                                <label style="font-weight: bolder">Thành phố</label>
                                <input style="height: 50%;" type="text" name="city" class="form-control" value="{{ old('city') }}">
                                <label style="font-weight: bolder" class="mt-2">Địa chỉ nhà</label>
                                <input style="height: 50%;" type="text" name="streetAddress" class="form-control" value="{{ old('streetAddress') }}">
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Số điện thoại</label>
                                <input style="height: 50%;" type="number" name="phone" class="form-control" value="{{ old('phone') }}">
                                {!!showError($errors,'phone')!!}
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Mật Khẩu</label>
                                <input style="height: 50%;" type="password" name="password" class="form-control" value="" >
                                {!!showError($errors,'password')!!}
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Trạng Thái</label>
                                <select name="status" class="form-control" id="">
                                    <option value="active">Hoạt Động</option>
                                    <option value="deactive">Không Hoạt Động</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bolder">Giới tính</label>
                                <div class="form-check">
                                <input value="male" type="radio" name="gender"  >
                                <label style="margin-left:2px;margin-right:10px" for="">Nam</label>
                                <input value="female" type="radio" name="gender"  >
                                <label style="margin-left:2px;margin-right:10px" for="">Nữ</label>
                                <input value="others" type="radio" name="gender"  >
                                <label style="margin-left:2px;margin-right:10px" for="">Khác</label>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 card" style="margin-left:20px; padding: 20 20px; background:#f2f2f2">
                        <div class="card-body">
                            <div class="form-group">
                                <label style="font-weight: bolder">Sinh nhật</label> <br>
                                <input style="height: 50%;" type="date" name="birth" class="form-group" value="" >
                            </div>
                            <div class="form-body" >
                                <label style="font-weight: bolder" >Roles</label>
                                @foreach ($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]"
                                    value="{{ $role->id }}">
                                    <label class="form-check-label" >{{ $role->title }}</label>
                                </div>
                                <hr>
                                @endforeach
                                <div class="form-group">
                                    <label style="font-weight: bolder">Ảnh đại diện</label>
                                    <input style="height: 50%;" id="img" type="file" name="avatar" class="form-control hidden"
                                        onchange="changeImg(this)">
                                    <img style="margin-left: 25%" id="avatar" class="thumbnail mt-3 img-circle" width="50%" height="150px" src="../uploads/images/avatars/import.png">
                                    {!!showError($errors,'avatar')!!}
                                </div>
                                <div>
                                    <button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Create</button>
                                    <a href="{{ route('users.index') }}">
                                        <button class="btn btn-danger" name="submitbutton" type="button" value="save and edit"><i class="fa fa-times"></i> Quit</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
