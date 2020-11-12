@extends('cms.layout.main', array(
    "pageTitle" => "Thêm Voucher",
    "breadCrumbs" => array(
        array(
            "name" => "Voucher",
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
            <form method="POST" action="{{ route('voucher.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">

                            <div class="form-group">
                                <label>code</label>
                                <input  type="text" name="code" class="form-control" value=" ">

                            </div>
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="datetime-local" name="start_time" class="form-control" value="">

                            </div>
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="datetime-local" name="end_time" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Limit</label>
                                <input  type="number" name="limit" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input  type="number" name="quantity" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label>Publish</label>
                            <div><button class="btn btn-info" type="submit" name="submitbutton" value="save"><i class="fa fa-save"></i> Save</button>
                                <button class="btn btn-success" type="submit" name="submitbutton" value="save and edit"><i class="fa fa-check-circle"></i> Save & Edit</button></div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
</div>
@endsection
