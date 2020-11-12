@extends('cms.layout.main', ["isLogin" => true, "bodyClass" => "login-page"])
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Vui lòng nhập địa chỉ email của bạn.</p>
        <form action =" " method="post">
          @csrf
          <div class="input-group mb-3">
            
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-envelope-square"></i>
              </div>
            </div>
          </div>
          {!!ShowError($errors,'email')!!}
          @if(session('success'))
          <div class="btn btn-danger">
            {{session('success')}}
          </div>
        @endif
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Request new password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <p class="mt-3 mb-1">
          <a href="{{url('login')}}">Login</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection

@push('foot-scripts')
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
@endpush