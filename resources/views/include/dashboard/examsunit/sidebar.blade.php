<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('examsunit.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"> IMFI ICT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('examsunit')->user()->images )}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('examsunit.profile') }}" class="d-block">{{ Auth::guard('examsunit')->user()->fname }}</a>
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
                <a href="{{ route('examsunit.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('examsunit.profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.allstudentexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Programs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.programsexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Programs </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.cerindataexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert In Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.viewd1coursesexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('examsunit.viewmt1coursesexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MT1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Registered Subjects 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebycertexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert in Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebyd1exams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebymt1exams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MT1</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                NID Reg Subjects 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.regnidcompsofteng') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Computer Software Eng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regnidnetwork') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Networking Eng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regnidhardware') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Hardware Eng</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('examsunit.regnidmanage') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Manage Eng</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Upload By Lecturer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('examsunit.resultbylecnidsoft') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Software</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('examsunit.resultbylecnidnetwoking') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Networking</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('examsunit.resultbylecnidardware') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Hardware</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('examsunit.resultbylecnidmanagement') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebycertitexams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebyd1exams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>D1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('examsunit.regitercoursebymt1exams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MT1</p>
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
                <a href="{{ route('examsunit.logout') }}" class="nav-link active">
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
