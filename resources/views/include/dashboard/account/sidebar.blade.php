<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('account.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"> IMFI ICT </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('account.profile') }}" class="d-block">{{ Auth::guard('account')->user()->name }}</a>
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
                <a href="{{ route('account.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('account.profile') }}" class="nav-link">
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
                <a href="{{ route('account.studentprogress') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student in Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.rejectedstudentacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.approvedstudentsacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('account.suspendstudentsacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspended Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('account.admittedstudentsacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admitted Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.allstudentsacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
              <i class="nav-icon fas fa-copy"></i>

              <p>
                Programs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.viewprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Programs</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Payments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.paymentcertacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert Payments</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('account.approvelecturersacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Approve Lecturers </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.suspendedlecturersacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Approve Suspended </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('account.lecturersacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Lecturers </p>
                </a>
              </li> --}}
            </ul>
          </li>

          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Payments 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.viewallpaymentacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Payment</p>
                </a>
              </li>
              

            </ul>
          </li>  --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Student Reg. Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.certregcoursesacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.certregcourssd1accs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diploma Data Processing</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Results Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.resultforcertindatacc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result for Cert. Results</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('account.resultford1acc') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Result D1 Courses</p>
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
                <a href="{{ route('account.logout') }}" class="nav-link active">
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
