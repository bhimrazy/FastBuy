<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">FastBuy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.dashboard')}}" class="d-block">{{auth()->user()->getFullName()??''}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link active bg-gradient-navy">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-gradient-gray-dark">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3" style="display: none;">
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.permissions.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-lock"></i>
                                <p>
                                    Permissions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.roles.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.users.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-gradient-gray-dark">
                        <i class="fas fa-shopping-cart nav-icon"></i>
                        <p>
                            Product Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3" style="display: none;">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="pl-3 nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link">
                                        <i class="fas fa-tasks nav-icon"></i>
                                        <p>List Categories</p>
                                    </a>
                                </li>
                                <li class="pl-3 nav-item">
                                    <a href="{{route('category.create')}}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Sub Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="pl-3 nav-item">
                                    <a href="{{route('subcategory.index')}}" class="nav-link">
                                        <i class="fas fa-tasks nav-icon"></i>
                                        <p>List Sub Categories</p>
                                    </a>
                                </li>
                                <li class="pl-3 nav-item">
                                    <a href="{{route('subcategory.create')}}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Sub Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    Tags
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="pl-3 nav-item">
                                    <a href="{{route('tags.index')}}" class="nav-link">
                                        <i class="fas fa-tasks nav-icon"></i>
                                        <p>List Tags</p>
                                    </a>
                                </li>
                                <li class="pl-3 nav-item">
                                    <a href="{{route('tags.create')}}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Tag</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cart-arrow-down nav-icon"></i>
                                <p>
                                    Products
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="pl-3 nav-item">
                                    <a href="{{route('products.index')}}" class="nav-link">
                                        <i class="fas fa-tasks nav-icon"></i>
                                        <p>List Products</p>
                                    </a>
                                </li>
                                <li class="pl-3 nav-item">
                                    <a href="{{route('products.create')}}" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{route('admin.orders')}}" class="nav-link">
                        <i class="fas fa-newspaper nav-icon"></i>
                        <p>
                            Orders
                            <span class="right"><span class="badge badge-info px-2">6</span><span class="badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-check-alt nav-icon"></i>
                        <p>
                            Payments<small class="right"><span class="badge bg-gradient-indigo">Transactions</span></small>
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('admin.customers')}}" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('admin.brands')}}" class="nav-link">
                        <i class="fab fa-500px nav-icon"></i>
                        <p>
                            Brands
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope nav-icon"></i>
                        <p>
                            Email
                            <span class="right"><span class="badge badge-info px-2">4</span><span class="badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bell nav-icon"></i>
                        <p>
                            Notifications
                            <span class="right"><span class="badge badge-info px-2">3</span><span class="badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs nav-icon"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-wrench nav-icon"></i>
                        <p>
                            Configure
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>