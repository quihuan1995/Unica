@extends('cms.layout.main', array(
    "pageTitle" => "Create Menu",
    "breadCrumbs" => array(
        array(
            "name" => "Create Menu",
            "link" => "/name",
            "active" => true
        )
    )))

@push("head-title")
    createmeus
@endpush

@section('content')
{!!showNotification('create')!!}
<div id="main">
    <form method="POST" action="{{route('menus.store')}}">
        @csrf

        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                    <div class="form-group">
                        <label for="name" class="control-label required" aria-required="true">Name</label>
                        <input class="form-control" placeholder="MenuName" data-counter="120" name="name" type="text" id="name">
                        {!!showError($errors,'name')!!}

                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 right-sidebar">
                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                    <div class="widget-title">
                        <h4>
                        <span>Publish</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <div class="btn-set">
                            <button type="submit" name="submit" value="save" class="btn btn-info">
                                 <i class="fa fa-save"></i> Save
                            </button>
                            <button type="submit" name="submit" value="save and edit" class="btn btn-success">
                                <i class="fa fa-check-circle"></i> Save & Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
