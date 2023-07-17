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
  
                      @foreach ($view_examsforcerts as $view_examsforcert)
                          @if ($view_examsforcert->registercourse['course_code5'] == 'D1' && $view_examsforcert->registercourse['semester'] == 'First Semester')
                          <tr>
                            <td><a href="viewstudentsexams/{{ $view_examsforcert->student['ref_no'] }}">{{ $view_examsforcert->student['surname'] }}</a></td>
                            <td>{{ $view_examsforcert->student['fname'] }}</td>
                            <td>{{ $view_examsforcert->student['middlename'] }}</td>
                            <td><a href="">{{ $view_examsforcert->registercourse['course_code1'] }}</a></td>
                            <td>{{ $view_examsforcert->registercourse['course_title1'] }}</td>
                            <td>{{ $view_examsforcert->registercourse['credit_unit1'] }}</td>
                            <td>{{ $view_examsforcert->student['programname'] }}</td>
                            <td>{{ $view_examsforcert->registercourse['semester'] }}</td>
                            <td><a href="{{ url('examsunit/viewexam/'.$view_examsforcert->id) }}"
                              class='btn btn-default'>
                              View
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
                <h3 class="card-title">D2 </h3>
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

                    @foreach ($view_examsforcerts as $view_examsforcert)
                        @if ($view_examsforcert->registercourse['course_code5'] == 'D1' && $view_examsforcert->registercourse['semester'] == 'Second Semester')
                        <tr>
                          <td><a href="viewstudentsexams/{{ $view_examsforcert->student['ref_no'] }}">{{ $view_examsforcert->student['surname'] }}</a></td>
                          <td>{{ $view_examsforcert->student['fname'] }}</td>
                          <td>{{ $view_examsforcert->student['middlename'] }}</td>
                          <td><a href="">{{ $view_examsforcert->registercourse['course_code1'] }}</a></td>
                          <td>{{ $view_examsforcert->registercourse['course_title1'] }}</td>
                          <td>{{ $view_examsforcert->registercourse['credit_unit1'] }}</td>
                          <td>{{ $view_examsforcert->student['programname'] }}</td>
                          <td>{{ $view_examsforcert->registercourse['semester'] }}</td>
                          <td><a href="{{ url('examsunit/viewexam/'.$view_examsforcert->id) }}"
                            class='btn btn-default'>
                            View
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
    </div>
  
    

  </div>
    

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://imfiacademy.edu.ng">IMFI ICT</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../assets/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
