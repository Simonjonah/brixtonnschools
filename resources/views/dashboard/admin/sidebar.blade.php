<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"><br>BRIXTONN  SCHOOLS </span>
    </a>
    
      <?php
        use App\Models\Classname;
          $view_clesses = Classname::all();
      ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
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
                <a href="{{ route('admin.home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Classes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addclass') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Class</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.viewclassestables') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Classes</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Center
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.studycenter1') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Study Center</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.studycentertables') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Study Center</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Assets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Gallery</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.viewgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Galleries</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.addfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Facility</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.viewfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Facilities</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.addmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Main Slider</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ route('admin.viewmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Main Slider</p>
                  </a>
                </li>
              </li>
            </ul>
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
                <a href="{{ route('admin.adminprogress') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student in Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.rejectedstudent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.suspendstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspeneded Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.admittedstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admitted Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.allstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Uyo Center 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.viewalluyo') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View All Uyo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.viewpreparatory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Preperatory</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewpreschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Pre-School</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewnursery') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Nursery</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="{{ route('admin.viewprimary') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo Primary</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewhighschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Uyo High School</p>
                    </a>
                  </li>
                </ul>
              </li> 


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Abuja Center 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.viewallabuja') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View All Abuja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujapreparatory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Preperatory</p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="{{ route('admin.abujapreschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Abj Pre-School</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujanursery') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Nursery</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabujaprimary') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj Primary</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.viewabjhighschool') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Abj High School</p>
                    </a>
                  </li>
                  

                </ul>
              </li> 


            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Classes Manage
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Classes
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classrooms/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach
                  
                 
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                     Maintenance Section
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.addmt1courses') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Upload MT Courses</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.viewmtcourses') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View MT Courses</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    NID Section
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID in Software
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidsoftcourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> Add Software Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidsoftcourses2l') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> Add Software Courses 200L</p>
                        </a>
                      </li>


                      <li class="nav-item">
                        <a href="{{ route('admin.viewnidcources') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Software Courses</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID in Network
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidnetcoursesl1stsem') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Network Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidnet2ndsem1leve200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Network Courses 200L</p>

                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ route('admin.viewnetworkcourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Network Courses</p>

                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID in Hardware
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidhardcourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidhardcourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ route('admin.viewardwarecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> Hardware Courses </p>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID Bus Manag
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidmanagecourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.addnidmanagecourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ route('admin.viewnidmanagecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Subject
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.addsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.viewsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subjects</p>
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
                <a href="{{ route('admin.addcource') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CERT1, D1, MT Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.professionals') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prof Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.nsq') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NSQ Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.addnid') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NID Programs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.imficca') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add IMFI-CCA Programs</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.viewcourses') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Programs</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teachers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.viewteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.approveteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Approve Teachers </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.suspendedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Suspended Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.sackedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Sacked Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.queriedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Queried Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.allteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Teachers </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Payments 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.viewallpaymentfirst') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All First Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewallpayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Payment</p>
                </a>
              </li>
            </ul>
          </li> 
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
                <a href="{{ route('admin.certregcourses') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.certregcourssd1') }}" class="nav-link">
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
                <a href="{{ route('admin.resultforcertindata') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result for Cert. Results</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.resultford1') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Result D1 Courses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Administrations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('admin.addblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Press Releasse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Press Releasse</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimony</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimony</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addevent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewevents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Event</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.addteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.viewteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Team</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ route('admin.addrole') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Role</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.viewroles') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Role</p>
                  </a>
                </li>
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
                <a href="{{ route('admin.logout') }}" class="nav-link active">
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
