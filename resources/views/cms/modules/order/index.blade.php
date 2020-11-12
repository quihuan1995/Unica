@extends('cms.layout.main', array(
    "pageTitle" => "Danh sách Order",
    "breadCrumbs" => array(
        array(
            "name" => "Order",
            "link" => "/name",
            "active" => true
            )
            )))

@push("head-title")
Order
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
                        <a href="{{ route('order.create') }}" style="color: #fff">
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
                                    aria-label="Nameorderby desc">Name
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Created Atorderby asc">Course
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Created Atorderby asc">Phone
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 250px;"
                                    aria-label="Created Atorderby asc">Price
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 250px;"
                                    aria-label="Created Atorderby asc">Date-time
                                </th>
                                <th title="Status" width="150px" class="column-key-status sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Statusorderby asc">Status
                                </th>
                                </th>
                                <th title="Operations" width="150px" class="text-center sorting_disabled" rowspan="1"
                                    colspan="1" style="width: 164px;" aria-label="Operations">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('cms.components.order-list')
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
