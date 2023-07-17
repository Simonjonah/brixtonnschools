
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
          {{-- <small class="float-right">Date: {{ $printall_payment->created_at->format('D d, M Y, H:i')}}</small> --}}
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
              <th>Program</th>
              <th>Semester</th>
              <th>Date</th>

             
            </tr>
          </thead>
          <tbody>
            @foreach ($printall_payments as $printall_payment)
            <tr>
                <td>{{ $printall_payment->student['ref_no']}}</td>
                <td>{{ $printall_payment->student['surname']}}</td>
    
                <td>{{ $printall_payment->student_firstname}}</td>
                <td>{{ $printall_payment->student_middlename }}</td>
                <td>{{ $printall_payment->student_regnumber }}</td>
                <td>{{ $printall_payment->course_period }}</td>
                <td>@if ($printall_payment->status == null)
                  <span class="badge badge-secondary"> Pending</span>
                 @elseif($printall_payment->status == 'suspend')
                 <span class="badge badge-warning"> Suspended</span>
                 @elseif($printall_payment->status == 'reject')
                 <span class="badge badge-danger"> Rejected</span>
                 @elseif($printall_payment->status == 'approved')
                 <span class="badge badge-info"> Approved</span>
                 @elseif($printall_payment->status == 'admitted')
                 
                 <span class="badge badge-success">Admitted</span>
                 @endif</td>
                <td>₦ {{ $printall_payment->course_amount }}</td>
                <td> {{ $printall_payment->course_programs }}</td>
                <td> {{ $printall_payment->semester }}</td>
                <td>{{ $printall_payment->created_at->format('D d, M Y, H:i') }}</td>
              </tr>
            @endforeach
          
          
          </tbody>
        </table>
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
