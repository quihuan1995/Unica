@extends('cms.layout.main', array(
"pageTitle" => "Quản lý người dùng",
"breadCrumbs" => array(
array(
"name" => "Quản lý người dùng",
"link" => "/users",
"active" => true
)
)))

@push("head-title")
Quản lý người dùng
@endpush


@section('content')
<div class="col-12">
    <div class="card">
        <table id="table-users" class="table table-hover table-striped" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th>CREATED AT</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push("plugins-scripts")
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
@endpush

@push("style-custome")
<link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/datatable.css">
@endpush

@push("foot-scripts")
<script>
    $(document).ready(function(e){

        $("#table-users").DataTable({
            lengthChange: true,
            dom: '<<"datatable__head_wrap row"<"col-6"f><"col-6"B>><rt><"datatable__info_wrap"lip>>',
            serverSide: true,
            processing: true,
            ajax: '{{ route('users.list') }}',
            language: {
                lengthMenu: "_MENU_"
            },
            columns: [
                {
                    "data": "id",
                    "render": function(data, type, row, meta){
                        return `<input type="checkbox" />`
                    }
                },
                {
                    "data": "id"
                },
                {
                    "data": "full_name"
                },
                {
                    "data": "email",
                },
                {
                    "data": "id"
                },
                {
                    "data": "created_at"
                },
                {
                    "data": "status",
                    "render": function(data, type, row, meta){
                        return data === "active" ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">DeActive</span>'
                    }
                },
                {
                    "data": "id",
                    "render": function(data, type, row, meta){
                        return `<a href="/cms/users/${data}/edit"><button class="btn btn-primary"><i class="fas fa-pen"></i></button></a>
                        <a href="/cms/users/${data}/delete"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>`
                    }
                }
            ],
            buttons: [{
                text: "Create",
                className: "btn btn-info btn-sm",
                action: function (e){
                    window.location = '{{route('users.create')}}';
                }
            }]
        })
    })
</script>
@endpush


