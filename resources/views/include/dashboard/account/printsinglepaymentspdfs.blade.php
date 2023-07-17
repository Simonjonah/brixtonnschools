
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('assets/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> IMFI ICT ACADEMY
          <small class="float-right">Date: {{ $printsingle_payments->created_at->format('D d, M Y, H:i')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>IMFI ICT ACADEMY.</strong><br>
          54 Nsikak Eduok, Uyo<br>
          Akwa Ibom State, Nigeria<br>
          Phone: (+234) 802 823 7116<br>
          Email: info@info@imfiacademy.edu.ng
        
        </address>
      </div>
      <!-- /.col -->
      {{-- <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div> --}}
      <!-- /.col -->
      {{-- <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div> --}}
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Surname</th>
              <th>First Name</th>
              <th>Middlename</th>
              <th>Reg Number</th>

              <th>Period</th>
              <th>Status</th>
              <th>Amount</th>
             
            </tr>
          </thead>
          <tbody>
          <tr>
            <td>{{ $printsingle_payments->student['ref_no']}}</td>
            <td>{{ $printsingle_payments->student['surname']}}</td>

            <td>{{ $printsingle_payments->student_firstname}}</td>
            <td>{{ $printsingle_payments->student_middlename }}</td>
            <td>{{ $printsingle_payments->student_regnumber }}</td>
            <td>{{ $printsingle_payments->course_period }}</td>
            <td>@if ($printsingle_payments->status == null)
              <span class="badge badge-secondary"> Pending</span>
             @elseif($printsingle_payments->status == 'suspend')
             <span class="badge badge-warning"> Suspended</span>
             @elseif($printsingle_payments->status == 'reject')
             <span class="badge badge-danger"> Rejected</span>
             @elseif($printsingle_payments->status == 'approved')
             <span class="badge badge-info"> Approved</span>
             @elseif($printsingle_payments->status == 'admitted')
             
             <span class="badge badge-success">Admitted</span>
             @endif</td>
            <td>₦ {{ $printsingle_payments->course_amount }}</td>
          </tr>
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
       
        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          This online Receipt does not reguire signature
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Course Period:</th>
              <td>	{{ $printsingle_payments->course_period}}</td>
            </tr>
            <tr>
              <th>Program</th>
              <td>{{ $printsingle_payments->course_programs}}</td>
            </tr>
            <tr>
              <th>Semester</th>
              <td>{{ $printsingle_payments->semester}}</td>
            </tr>
    
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
