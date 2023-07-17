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
                  
                </tr>
                </thead>
                <tbody>

                  <tr>
                      <td>{{ $findtheresults_student_addscores->student['surname'] }}</td>
                      <td>{{ $findtheresults_student_addscores->student['fname'] }}</td>
                      <td>{{ $findtheresults_student_addscores->student['middlename'] }}</td>
                      <td>{{ $findtheresults_student_addscores->registercourse['course_code1'] }}</td>
                      <td>{{ $findtheresults_student_addscores->registercourse['course_title1'] }}</td>

                      <td>{{ $findtheresults_student_addscores->registercourse['credit_unit1'] }}</td>
                      <td>{{ $findtheresults_student_addscores->registercourse['programname'] }}</td>
                      
                    </tr>
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
