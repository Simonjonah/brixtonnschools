@include('dashboard.registrar.header')

  @include('dashboard.registrar.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Student </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title text-danger">D1 First Semester Courses that was registered by Students</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
  
                      <th>Semester</th>

                      <th>View</th>
                      <th>Print</th>
                      
                      <th>Delete</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
  
                      @foreach ($view_examsford1s as $view_examsford1)
                          @if ($view_examsford1->registercourse['semester'] == 'First Semester')
                          <tr>
                            <td><a href="viewstudentsreg/{{ $view_examsford1->student['ref_no'] }}">{{ $view_examsford1->student['surname'] }}</a></td>
                            <td>{{ $view_examsford1->student['fname'] }}</td>
                            <td>{{ $view_examsford1->student['middlename'] }}</td>
                            <td><a href="">{{ $view_examsford1->registercourse['course_code1'] }}</a></td>
                            <td>{{ $view_examsford1->registercourse['course_title1'] }}</td>
                            <td>{{ $view_examsford1->registercourse['credit_unit1'] }}</td>
                            <td>{{ $view_examsford1->registercourse['semester'] }}</td>

                            {{-- <td>{{ $course_counts }}</td> --}}
                            <td><a href="{{ url('registrar/viewreg/'.$view_examsford1->id) }}"
                              class='btn btn-default'>
                              View
                           </a></td>
                              
                           <td><a href="{{ url('registrar/printcoursestudent/'.$view_examsford1->id) }}"
                            class='btn btn-primary'>
                            <i class="fas fa-print"></i>
                         </a></td>
                         <td><a href="{{ url('admin/deleteprogcoursetud/'.$view_examsford1->id) }}"
                          class='btn btn-danger'>
                           <i class="far fa-trash-alt"></i>
                       </a></td>
                         <td>{{ $view_examsford1->created_at->format('D d, M Y, H:i')}}</td>
    
                           
                             
    
                          </tr>
                          @else
                            
                          @endif
                        @endforeach
                   
                        <td>Total Credit Unit</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>

                        <td>{{ $course_counts }}</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Surname</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
        
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit</th>
                      <th>Semester</th>

                            <th>View</th>

                            <th>Print</th>
                            
                            <th>Delete</th>
                            <th>Date</th>
                          </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>



      <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title text-danger">D1 Second Semester Courses that was registered by Students</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
  
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Semester</th>

                      <th>View</th>
                      <th>Print</th>
                      
                      <th>Delete</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
  
                      @foreach ($view_examsford1s as $view_examsford1)
                          @if ($view_examsford1->registercourse['semester'] == 'Second Semester')
                          <tr>
                            <td><a href="viewstudentsreg/{{ $view_examsford1->student['ref_no'] }}">{{ $view_examsford1->student['surname'] }}</a></td>
                            <td>{{ $view_examsford1->student['fname'] }}</td>
                            <td>{{ $view_examsford1->student['middlename'] }}</td>
                            <td><a href="">{{ $view_examsford1->registercourse['course_code1'] }}</a></td>
                            <td>{{ $view_examsford1->registercourse['course_title1'] }}</td>
                            <td>{{ $view_examsford1->registercourse['credit_unit1'] }}</td>
                            <td>{{ $view_examsford1->registercourse['semester'] }}</td>

                            {{-- <td>{{ $course_counts }}</td> --}}
                            <td><a href="{{ url('registrar/viewreg/'.$view_examsford1->id) }}"
                              class='btn btn-default'>
                              View
                           </a></td>
                              
                           <td><a href="{{ url('registrar/printcoursestudent/'.$view_examsford1->id) }}"
                            class='btn btn-primary'>
                            <i class="fas fa-print"></i>
                         </a></td>
                         <td><a href="{{ url('admin/deleteprogcoursetud/'.$view_examsford1->id) }}"
                          class='btn btn-danger'>
                           <i class="far fa-trash-alt"></i>
                       </a></td>
                         <td>{{ $view_examsford1->created_at->format('D d, M Y, H:i')}}</td>
    
                           
                             
    
                          </tr>
                          @else
                            
                          @endif
                        @endforeach
                   
                        <td>Total Credit Unit</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>

                        <td>{{ $course_count }}</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Nil</td>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Surname</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
        
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit</th>
                            <th>Semester</th>

                            <th>View</th>
                            <th>Print</th>
                            
                            <th>Delete</th>
                            <th>Date</th>
                          </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    </div>
  
    

  </div>
    @include('dashboard.registrar.footer')