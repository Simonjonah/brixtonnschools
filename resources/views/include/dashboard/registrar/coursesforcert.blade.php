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
                      
  
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Lecturer's Name</th>
         
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Print</th>
  
                    </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($viewcourse_certs as $viewcourse_cert)
                        @if ($viewcourse_cert->programname == 'Certificate in Data Processing')
                        <tr>
                          <td>{{ $viewcourse_cert->course_code1 }}</td>
                          <td>{{ $viewcourse_cert->course_title1 }}</td>
                          <td>{{ $viewcourse_cert->credit_unit1 }}</td>
                          <td><a href="viewsinglelecturer/{{ $viewcourse_cert->lecturer['ref_no'] }}">{{ $viewcourse_cert->lecturer['fname'] }} <small>{{ $viewcourse_cert->lecturer['lname'] }}</small></a></td>
  
                          
                           <td><a href="{{ url('registrar/editprogramcoursereg/'.$viewcourse_cert->id) }}"
                            class='btn btn-info'>
                             <i class="far fa-edit"></i>
                         </a></td>
                         
                         <td><a href="{{ url('registrar/deleteprogramcourse/'.$viewcourse_cert->id) }}"
                          class='btn btn-danger'>
                           <i class="far fa-trash-alt"></i>
                       </a></td>
                       <th><a href="{{ url('registrar/printcoursestudentreg/'.$viewcourse_cert->id) }}" class="btn btn-success"><i class="fas fa-print"></i></a></th>
  
                        </tr>
                        @else
                        @endif
                     
                        {{-- <td colspan="12">Sorry! This Course is not Available for You!</td> --}}
                        
                      @endforeach
                    
                      <td>Total</td>
                      <td>Nil</td>
                      <td>{{ $course_counts }}</td>
                      <td>to</td>
                      <td>to</td>
  
                    </tbody>
                    <tfoot>
                      <tr>
                       
    
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Unit</th>
                        <th>Lecturer's Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Print</th>
  
  
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