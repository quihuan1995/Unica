@extends('cms.layout.main', array(
    "pageTitle" => "Sửa Order",
    "breadCrumbs" => array(
        array(
            "name" => "Order",
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
            <form method="POST" action="{{route('order.update',['id'=>$order->id])}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-9" >
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ $order->full_name }}">
                                    {!!showError($errors,'full_name')!!}
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input  type="text" name="city" class="form-control" value="{{ json_decode($order->address)->city }}">
                                    {!!showError($errors,'city')!!}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input  type="text" name="address" class="form-control" value="{{ json_decode($order->address)->streetAddress }}">
                                    {!!showError($errors,'address')!!}
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input  type="text" name="email" class="form-control" value="{{ $order->email }}">
                                    {!!showError($errors,'email')!!}
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input  type="text" name="phone" class="form-control" value="{{ $order->phone }}">
                                    {!!showError($errors,'phone')!!}
                                </div>
                                <div class="form-group">
                                    <label>Payment method</label>
                                    <select class="form-control" name="payment_method">
                                      <option
                                      @if ($order->payment_method=='Momo')
                                         selected
                                      @endif
                                      value="Momo" >Momo</option>
                                      <option 
                                      @if ($order->payment_method=='ATM')
                                         selected
                                      @endif
                                      value="ATM" >ATM</option>
                                      <option
                                      @if ($order->payment_method=='Paypal')
                                         selected
                                      @endif
                                      value="Paypal" >Paypal</option>
                                      <option
                                      @if ($order->payment_method=='CKNH')
                                         selected
                                      @endif
                                      value="CKNH" >CKNH</option>
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
