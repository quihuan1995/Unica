@extends('cms.layout.main', array(
"pageTitle" => "Dashboard",
"breadCrumbs" => array(
array(
"name" => "User",
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
        @if (session('thong-bao'))
        <div class="alert bg-success" role="alert">
            {{session('thong-bao')}}
        </div>
        @endif
        <div class="portlet">
            <div class="caption">
                <div>
                    <div class="btn group">
                        <div class="badge badge-danger" style="font-size: 12px">
                           @include('cms.components.user.current-role')
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="port-body">
            <div class="dataTables_filter ">
                <input style="margin-top: -40px" type="search" class="form-control form-control-sm"
                    placeholder="Search..." aria-controls="table-menus">

            </div>
            <div class="dt-buttons btn-group" style="margin-top: -40px;">
                @can('create-users')
                <a href="{{route('roles.create')}}">
                    <button style="padding: 3px 10px;" class="btn btn-secondary action-item" tabindex="0" aria-controls="table-menus">
                        <span><span data-action="create" data-href="#">
                                <i class="fa fa-plus"></i> Create</span></span></button>
                </a>
                @endcan
                <a href="{{ route('roles.index') }}"><button style="padding: 3px 10px;" type="button" class="btn btn-secondary buttons-reload"
                        tabindex="0" aria-controls="table-menus">
                        <span><i class="fas fa-sync"></i> Reload</span></button></a>
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
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 400px;"
                                    aria-label="Nameorderby desc">Name
                                </th>
                                <th title="Email" width="150px" class="column-key-created_at sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Created Atorderby asc">Role
                                </th>

                                </th>
                                <th title="Operations" width="150px" class="text-center sorting_disabled" rowspan="1"
                                    colspan="1" style="width: 164px;" aria-label="Operations">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('cms.components.role.role-list')
                        </tbody>
                    </table>
                    <div align='right'>
                        {{ $users->links() }}
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
