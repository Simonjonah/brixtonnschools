<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
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
          <img src="{{ asset('/public/../'.Auth::guard('registrar')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('registrar.profile') }}" class="d-block">{{ Auth::guard('registrar')->user()->lname }}</a>
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
                <a href="{{ route('registrar.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('registrar.profile') }}" class="nav-link">
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
                Courses
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.coursesforcert') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('registrar.coursesford1') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1 Courses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>

              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.allthestudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('registrar.rejectedstureg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('registrar.approvedstureg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('registrar.suspendstureg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspended Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('registrar.admittedstureg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admitted Students</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Exams 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.certexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject for Cert in Data </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('registrar.d1exams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1 Exams</p>
                </a>
              </li>
              <li class="nav-item">
                {{-- <a href="{{ route('registrar.viewpersonnel') }}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>D2</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Results 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.resultforcertindataproc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result for Cert</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('registrar.d1result') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1 Results</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Lecturers 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.viewlecturersreg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Lecturers</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payments 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('registrar.paymnentcertreg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate</p>
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
                <a href="{{ route('registrar.logout') }}" class="nav-link active">
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
