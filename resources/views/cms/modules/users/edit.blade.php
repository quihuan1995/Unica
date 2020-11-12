@extends('cms.layout.main', array(
"pageTitle" => "Sửa danh mục",
"breadCrumbs" => array(
array(
"name" => "Danh mục",
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
            <form method="POST" action="{{ route('users.update',['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-lg-9 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label style="font-weight: bolder">Họ và tên</label>
                                    <input style="height: 50%;" type="text" name="full_name" class="form-control" value="{{ $user->full_name }}">
                                    {!!showError($errors,'full_name')!!}
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: normal">Địa chỉ Email</label>
                                    <input style="height: 50%;" type="email" name="email" class="form-control" value="{{ $user->email }}">
                                    {!!showError($errors,'email')!!}
                                </div>

                                <div class="form-group">
                                    <label style="font-weight: bolder">Thành phố</label>
                                    <input style="height: 50%;" type="text" name="city" class="form-control" value="{{ json_decode($user->address)->city }}">
                                    <label style="font-weight: bolder" class="mt-2">Địa chỉ nhà</label>
                                    <input style="height: 50%;" type="text" name="streetAddress" class="form-control" value="{{ json_decode($user->address)->streetAddress }}">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bolder">Số điện thoại</label>
                                    <input style="height: 50%;" type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bolder">Mật Khẩu</label>
                                    <input style="height: 50%;" type="password" name="password" class="form-control" value="" >
                                    {!!showError($errors,'password')!!}
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bolder">Trạng Thái</label>
                                    <select name="status" class="form-control">
                                        <option {{ $user->status == 'active' ? 'selected' : '' }} value="active">Hoạt Động</option>
                                        <option {{ $user->status == 'deactive' ? 'selected' : '' }} value="deactive">Không Hoạt Động</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label style="font-weight: bolder">Giới tính</label>
                                    <select class="form-group custom-select" name="gender" id="gender" ">
                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>male</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>female</option>
                                        <option value="others" {{ $user->gender == 'others' ? 'selected' : ''}}>others</option>
                                </select>
                                </div> --}}

                                <div class="form-group">
                                    <label style="font-weight: bolder">Giới tính</label>
                                    <div class="form-check">
                                    <input value="male" type="radio" name="gender" {{ $user->gender == 'male' ? 'checked' : '' }} >
                                    <label style="margin-left:2px;margin-right:10px" for="">Nam</label>
                                    <input value="female" type="radio" name="gender" {{ $user->gender == 'female' ? 'checked' : '' }} >
                                    <label style="margin-left:2px;margin-right:10px" for="">Nữ</label>
                                    <input value="others" type="radio" name="gender" {{ $user->gender == 'others' ? 'checked' : '' }} >
                                    <label style="margin-left:2px;margin-right:10px" for="">Khác</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <h4 class="card-header ">
                                        Publish
                                    </h4>
                                    <div class="card-body">
                                        <button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Update</button>
                                        <a href="{{ route('users.index') }}">
                                            <button class="btn btn-danger" name="submitbutton" type="button" value="save and edit"><i class="fa fa-times"></i> Quit</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h4 class="card-header ">
                                        Ảnh đại diện
                                    </h4>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input style="height: 50%;" id="img" type="file" name="avatar" class="form-control hidden"
                                            onchange="changeImg(this)">
                                            <img style="margin-left: 25%" id="avatar" class="thumbnail mt-3 img-circle"  width="50%" height="150px" src="../uploads/images/avatars/{{ $user->avatar }}">
                                            {!!showError($errors,'avatar')!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h4 class="card-header ">
                                        Roles
                                    </h4>
                                    <div class="card-body">
                                        <div class="form-body" >
                                            @foreach ($roles as $role)
                                            <div class="form-check custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customControlAutosizing" name="roles[]"
                                                value="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                                <label class="form-check-label" >{{ $role->title }}</label>
                                            </div>
                                            <hr>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label style="font-weight: bolder">Sinh nhật</label> <br>
                                    <input style="height: 50%;" type="date" name="birth" class="form-group" value="{{$user->birth}}" >
                                </div>
                                <div class="form-body" >
                                    <label style="font-weight: bolder" >Roles</label>
                                    @foreach ($roles as $role)
                                    <div class="form-check custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="customControlAutosizing" name="roles[]"
                                        value="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                        <label class="form-check-label" >{{ $role->title }}</label>
                                    </div>
                                    <hr>
                                    @endforeach
                            
                                   
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
