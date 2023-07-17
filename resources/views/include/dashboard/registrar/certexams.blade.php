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
                      <th>View</th>
                      <th>Print</th>
                      
                      <th>Delete</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
  
                      @foreach ($view_examsforcerts as $view_examsforcert)
                          @if ($view_examsforcert->registercourse['programname'] == 'Certificate in Data Processing')
                          <tr>
                            <td><a href="viewstudentsreg/{{ $view_examsforcert->student['ref_no'] }}">{{ $view_examsforcert->student['surname'] }}</a></td>
                            <td>{{ $view_examsforcert->student['fname'] }}</td>
                            <td>{{ $view_examsforcert->student['middlename'] }}</td>
                            <td><a href="">{{ $view_examsforcert->registercourse['course_code1'] }}</a></td>
                            <td>{{ $view_examsforcert->registercourse['course_title1'] }}</td>
                            <td>{{ $view_examsforcert->registercourse['credit_unit1'] }}</td>
    
                            <td><a href="{{ url('registrar/viewreg/'.$view_examsforcert->id) }}"
                              class='btn btn-default'>
                              View
                           </a></td>
                              
                           <td><a href="{{ url('registrar/printcoursestudent/'.$view_examsforcert->id) }}"
                            class='btn btn-primary'>
                            <i class="fas fa-print"></i>
                         </a></td>
                         <td><a href="{{ url('admin/deleteprogcoursetud/'.$view_examsforcert->id) }}"
                          class='btn btn-danger'>
                           <i class="far fa-trash-alt"></i>
                       </a></td>
                         <td>{{ $view_examsforcert->created_at->format('D d, M Y, H:i')}}</td>
    
                           
                             
    
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