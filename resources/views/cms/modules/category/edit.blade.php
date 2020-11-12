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
            <form method="POST" action="{{route('category.update',['id'=>$category->id])}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-9" >
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input  type="text" name="name" class="form-control" value="{{ $category->name }}">
                                    {!!showError($errors,'name')!!}	
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input  type="text" name="slug" class="form-control" value="{{ $category->slug }}">
    
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="editor"  name="description" style="width: 100%;height: 100px;">{{ $category->description }}</textarea>
                                    {!!showError($errors,'description')!!}
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
                                <div><button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Save</button>  
                                    <button class="btn btn-success" type="submit" name="submitbutton" value="save and edit"><i class="fa fa-check-circle"></i> Save & Edit</button>
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
