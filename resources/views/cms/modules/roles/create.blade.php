@extends('cms.layout.main', array(
"pageTitle" => "Sửa danh mục",
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
            <form method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body" style="background: #f2f2f2">
                                <div class="form-group">
                                    <label>Tên Role</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">

                                </div>
                                <div class="form-group">
                                    <label>Permission</label>
                                    <input type="text" name="permissions" class="form-control" value="{{ old('permissions') }}">
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4" >
                        <div class="card" style="background: #f2f2f2">
                            <div class="card-body" style="background: #f2f2f2;margin-bottom:105px" >
                                <label>Operations</label>
                                <div>
                                    <button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Create</button>
                                    <a href="{{ route('roles.index') }}">
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
