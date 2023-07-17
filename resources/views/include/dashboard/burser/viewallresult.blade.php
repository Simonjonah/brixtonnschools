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
                    <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Name</th>

                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credit Unit</th>
                      <th>Test</th>
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <th>Scale</th>
                      
  
                    </tr>
                    </thead>
                    <tbody>
                      @php
                        $total_score = 0;
                        $total_credit_hour = 0;
                        
  
  
                        $getyour_resultscale = 5;
                        $getyour_resultscale2 = 4;
                        $getyour_resultscale3 = 3;
                        $getyour_resultscale4 = 2;
                        $getyour_resultscale5 = 0;
                      @endphp
                    @foreach ($getyour_results as $getyour_result)
                        @if ($getyour_result->status == 'gen' && $getyour_result->semester == 'First Semester' && $getyour_result->programname == 'NID Computer Software Engineering Technology' )
                        @php
                          $total_score +=$getyour_result->test + $getyour_result->exams;
                        
                          if ($getyour_result->test + $getyour_result->exams > 69) {
                            $total_credit_hour +=$getyour_resultscale * $getyour_result->credit_unit;
                          }else if($getyour_result->test + $getyour_result->exams > 59) {
                            $total_credit_hour +=$getyour_resultscale2 * $getyour_result->credit_unit;
  
                          }else if($getyour_result->test + $getyour_result->exams > 49) {
                            $total_credit_hour +=$getyour_resultscale3 * $getyour_result->credit_unit;
  
                          }else if($getyour_result->test + $getyour_result->exams > 44) {
                            $total_credit_hour +=$getyour_resultscale4 * $getyour_result->credit_unit;
                          }else if($getyour_result->test + $getyour_result->exams > 40) {
                            $total_credit_hour +=$getyour_resultscale4 * $getyour_result->credit_unit;
                          }else if($getyour_result->test + $getyour_result->exams > 39) {
                            $total_credit_hour +=$getyour_resultscale5 * $getyour_result->credit_unit;
                          }
                        @endphp
                        <tr>
                            <td>{{ $getyour_result->student['fname'] }} {{ $getyour_result->student['surname'] }}</td>

                            <td>{{ $getyour_result->course_code }}</td>
                            <td>{{ $getyour_result->course_title }}</td>
                            <td>{{ $getyour_result->credit_unit }}</td>
                            <td>{{ $getyour_result->test }}</td>
                            <td>{{ $getyour_result->exams }}</td>
                            {{-- <td>{{ $getyour_result->semester }}</td> --}}
                            <td>{{ $getyour_result->test + $getyour_result->exams }}</td>
                          
                            
                            <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                              <p>A</p>
                             
                              @elseif ($getyour_result->test + $getyour_result->exams > 59)
                              <p>B</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 49)
                              <p>c</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 44)
                              <p>D</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 40)
                              <p>E</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 39)
                              <p>F</p>
                              @else
                              <p>F</p>
                            @endif</td>
  
                            <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                              <p>{{ $getyour_resultscale }} </p>
                             
                              @elseif ($getyour_result->test + $getyour_result->exams > 59)
                              <p>{{ $getyour_resultscale2 }}</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 49)
                              <p>{{ $getyour_resultscale3 }}</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 44)
                              <p>{{ $getyour_resultscale4 }}</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 40)
                              <p>{{ $getyour_resultscale4 }}</p>
                              @elseif ($getyour_result->test + $getyour_result->exams > 39)
                              <p>{{ $getyour_resultscale4 }}</p>
                              @else
                              <p>{{ $getyour_resultscale5 }}</p>
                            @endif</td>
  
                          
                    
                          </tr> 
                          {{-- <td> {{ $total_credit_unit/$total_credit_hour}} </td> --}}
                        @else
                        @endif
  
                    @endforeach
                  
                
                    <td> <b>CGP {{ $total_credit_hour/$total_credit_unit }}</b></td>
                          {{-- <td>{{ $total_score }}</td> --}}
                          <td>{{ $total_credit_hour }}</td>
                          <td>total credit unit {{ $total_credit_unit }}</td>
                          {{-- <td>{{ round($total_credit_unit/$total_credit_hour)  }}</td> --}}
                    </tbody>
  
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
