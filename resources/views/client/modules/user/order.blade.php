@extends('client.layout.main')
@section('title','home')
@section('content')
<!-- main -->
<main>
@include('client.layout.headuser')
    <div class="container">
        <div id="main-content">
            <br />
            <div class="main-inner">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="font-weight: bold;"> <i class="fa fa-history" aria-hidden="true"></i> Chi tiết đơn hàng</h1></span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection