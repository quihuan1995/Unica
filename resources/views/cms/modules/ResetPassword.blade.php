@extends('cms.layout.main', ["isLogin" => true, "bodyClass" => "login-page"])
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Vui lòng nhập email và mật khẩu mới.</p>

      @if(session('done'))
        <div class="btn btn-danger">
          {{session('done')}}
        </div>
      @endif
        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="Email" name="email"class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">  
                    <span class="fas fa-envelope"></span> 
                  </div>
                </div>
              </div>
              {!!ShowError($errors,'email')!!}
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text"> 
                <span class="fas fa-lock"></span>  
              </div>
            </div>
          </div>
          {!!ShowError($errors,'password')!!}
          <div class="input-group mb-3">
            <input type="password" name = "password_cofirm" class="form-control" placeholder="Password_cofirm">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          {!!ShowError($errors,'password')!!}
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Change password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <p class="mt-3 mb-1">
          <a href="{{url('login')}}">Login</a>
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