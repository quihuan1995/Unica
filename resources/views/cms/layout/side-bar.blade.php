<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="Unica" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Unica CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Khóa học
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Danh mục') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tag.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Thẻ') }}</p>
                    </a>
                    </li>
                </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('menus.index') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Menus
              </p>
            </a>
          </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Quản trị hệ thống
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Người dùng') }}</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/cms/order" class="nav-link">
                <i class="nav-icon fa fa-shopping-cart" aria-hidden="true"></i>
                <p>
                    Order
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/cms/voucher" class="nav-link">
                <i class="nav-icon fas fa-ticket-alt" aria-hidden="true"></i>
                <p>
                    Voucher
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/cms/customer" class="nav-link">
                <i class="nav-icon fas fa-house-user" aria-hidden="true"></i>
                <p>
                    Customer
                </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
