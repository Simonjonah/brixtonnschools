@include('dashboard.registrar.header')

  @include('dashboard.registrar.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              {{-- cog --}}
              <div class="info-box-content">
                <span class="info-box-text"><a href="{{ route('registrar.admittedstureg') }}">Students</a></span>
                <span class="info-box-number">
                  {{ $count_students }}
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
              {{-- thumbs-up --}}
              <div class="info-box-content">
                <span class="info-box-text"><a href="">Lecturers</a></span>
                <span class="info-box-number">{{ $count_lecturers }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>
              {{-- shopping-cart --}}
              <div class="info-box-content">
                <span class="info-box-text"><a href="">Programs</a></span>
                <span class="info-box-number">{{ $count_programs }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-chart-pie"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><a href="{{ route('registrar.coursesforcert') }}">Certificate in Data Courses</a> </span>
                <span class="info-box-number">{{ $count_certificate }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><a href="{{ route('registrar.coursesford1') }}">D1 Courses</a> </span>
                <span class="info-box-number">{{ $count_d1 }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- /.card -->
            <div class="row">
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Staff</h3>

                    <div class="card-tools">
                      {{-- <span class="badge badge-danger">8 New Members</span> --}}
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach ($view_lecturers as $view_lecturer)
                        @if ($view_lecturer)
                        <li>
                          <img style="width: 70px; height: 70px;" src="{{ URL::asset("/public/../$view_lecturer->images")}}" alt="User Image">
                          <a class="users-list-name" href="viewsinglelecturereg/{{ $view_lecturer->ref_no}}">{{ $view_lecturer->fname}} {{ $view_lecturer->lname}}</a>
                          <span class="users-list-date"> {{ $view_lecturer->created_at->diffForHumans() }}</span>
                        </li>
                        @else
                          
                        @endif
                      @endforeach
                     
                      
                      
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ route('registrar.viewlecturersreg') }}">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Students</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Status</th>
                      <th>Reg. Number</th>
                      <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($view_students as $view_student)
                        
                        <tr>
                          <td><a href="viewstudentsreg/{{ $view_student->ref_no}}">{{ $view_student->ref_no }}</a></td>
                          <td>{{ $view_student->fname }}</td>
                          <td>{{ $view_student->surname }}</td>

                          <td>@if ($view_student->status == null)
                            <span class="badge badge-secondary"> In progress</span>
                           @elseif($view_student->status == 'suspend')
                           <span class="badge badge-warning"> Suspended</span>
                           @elseif($view_student->status == 'reject')
                           <span class="badge badge-danger"> Rejected</span>
                           @elseif($view_student->status == 'approved')
                           <span class="badge badge-info"> Approved</span>
                           @elseif($view_student->status == 'admitted')
                           
                           <span class="badge badge-success">Admitted</span>
                           @endif</td>
                           <td>{{ $view_student->regnumber }}</td>
                           <td><a href="viewstudentsreg/{{ $view_student->ref_no}}" class="btn btn-sm btn-info float-left">View</a></td>

                        </tr>
                       
                      @endforeach
                    
                    
                  
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{-- <a href="allthestudents" class="btn btn-sm btn-info float-left">View Students</a> --}}
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Payments</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Status</th>
                      <th>Reg. Number</th>
                      <th>View</th>

                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($view_payments as $view_payment)
                        
                        <tr>
                          <td><a href="viewstudentsreg/{{ $view_payment->student['ref_no']}}">{{ $view_payment->student['ref_no'] }}</a></td>
                          <td>{{ $view_payment->student_firstname }}</td>
                          <td>{{ $view_payment->student['surname'] }}</td>


                          <td>@if ($view_payment->status == null)
                            <span class="badge badge-secondary"> In progress</span>
                           @elseif($view_payment->status == 'suspend')
                           <span class="badge badge-warning"> Suspended</span>
                           @elseif($view_payment->status == 'reject')
                           <span class="badge badge-danger"> Rejected</span>
                           @elseif($view_payment->status == 'approved')
                           <span class="badge badge-info"> Approved</span>
                           @elseif($view_payment->status == 'admitted')
                           
                           <span class="badge badge-success">Admitted</span>
                           @endif</td>
                           <td>{{ $view_payment->student_regnumber }}</td>
                            <td><a href="viewsinglepaymentreg/{{ $view_payment->id }}" class="btn btn-sm btn-info float-left">View</a></td>
                        </tr>
                       
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Results</span>
                <span class="info-box-number">{{ $count_results }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payments</span>
                <span class="info-box-number">{{ $count_payments }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

        

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Results</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  @foreach ($view_results as $view_result)
                  <li class="item">
                    <div class="product-img">
                      <p>{{ $view_result->student['fname'] }}</p>
                    </div>
                    <div class="product-info">
                      <a href="viewstudentsreg/{{ $view_result->student['ref_no'] }}" class="product-title">{{ $view_result->student['surname'] }} <a href="singleresults/{{ $view_result->id }}" class="btn btn-primary">View</a>
                        <span class="badge badge-warning float-right">Test{{ $view_result->test }}</span></a>
                      <span class="product-description">
                        Exams {{ $view_result->exams }} by <b><a href="viewsinglelecturereg/{{ $view_result->lecturer['ref_no'] }}">{{ $view_result->lecturer['fname'] }}</a></b> at {{ $view_result->created_at->format('D d, M Y, H:i')}} 
                      </span>
                    </div>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
              </div> --}}
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  @include('dashboard.registrar.footer')