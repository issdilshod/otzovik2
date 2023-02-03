<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="{{env('APP_NAME')}} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">USER</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        {{__('menu_dashboard_title')}}
                    </p>
                </a>
            </li>

            <li class="nav-item {{ (request()->is('admin/universit*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/universities*')) ? 'active' : '' }}">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                        {{__('menu_universities_title')}}
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/admin/universities/universities') }}" class="nav-link {{ (request()->is('admin/universities/universit*')) ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('menu_universities_title')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/universities/directions') }}" class="nav-link {{ (request()->is('admin/universities/direction*')) ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('menu_directions_title')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/universities/education-types') }}" class="nav-link {{ (request()->is('admin/universities/education-type*')) ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('menu_education_type_title')}}</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/reviews') }}" class="nav-link {{ (request()->is('admin/review*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-star"></i>
                <p>
                    {{__('menu_reviews_title')}}
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/articles') }}" class="nav-link {{ (request()->is('admin/article*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    {{__('menu_articles_title')}}
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{__('menu_staff_title')}}
                </p>
                </a>
            </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>