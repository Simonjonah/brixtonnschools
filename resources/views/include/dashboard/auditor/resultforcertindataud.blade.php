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
                  <th>Lecturer</th>
                  <th>Program</th>

                  {{-- <th>View</th> --}}
                  
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                  {{-- Certificate in Data Processing --}}
                  @foreach ($get_cetindatapros_results as $get_cetindatapros_result)
                      @if ($get_cetindatapros_result->registercourse['programname'] == 'Certificate in Data Processing')
                      <tr>
                        <td><a href="viewstudents/{{ $get_cetindatapros_result->student['surname'] }}">{{ $get_cetindatapros_result->student['surname'] }}</a></td>
                        <td>{{ $get_cetindatapros_result->student['fname'] }}</td>
                        <td>{{ $get_cetindatapros_result->student['middlename'] }}</td>
                        <td>{{ $get_cetindatapros_result->registercourse['course_code1'] }}</td>
                        <td>{{ $get_cetindatapros_result->registercourse['course_title1'] }}</td>

                        <td>{{ $get_cetindatapros_result->registercourse['credit_unit1'] }}</td>
                        <td><a href="#">{{ $get_cetindatapros_result->lecturer['fname'] }} {{ $get_cetindatapros_result->lecturer['lname'] }}</a></td>
                        <td>{{ $get_cetindatapros_result->registercourse['programname'] }}</td>
                          
                       
                     <td>{{ $get_cetindatapros_result->created_at->format('D d, M Y, H:i')}}</td>

                       
                         

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
                  <th>Lecturer</th>
                  <th>Program</th>

                    {{-- <th>View</th> --}}
                    
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
