<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('lecturer.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"> IMFI ICT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('lecturer')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('lecturer.profile') }}" class="d-block">{{ Auth::guard('lecturer')->user()->fname }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lecturer.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('lecturer.profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Your Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lecturer.yourcources') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Courses</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Registered Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{ route('lecturer.yourstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate && D1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('lecturer.d1cousesleg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MT</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('lecturer.nidcousesleg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View NID</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Results
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lecturer.yourstudentsresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert 1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('lecturer.d2studentsresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1 & D2 </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lecturer.mtstudentsresultss') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MT1, MT2 & MT3 </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('lecturer.nidresults') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Programs 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lecturer.alltheprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Programs</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lecturer.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
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
