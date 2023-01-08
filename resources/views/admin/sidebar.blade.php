<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admins" class="brand-link">
        <img src="{{ asset('admin/dist/img/CarBreezy.png') }}" alt="CarBreezy Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a class="div-info">
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class=" form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <li class="nav-header">PRODUCT MANAGEMENT</li>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="admins" class="nav-link">
                        <i class="fa-solid fa-gauge"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cars.index')}}" class="nav-link">
                        <i class="fa-solid fa-car"></i>
                        <p>
                            List Category-Brands
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cars.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create new Car</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('emps.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create new employee</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">CUSTOMER MANAGEMENT</li>
                <li class="nav-item">
                    <a href="{{ route('customers.index')}}" class="nav-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>
                <li class="nav-header">EMPLOYEE MANAGEMENT</li>
                <li class="nav-item">
                    <a href="{{ route('emps.index')}}" class="nav-link">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <p>
                            Employee
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-link"></i>
                        <p>
                            Connection
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('feedbacks.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Feedback</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>