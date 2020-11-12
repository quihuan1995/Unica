<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/plugins/moment/moment.min.js"></script>
<script src="https://ilikenwf.github.io/jquery.mjs.nestedSortable.js"></script>
@stack('plugins-scripts')

<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script src="js/demo.js"></script>

@stack('foot-scripts')
<!--- Delete user confirm -->
<script>
    function delUser(name){
        return confirm('Bạn có muốn xóa thành viên '+name+' không ? ');
    }
/////// Upload anh
    function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
</script>

<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

	
		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
</script>

