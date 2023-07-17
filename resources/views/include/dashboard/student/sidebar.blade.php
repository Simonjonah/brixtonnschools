<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('student.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="studentLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"> IMFI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('student')->user()->passpot)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="studentprofile/{{ Auth::guard('student')->user()->surname }}" class="d-block">{{ Auth::guard('student')->user()->fname }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @if (Auth::guard('student')->user()->status == null)
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
                <a href="{{ route('student.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="../studentprofile/{{ Auth::guard('student')->user()->surname }}" class="nav-link">
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
                Programs
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.programs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.certiprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('student.dataprocessprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Processing </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.mainrepairsprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maint/Repairs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.professionalpragrams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profesionals </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.nidprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID </p>
                </a>
              </li>

              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Payments History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.paymenthistory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payments History</p>
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
                <a href="{{ route('student.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
      @else
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
                <a href="{{ route('student.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="studentprofile/{{ Auth::guard('student')->user()->surname }}" class="nav-link">
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
                Programs
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.programs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.certiprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('student.dataprocessprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Processing </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.mainrepairsprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maint/Repairs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.professionalpragrams') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profesionals </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('student.nidprograms') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID </p>
                </a>
              </li>

              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Payments History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.paymenthistory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payments History</p>
                </a>
              </li>
              <li class="nav-item">
                {{-- <a href="{{ route('student.viewpublication') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Publication</p>
                </a> --}}
              </li>
              
            </ul>
          </li>
          
          <li class="nav-header">ADMIMISSION</li>
          <li class="nav-item">
            <a href="{{ route('student.admisionletter') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Admission Letter</p>
            </a>
          </li>

          <li class="nav-item">
            @if (Auth::guard('student')->user()->student_identity == 'IT SEND')
            <a href="{{ route('student.stuit') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Send For IT</p>
            </a>
            @else
            <p>1</p>
            @endif
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Register Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.studentcoursereg') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Courses</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Your Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.yourcourse') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Courses</p>
                </a>
              </li>
              <li class="nav-item">
                {{-- <a href="{{ route('student.viewpersonnel') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Personnel</p>
                </a> --}}
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Check Result
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('student.checkresultterminal') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Results</p>
                </a>
              </li>


              {{-- <li class="nav-item">
                <a href="{{ route('student.checkresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Results</p>
                </a>
              </li> --}}

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Program 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('student.myprogram') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Programs</p>
                  </a>
                </li>
              </li>
              <li class="nav-item">
                {{-- <a href="{{ route('student.contactpage') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact From Glimsource</p>
                </a> --}}
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
                <a href="{{ route('student.logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      @endif
    </div>
    <!-- /.sidebar -->
  </aside>
