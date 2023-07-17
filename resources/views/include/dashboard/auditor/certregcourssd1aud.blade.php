@include('dashboard.auditor.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.auditor.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
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
                    <th>Program</th>
                    <th>Semester</th>

                    <th>View</th>
                   
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($display_allcourses as $display_allcourse)
                        @if ($display_allcourse->registercourse['semester'] == 'First Semester')
                        <tr>
                          <td><a href="viewstudentaccountaud/{{ $display_allcourse->student['ref_no'] }}">{{ $display_allcourse->student['surname'] }}</a></td>
                          <td>{{ $display_allcourse->student['fname'] }}</td>
                          <td>{{ $display_allcourse->student['middlename'] }}</td>
                          <td>{{ $display_allcourse->registercourse['course_code1'] }}</td>
                          <td>{{ $display_allcourse->registercourse['course_title1'] }}</td>
  
                          <td>{{ $display_allcourse->registercourse['credit_unit1'] }}</td>
                          <td>{{ $display_allcourse->registercourse['programname'] }}</td>
                          <td>{{ $display_allcourse->registercourse['semester'] }}</td>
  
                          <td><a href="{{ url('auditor/viewaud/'.$display_allcourse->id) }}"
                            class='btn btn-default'>
                            View
                         </a></td>
                            
                      
                       <td>{{ $display_allcourse->created_at->format('D d, M Y, H:i')}}</td>
  
                         
                           
  
                        </tr>
                        @else
                          
                        @endif
                      @endforeach
                      <td>Total Credit Unit</td>
                      <td>nil</td>
                      <td>nil</td>
                      <td>nil</td>
                      <td>nil</td>

                      <td>{{ $course_counts }}</td>
                      <td>nil</td>
                      <td>nil</td>
                      <td>nil</td>
                      <td>nil</td>

                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
  
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Program</th>
                    <th>Semester</th>

                      <th>View</th>
                      
                    
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











    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Second Semester of D2</h3>
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
                      <th>Program</th>
                      <th>Semester</th>
  
                      <th>View</th>
                     
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
  
                      @foreach ($display_allcourses as $display_allcourse)
                          @if ($display_allcourse->registercourse['semester'] == 'Second Semester')
                          <tr>
                            <td><a href="viewstudentaccountaud/{{ $display_allcourse->student['ref_no'] }}">{{ $display_allcourse->student['surname'] }}</a></td>
                            <td>{{ $display_allcourse->student['fname'] }}</td>
                            <td>{{ $display_allcourse->student['middlename'] }}</td>
                            <td>{{ $display_allcourse->registercourse['course_code1'] }}</td>
                            <td>{{ $display_allcourse->registercourse['course_title1'] }}</td>
    
                            <td>{{ $display_allcourse->registercourse['credit_unit1'] }}</td>
                            <td>{{ $display_allcourse->registercourse['programname'] }}</td>
                            <td>{{ $display_allcourse->registercourse['semester'] }}</td>
    
                            <td><a href="{{ url('auditor/viewaud/'.$display_allcourse->id) }}"
                              class='btn btn-default'>
                              View
                           </a></td>
                              
                        
                         <td>{{ $display_allcourse->created_at->format('D d, M Y, H:i')}}</td>
    
                           
                             
    
                          </tr>
                          @else
                            
                          @endif
                        @endforeach
                        <td>Total Credit Unit</td>
                        <td>nil</td>
                        <td>nil</td>
                        <td>nil</td>
                        <td>nil</td>
  
                        <td>{{ $course_counts }}</td>
                        <td>nil</td>
                        <td>nil</td>
                        <td>nil</td>
                        <td>nil</td>
  
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Program</th>
                      <th>Semester</th>
  
                        <th>View</th>
                        
                      
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
    <!-- /.content -->
  </div>


  @include('dashboard.auditor.footer')
