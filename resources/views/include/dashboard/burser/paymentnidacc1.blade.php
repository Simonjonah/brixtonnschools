

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->
@include('dashboard.burser.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Programs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User All Programs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                                <th>Student ID</th>
                                <th>Surname</th>
                                <th>First Name</th>
                                <th>Middlename</th>
                                <th>Period</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>View</th>
                                <th>Approved</th>
                                <th>Date</th>
                              </tr>
                        </thead>
                        <tbody>
      
                          @foreach ($display_d1fees as $display_d1fee)
                          <tr>
                        <td><a href="viewstudentaccount/{{ $display_d1fee->ref_no }}" target="_blank" rel="noopener noreferrer"> {{ $display_d1fee->ref_no }}</a></td>

                              <td>{{ $display_d1fee->fname }}</td>
                              <td>{{ $display_d1fee->middlename }}</td>
                              <td> {{ $display_d1fee->surname }}</td>
                              <td> {{ $display_d1fee->course_period }}</td>
                              <td>@if ($display_d1fee->status == null)
                                <span class="badge badge-secondary"> Pending</span>
                               @elseif($display_d1fee->status == 'suspend')
                               <span class="badge badge-warning"> Suspended</span>
                               @elseif($display_d1fee->status == 'confirm')
                               <span class="badge badge-success"> Confirmed</span>
                               @elseif($display_d1fee->status == 'approved')
                               <span class="badge badge-info"> Approved</span>
                               @elseif($display_d1fee->status == 'admitted')
                               
                               <span class="badge badge-success">Admitted</span>
                               @endif</td>
                              <td> ₦ {{ $display_d1fee->amount }}</td>

                               <td><a href="viewsinglepayments/{{ $display_d1fee->id }}" class="btn btn-sm btn-primary float-left">View </a></td>
                               {{-- <td><a href="allthestudents" class="btn btn-sm btn-success float-left">Approved </a></td> --}}
                               <td><a href="{{ url('burser/approvedsinglepayments/'.$display_d1fee->id) }}" class="btn btn-sm btn-success float-left">Approved </a></td>
                               {{-- <td><a href="allthestudents" class="btn btn-sm btn-success float-left">View </a></td> --}}
                               <td>{{ $display_d1fee->created_at->format('D d, M Y, H:i') }}</td>
      
      
                            </tr>
                          @endforeach
                       
                       
                         
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Student ID</th>
                                <th>Surname</th>
                                <th>First Name</th>
                                <th>Middlename</th>
                                <th>Period</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>View</th>
                                <th>Approved</th>
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
    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2022 <a href="https://imfiacademy.edu.ng">Imfi</a>.</strong> All rights
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
