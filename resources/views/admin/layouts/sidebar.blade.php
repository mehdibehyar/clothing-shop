<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">مهدی بهیار</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.'?'menu-open':''}}">
                        <a class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.'?'active':''}}" href="{{route('admin.')}}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>پنل مدیریت</p>
                        </a>
                    </li>
                    @can('show_users')
                        <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.users.index','admin.users.create','admin.users.edit'])?'menu-open':''}}">
                            <a href="{{route('admin.users.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.users.index','admin.users.create','admin.users.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.users.index'?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست کاربران</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan
                    @can('show_categories')
                        <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.categories.index','admin.categories.create','admin.categories.edit'])?'menu-open':''}}">
                            <a href="{{route('admin.categories.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.categories.index','admin.categories.create','admin.categories.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    دسته بندی ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.categories.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.categories.index'?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست دسته ها</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan

                    @can('show_products')
                        <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.products.index','admin.products.create','admin.products.edit'])?'menu-open':''}}">
                            <a href="{{route('admin.products.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.products.index','admin.products.create','admin.products.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    محصولات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.products.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.products.index'?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست محصولات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan
                    @can('show_advertises')
                        <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.advertises.index','admin.advertises.create','admin.advertises.edit'])?'menu-open':''}}">
                            <a href="{{route('admin.advertises.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.advertises.index','admin.advertises.create','admin.advertises.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    تبلیغ ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.advertises.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.advertises.index'?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست تبلیغ ها</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan
                    @can('show_posts')
                        <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.posts.index','admin.posts.create','admin.posts.edit'])?'menu-open':''}}">
                            <a href="{{route('admin.posts.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.posts.index','admin.posts.create','admin.posts.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    پست ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.posts.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.posts.index'?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست پست ها</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan
                    <li class="nav-item has-treeview {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.permissions.index','admin.roles.index','admin.permissions.create','admin.permissions.edit'])?'menu-open':''}}">
                        @canany(['show_permissions','show_roles'])
                            <a href="{{route('admin.permissions.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.permissions.index','admin.roles.index','admin.permissions.create','admin.permissions.edit'])?'active':''}}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    بخش اجازه دسترسی
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                        @endcanany

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.roles.index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::currentRouteName()=='admin.roles.index'?'active':''}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه مقام ها</p>
                                </a>
                            </li>
                            @can('show_permissions')
                                <li class="nav-item">
                                    <a href="{{route('admin.permissions.index')}}" class="nav-link {{in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['admin.permissions.index','admin.permissions.create','admin.permissions.edit'])?'active':''}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>همه دسترسی ها</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>

                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
