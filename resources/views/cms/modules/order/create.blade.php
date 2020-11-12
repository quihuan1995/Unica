@extends('cms.layout.main', array(
"pageTitle" => "New Order",
"breadCrumbs" => array(
array(
"name" => "Create Order",
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
            <form action="{{ route('order.store') }}" method="POST" >
                @csrf
            <div class="row ">
                <div class="col-lg-7 card" style="background: #f2f2f2">
                    <div class="form-group">
                        <input type="radio" onclick="newCustomer()" name="rad1" class="user-customer" style="margin-left: 10%;"><label style="font-size: 25px;">Tạo mới</label>
                        <input type="radio" onclick="chooseCustomer()" name="rad2" class="user-customer" style="margin-left: 25%;"><label style="font-size: 25px;">Chọn người dùng</label>
                    </div>
                    <div class="card-body" id="new-cart" style="display: none">
                        <div class="form-group">
                            <label style="font-weight: bolder">Họ và tên</label>
                            <input style="height: 50%;" type="text" name="full_name" class="form-control" value="">
                            {!!showError($errors,'full_name')!!}
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bolder">Địa chỉ Email</label>
                            <input style="height: 50%;" type="email" name="email" class="form-control" value="">
                            {!!showError($errors,'email')!!}
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bolder">Thành phố</label>
                            <input style="height: 50%;" type="text" name="city" class="form-control" value="">
                            <label style="font-weight: bolder" class="mt-2">Địa chỉ nhà</label>
                            <input style="height: 50%;" type="text" name="streetAddress" class="form-control" value="">
                            {!!showError($errors,'streetAddress')!!}
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bolder">Số điện thoại</label>
                            <input style="height: 50%;" type="number" name="phone" class="form-control" value="">
                            {!!showError($errors,'phone')!!}
                        </div>
                        <div class="form-group">
                            <label>Payment method</label>
                            <select class="form-control" name="payment_method">
                                <option value="Momo" >Momo</option>
                                <option value="ATM" >ATM</option>
                                <option value="Paypal" >Paypal</option>
                                <option value="CKNH" >CKNH</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="choose-customer" >
                        <div class="dropdown" >
                            <a onclick="myFunction()" class="dropbtn"><b>Chọn người dùng</b></a>
                            <div id="myDropdown" class="dropdown-content" style="margin-top: 21px;">
                                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">


                                @foreach ($customers as $customer)
                                    <li class="option" id="sec-cus{{ $customer->id }}" value="{{ $customer->id }}">{{ $customer->full_name }}</li>
                                @endforeach

                            </div>
                        </div>
                    </div>
                     @include('cms.components.ordercustomer-list')
                </div>
                <div class="col-lg-4 card" style="margin-left:20px; padding: 20 20px; background:#f2f2f2">
                    <div class="card-body">
                        <div class="form-body" ></div>
                            <div>
                                <button type="submit" class="btn btn-info" ><i class="fa fa-save"></i> Save</button>
                                <a href="{{route('order.index')}}" class="btn btn-danger" name="submitbutton" type="button" value="save and edit"><i class="fa fa-times"></i> Quit</a>
                            </div>
                            <div class="all-money" >
                                <h4 style="font-size: 2.5rem;">Tổng Đơn Hàng:</h4>
                                <hr>
                                <h1 id="totalprice" style="margin-left: 16%;font-weight: bold;"></h1>
                            </div>
                            <div class="form-group" style="margin-top: 12%;">
                            <label>Voucher</label>
                                <select class="form-control" name="voucher_id">
                                    <option value="unselect" selected>Select Voucher</option>
                                    {{-- @foreach ($vouchers as $voucher)
                                        <option value="{{ $voucher->id }}">{{ $voucher->code }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-11 card" style="background: #f2f2f2;padding:25px;">
                    <div class="table-course" >
                        <h2><b>Danh Sách khóa học</b>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal-add" >
                                <b>+ Thêm Khóa học</b>
                            </button>
                        </h2>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th><b>Mã </b></th>
                                <th><b>Tên khóa học</b></th>
                                <th><b>Regular Price</b></th>
                                <th><b>Sale Price</b></th>
                                <th><b>Action</b></th>
                            </tr>
                            </thead>
                            <tbody class="course-item sortable" id="nestable">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 155%;">
            <div class="modal-header" >
                <h1 class="modal-title" id="exampleModalLabel" style="margin-left: 31%;">Thêm Khóa Học</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 col-md-10 col-lg-12">


                        <div class="table-product" id="table-data" style="display: contents;" >
                            <table class="table table-hover" id="table-course-item">
                                <thead>
                                <tr id="prd-tr">
                                    <td></td>
                                    <th><b> Mã</b></th>
                                    <th><b>Tên Khóa Học</b></th>
                                    <th><b>Regular Price</b></th>
                                    <th><b>Sale Price</b></th>
                                    <th><b>Action</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <!--Course-Item-->
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>

            </div>
        </div>
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

        $("#table-course-item").DataTable({
            ajax: '{{ route('orderItem.orderItem') }}',
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
                    "data": "title"
                },
                {
                    "data": "regular_price"
                },
                {
                    "data": "sale_price",
                },
                {
                    "targets": 0,
                    "data": "id",
                    "render": function ( data, type, row, meta ) {
                    return `<button data-info='${JSON.stringify(row)}' ref="add_to_cart" class="btn btn-primary" id="addItem" >Thêm vào đơn hàng</button>`;
                    }
                }
            ],
        })

    })
</script>


<script>
    var courses = [];

    function totalPrice(){
        const total = courses.reduce((a,c) => a + (parseInt(c.sale_price)), 0)
        $("#totalprice").html(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(total))
    }

    function renderOrderItem(course){
         return `<tr>
                    <td>${course.id}</td>
                    <td>${course.title}</td>
                    <td style="text-decoration: line-through;">${course.regular_price} đ</td>
                    <td>${course.sale_price} đ</td>
                    <td><a data-id="${course.id}" ref="del_to_cart" class="btn btn-link" style="color: white;float: inherit;background: red;"><i class="fa fa-times"></i></a></td>
                </tr>`;
    }

    function renderCourses(){
        $("#nestable").empty()
        for (let course of courses) {
            $("#nestable").append(renderOrderItem(course))
        }
        totalPrice()
    }


    //Add Cart
    $(document).on("click", "[ref=add_to_cart]", function(e){
        const self = $(this)
        const course = self.data("info");
        courses.push(course);
        renderCourses();
       $("#addItem").replaceWith('<div id="successMsg" class="alert alert-success">Đã thêm</div>');
    })

    //Del Cart
    $(document).on("click", "[ref=del_to_cart]", function(e){
        const self = $(this)
        const id = parseInt(self.data("id"));
        courses = courses.filter(course => course.id !== id);
        renderCourses()
        $("#addItem").replaceWith('<button ref="add_to_cart" class="btn btn-primary" id="addItem" >Thêm vào đơn hàng</button>');
    })


    renderCourses();

</script>

<script>
    var x;
    function newCustomer(){
        if(x==1){
            document.getElementById('new-cart').style.display='block';
            return x=0;
        }else{
            document.getElementById('new-cart').style.display='none';
            return x=1;
        }
    }

    function chooseCustomer(){
        if(x==1){
            document.getElementById('choose-customer').style.display='block';
            return x=0;
        }else{
            document.getElementById('choose-customer').style.display='none';
            return x=1;
        }
    }
</script>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
        } else {
        a[i].style.display = "none";
        }
    }
    }
</script>

<script>

    $(document).ready(function(){
        @foreach($customers as $customer)
            $("#sec-cus{{ $customer->id }}").click(function(){
                var cus = $("#sec-cus{{ $customer->id }}").val();
            // alert(cus);
            $.ajax({
                type:'get',
                dataType:'html',
                url:'{{ route('customer.customer') }}',
                data:'customer_id=' + cus,
                success:function(response){
                    console.log(response);
                    $("#customerdata").html(response) ;

                }
            })
        });
        @endforeach

    });
</script>
@endpush

{{-- var user = { full_name: "Nguyen Van A" }
undefined
$('input[name=full_name]').val(user.full_name) --}}
