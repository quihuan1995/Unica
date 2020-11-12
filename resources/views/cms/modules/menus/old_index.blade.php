@extends('cms.layout.main', array(
    "pageTitle" => "Menu",
    "breadCrumbs" => array(
        array(
            "name" => "Menu",
            "link" => "/name",
            "active" => true
        )
    )))

@push("head-title")
    Admin LTE
@endpush


@section('content')
{!!showNotification('create')!!}
{!!showNotification('edit')!!}
{!!showNotification('delete')!!}
    <div id="main">
        <div class="table-wrapper">
            <div class="portlet" >
                <div class="caption">
                    <div>
                        <div class="btn group">
                            <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-expanded="false">Bulk Actions</a>
                            <ul class="dropdown-menu" style="">
                                <li>
                                    <div class="dropdown dropdown-hover">
                                        <a href="javascript:;">Thay đổi hàng loạt
                                        </a>
                                        <i class="fa fa-angle-right"></i>
                                        <ul class="dropdown-menu menuchirl" style="margin-left:158px;margin-top:-33px">
                                            <li>tên</li>
                                            <li>tên </li>
                                            <li>tên</li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">xoá</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-primary btn-show-table-options" ">Filters</button>
                    </div>
                </div>
            </div>
            <div class="port-body">
                <div  class="dataTables_filter">
                    <input id="search" type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-menus" >
                </div>
                <div class="dt-buttons btn-group" style="margin-top: -50px;">
                     <button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-menus">
                        <a href="{{ route('menus.create') }}" style="color: #fff">
                             <i class="fa fa-plus"></i> Create</a></button>
                     <button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="table-menus">
                         <span><i class="fas fa-sync"></i> Reload</span></button> </div>
                <div class="table-action">
                    <div class="tablt-menus" style="width:100%;">
                        <table>
                            <thead>
                                <tr role="row" style="background-color: #fff">
                                    <th width="10px" class="text-left no-sort sorting_disabled" title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>" rowspan="1" colspan="1" style="width: 37px;" aria-label="">
                                    <input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
                                    </th>
                                    <th title="ID" width="20px" class="column-key-id sorting" tabindex="0" aria-controls="table-menus" rowspan="1" colspan="1" style="width: 30px;" aria-label="IDorderby asc">ID
                                    </th>
                                    <th title="Name" class="text-left column-key-name sorting_asc" tabindex="0" aria-controls="table-menus" rowspan="1" colspan="1" style="width: 600px;" aria-label="Nameorderby desc" aria-sort="ascending">Name
                                    </th>
                                    <th title="Created At" width="200px" class="column-key-created_at sorting" tabindex="0" aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;" aria-label="Created Atorderby asc">Created At
                                    </th>
                                    <th title="Status" width="200px" class="column-key-status sorting" tabindex="0" aria-controls="table-menus" rowspan="1" colspan="1" style="width: 200px;" aria-label="Statusorderby asc">Update At
                                    </th>
                                    </th><th title="Operations" width="150px" class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 164px;" aria-label="Operations">Operations</th>
                                 </tr>
                            </thead>
                            <tbody>
                              @include('cms.components.menu-list')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('foot-scripts')
     <script>
    $(document).ready(function(){
        menus();
        function menus(data = {})
        {
            $.ajax({
            url:"{{ route('menus.menus') }}",
            method:'GET',
            data:data,
            dataType:'json',
            success:function(data)
                {
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_row);
                }
            })
        }
        $(document).on("click", ".page-link", function(e){
            e.preventDefault();
            const self = $(this);
            const url = self.attr("href");
            const queryString = new URLSearchParams(url.split("?")[1]);
            const data  = {}
            for(var key of queryString.keys()) {
                data[key] = queryString.get(key)
            }
            menus(data)
        })
        $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        menus({query});
        });
    });
    </script>
@endpush
