@include('dashboard.examsunit.header')

  @include('dashboard.examsunit.sidebar')
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
                  <h3 class="card-title">NID 100L</h3>
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
  
                      @foreach ($view_examsfornids as $view_examsfornid)
                          @if ($view_examsfornid->student['programname'] == 'NID Computer Software Engineering Technology' && $view_examsfornid->registercourse['semester'] == 'First Semester' && $view_examsfornid->registercourse['level'] == '100L')
                          <tr>
                            <td><a href="viewstudentsexams/{{ $view_examsfornid->student['ref_no'] }}">{{ $view_examsfornid->student['surname'] }}</a></td>
                            <td>{{ $view_examsfornid->student['fname'] }}</td>
                            <td>{{ $view_examsfornid->student['middlename'] }}</td>
                            <td><a href="">{{ $view_examsfornid->registercourse['course_code1'] }}</a></td>
                            <td>{{ $view_examsfornid->registercourse['course_title1'] }}</td>
                            <td>{{ $view_examsfornid->registercourse['credit_unit1'] }}</td>
                            <td>{{ $view_examsfornid->student['programname'] }}</td>
                            <td>{{ $view_examsfornid->registercourse['semester'] }}</td>
                            <td><a href="{{ url('examsunit/viewexam/'.$view_examsfornid->id) }}"
                              class='btn btn-default'>
                              View
                           </a></td>
                              
                          <td>{{ $view_examsfornid->created_at->format('D d, M Y, H:i')}}</td>

                          </tr>
                          @else
                            
                          @endif
                        @endforeach
                   
                     
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



        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">NID 100L 2ndSem</h3>
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

                    @foreach ($view_examsfornids as $view_examsfornid)
                        @if ($view_examsfornid->student['programname'] == 'NID Networking & Systems Security' && $view_examsfornid->registercourse['semester'] == 'Second Semester' && $view_examsfornid->registercourse['level'] == '100L')
                        <tr>
                          <td><a href="viewstudentsexams/{{ $view_examsfornid->student['ref_no'] }}">{{ $view_examsfornid->student['surname'] }}</a></td>
                          <td>{{ $view_examsfornid->student['fname'] }}</td>
                          <td>{{ $view_examsfornid->student['middlename'] }}</td>
                          <td><a href="">{{ $view_examsfornid->registercourse['course_code1'] }}</a></td>
                          <td>{{ $view_examsfornid->registercourse['course_title1'] }}</td>
                          <td>{{ $view_examsfornid->registercourse['credit_unit1'] }}</td>
                          <td>{{ $view_examsfornid->student['programname'] }}</td>
                          <td>{{ $view_examsfornid->registercourse['semester'] }}</td>
                          <td><a href="{{ url('examsunit/viewexam/'.$view_examsfornid->id) }}"
                            class='btn btn-default'>
                            View
                         </a></td>
                            
                        <td>{{ $view_examsfornid->created_at->format('D d, M Y, H:i')}}</td>

                        </tr>
                        @else
                          
                        @endif
                      @endforeach
                 
                   
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


        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">NID 100L 2ndSem</h3>
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
    
                        @foreach ($view_examsfornids as $view_examsfornid)
                            @if ($view_examsfornid->student['programname'] == 'NID Networking & Systems Security' && $view_examsfornid->registercourse['semester'] == 'First Semester' && $view_examsfornid->registercourse['level'] == '200L')
                            <tr>
                              <td><a href="viewstudentsexams/{{ $view_examsfornid->student['ref_no'] }}">{{ $view_examsfornid->student['surname'] }}</a></td>
                              <td>{{ $view_examsfornid->student['fname'] }}</td>
                              <td>{{ $view_examsfornid->student['middlename'] }}</td>
                              <td><a href="">{{ $view_examsfornid->registercourse['course_code1'] }}</a></td>
                              <td>{{ $view_examsfornid->registercourse['course_title1'] }}</td>
                              <td>{{ $view_examsfornid->registercourse['credit_unit1'] }}</td>
                              <td>{{ $view_examsfornid->student['programname'] }}</td>
                              <td>{{ $view_examsfornid->registercourse['semester'] }}</td>
                              <td><a href="{{ url('examsunit/viewexam/'.$view_examsfornid->id) }}"
                                class='btn btn-default'>
                                View
                             </a></td>
                                
                            <td>{{ $view_examsfornid->created_at->format('D d, M Y, H:i')}}</td>
    
                            </tr>
                            @else
                              
                            @endif
                          @endforeach
                     
                       
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

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">NID 100L 2ndSem</h3>
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

                @foreach ($view_examsfornids as $view_examsfornid)
                    @if ($view_examsfornid->student['programname'] == 'NID Networking & Systems Security' && $view_examsfornid->registercourse['semester'] == 'Second Semester' && $view_examsfornid->registercourse['level'] == '200L')
                    <tr>
                      <td><a href="viewstudentsexams/{{ $view_examsfornid->student['ref_no'] }}">{{ $view_examsfornid->student['surname'] }}</a></td>
                      <td>{{ $view_examsfornid->student['fname'] }}</td>
                      <td>{{ $view_examsfornid->student['middlename'] }}</td>
                      <td><a href="">{{ $view_examsfornid->registercourse['course_code1'] }}</a></td>
                      <td>{{ $view_examsfornid->registercourse['course_title1'] }}</td>
                      <td>{{ $view_examsfornid->registercourse['credit_unit1'] }}</td>
                      <td>{{ $view_examsfornid->student['programname'] }}</td>
                      <td>{{ $view_examsfornid->registercourse['semester'] }}</td>
                      <td><a href="{{ url('examsunit/viewexam/'.$view_examsfornid->id) }}"
                        class='btn btn-default'>
                        View
                     </a></td>
                        
                    <td>{{ $view_examsfornid->created_at->format('D d, M Y, H:i')}}</td>

                    </tr>
                    @else
                      
                    @endif
                  @endforeach
             
               
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


@include('dashboard.admin.footer')



    