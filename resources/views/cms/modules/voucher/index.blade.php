@extends('cms.layout.main', array(
    "pageTitle" => "Danh sách Voucherr",
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
<div id="main">
    <div class="table-wrapper">
        <div class="port-body">
            <div class="dataTables_filter ">
                <input style="margin-top: -40px" type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-menus">
            </div>
            <div class="dt-buttons btn-group" style="margin-top: -50px;right: 63%;">
                    <button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-menus">
                        <a href="{{ route('voucher.create') }}" style="color: #fff">
                            <i class="fa fa-plus"></i> Create</a></button>
            </div>
            <div class="table-action">
                <div class="tablt-menus" style="width:100%;">
                    <table class="table-striped ">
                        <thead>
                            <tr role="row" style="background: #fff">
                                <th width="10px" class="text-left no-sort sorting_disabled"
                                    title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>"
                                    rowspan="1" colspan="1" style="width: 37px;" aria-label="">
                                    <input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
                                </th>
                                <th title="ID" width="20px" class="column-key-id sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 30px;"
                                    aria-label="IDorderby asc">ID
                                </th>
                                <th title="Name" class="text-left column-key-name sorting_asc" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 180px;"
                                    aria-label="Nameorderby desc">code
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Created Atorderby asc">Start TIme
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Created Atorderby asc">End Time
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 250px;"
                                    aria-label="Created Atorderby asc">Limit
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 250px;"
                                    aria-label="Created Atorderby asc">Quantity
                                </th>
                                </th>
                                <th title="Operations" width="150px" class="text-center sorting_disabled" rowspan="1"
                                    colspan="1" style="width: 164px;" aria-label="Operations">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach ($vouchers as $voucher)
                               <tr role="row">
                                    <td class=" text-left no-sort">
                                        <div class="text-left">
                                            <div class="checkbox checkbox-primary table-checkbox">
                                                <input type="checkbox" class="checkboxes" name="id[]" value="1">
                                            </div>
                                         </div>
                                    </td>
                                    <td class="  column-key-id">{{$voucher->id}}</td>
                                    <td class="  column-key-id">{{$voucher->code}}</td>
                                    <td class="  column-key-created_at">{{$voucher->start_time}}</td>
                                    <td class="  column-key-created_at">{{$voucher->end_time}}</td>
                                    <td class=" text-left column-key-name"><a href="#">{{$voucher->limit}}</a></td>
                                    <td class=" text-left column-key-name"><a href="#">{{$voucher->quantity}}</a></td>
                                    <td class=" text-center">
                                        <div class="table-actions">
                                            <a href="{{ route('voucher.edit',['id'=>$voucher->id]) }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Want delete?')" href="{{ route('voucher.delete',['id'=>$voucher->id]) }}" class="btn btn-icon btn-sm btn-danger deleteDialog" data-toggle="tooltip" data-section="#" role="button" data-original-title="Delete">
                                                    <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div align='right'>

                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
@endsection
