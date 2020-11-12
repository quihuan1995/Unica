@extends('cms.layout.main', array(
    "pageTitle" => "Thêm danh mục",
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
            <form method="POST" id="quickForm" role="form" action="{{route('category.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input  type="text" name="name" class="form-control" value="{{old('name')}} ">
                                        {!!showError($errors, 'name')!!}
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input  type="text" name="slug" class="form-control" value="{{old('slug')}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="editor"  name="description" style="width: 100%;height: 100px;">{{old('description')}}</textarea>
                                        {!!showError($errors, 'description')!!}
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

{{-- @push("foot-scripts")
<script>
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
        name: {
            required: true,
            unique: true,
        },
        description: {
            required: true,
        },
    },
    messages: {
        name: {
        required: "Please enter a name",
      },
      description: {
        required: "Please enter description",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endpush --}}

