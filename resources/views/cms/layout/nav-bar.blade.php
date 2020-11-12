<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="dropdown user user-menu open">
            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../uploads/images/avatars/{{ Auth::user()->avatar }}" class="user-image" alt="User Image">

                <span class="hidden-xs">{{ Auth::user()->full_name }}</span>


            </a>

            <div aria-labelledby="dropdownMenuLink">
                <ul class="dropdown-menu" >
                    <!-- User image -->
                    <li class="user-header" style="background-color: #3c8dbc; height:200px;width:200px;text-align:center">
                        <img src="img/hello.jpg" class="img-circle mb-2 mt-3" alt="User Image" height="100px">

                        <p style="color: white">
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body"
                        style="padding: 15px;border-bottom: 1px solid #f4f4f4;border-top: 1px solid #dddddd;">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer" style="background-color: #f9f9f9;padding: 10px;">
                        <div class="pull-left" style="float: left; ">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right" style="float: right">
                            <a href="{{route('cms.logout')}}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </li>
    </ul>
    </li>
    </ul>
    </nav>
