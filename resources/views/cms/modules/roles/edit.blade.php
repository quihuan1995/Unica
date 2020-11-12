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
            <form method="POST" action="{{ route('roles.update',['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-lg-8 card" style="background: #f2f2f2">
                        <div class="card-body">
                            <label style="font-weight: bolder" >Roles</label>
                            @foreach ($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]"
                                value="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label class="form-check-label" >{{ $role->title }}</label>
                            </div>
                            <hr>
                            @endforeach

                            {{-- <div class="form-group">
                                <label style="font-weight: bolder">Permissions</label>
                                <input style="height: 50%;" type="text" name="permissions" class="form-control" value="{{ implode(' , ',json_decode($user->roles()->get()->pluck('permissions'),true) ) }}">

                            </div> --}}
                        </div>
                    </div>



                    <div class="col-lg-3 card" style="margin-left:20px; padding: 20 20px; background:#f2f2f2">
                        <div class="card-body">
                            <label for="">Operations</label>
                            <div class="form-body" >
                                <div>
                                    <button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Update</button>
                                    <a href="{{ route('roles.index') }}">
                                        <button class="btn btn-danger" name="submitbutton" type="button" value="save and edit"><i class="fa fa-times"></i> Quit</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

            </form>

        </div>
    </div>
</div>
@endsection
