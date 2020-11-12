@extends('cms.layout.main', array(
    "pageTitle" => "Thêm Tag",
    "breadCrumbs" => array(
        array(
            "name" => "Tag",
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
            <form method="POST" action="{{ route('tag.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group ">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" >
                                    {!! showError($errors, 'title') !!}
                                </div>
                                <div class="form-group">
                                    <label>Category ID</label>
                                    <select class="form-control" name="category_id" >
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <label>Publish</label>
                                </div>
                                <div class="card-body">
                                    <button type="submit" name="submitbutton" class="btn btn-info" value="save">Save</button>
                                    <button type="submit" name="submitbutton" class="btn btn-success" value="save and edit">Save & Edit</button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
