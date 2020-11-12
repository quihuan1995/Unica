@extends('cms.layout.main', array(
    "pageTitle" => "Thông tin Order",
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
<section class="invoice">
    <div class="row">
        <div class="col-xs-12" style="width: 100%;">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> {{$order->full_name}}
                <small class="pull-right">Date: {{$order->updated_at}}</small>
            </h2>
        </div>
    </div>

    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <address>
                Tên: <strong>{{$order->full_name}}</strong><br>
                Địa Chỉ: <strong>{{ json_decode($order->address)->streetAddress }} {{ json_decode($order->address)->city }}</strong><br>
                Số Điện Thoại: <strong>{{$order->phone}}</strong><br>
                Email: <strong>{{$order->email}}</strong>
            </address>
        </div>

        <div class="col-sm-4 invoice-col">
            <address>
                Voucher_code:<strong>abcxyz</strong><br>
                Limit: <strong>1</strong><br>
                Quantity: <strong>1</strong>
            </address>
        </div>

        <div class="col-sm-4 invoice-col">
                <b>Order ID:</b> {{$order->id}}<br>
                <b>Payment Due:</b> 2/22/2014<br>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                    </tr>
                     <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                    </tr>
                     <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <p class="lead">Payment Methods:</p>
            <img src="img/visa.png" alt="Visa">
            <img src="img/mastercard.png" alt="Mastercard">
            <img src="img/american-express.png" alt="American Express">
            <img src="img/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" >
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
        </div>
        <div class="col-xs-6">
            <p class="lead">Amount Due 2/22/2014</p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Tổng Đơn Hàng</th>
                            <td style="font-size: 32px;font-weight: bold;">$265.24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row no-print">
        <div class="col-xs-12">
            <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>Print</a>
            <button type="button" class="btn btn-danger pull-right">Đã Hủy</button>
        </div>
    </div>
</section>
@endsection
