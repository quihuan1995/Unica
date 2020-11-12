@php
    $isLogin = isset($isLogin) ? $isLogin : false;
    $bodyClass = isset($bodyClass) ? $bodyClass : "sidebar-mini";
    $pageTitle = isset($pageTitle) ? $pageTitle : "Dashboard";
    $breadCrumbs = isset($breadCrumbs) ? $breadCrumbs : array();
@endphp

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('cms.layout.head')
</head>
<body class="hold-transition text-sm {{ $bodyClass }}">
    @if ($isLogin)
        @yield('content')
    @else
    <div class="wrapper">
        <!-- Navbar -->
        @include('cms.layout.nav-bar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('cms.layout.side-bar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">{{ $pageTitle }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    @foreach ($breadCrumbs as $bread)
                    @if (!isset($bread["active"]) || !$bread["active"])
                        <li class="breadcrumb-item "><a href="{{$bread["link"]}}">{{ $bread["name"] }}</a></li>
                    @else
                      <li class="breadcrumb-item active">{{ $bread["name"] }}</li>
                    @endif

                    @endforeach
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">

                @yield('content')

              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
        </section>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
      </div>
      <!-- ./wrapper -->

    @endif

<!-- REQUIRED SCRIPTS -->

@include('cms.layout.foot')
</body>
</html>
