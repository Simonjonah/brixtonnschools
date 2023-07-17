
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
          {{-- <small class="float-right">Date: {{ $print_payments->created_at->format('D d, M Y, H:i')}}</small> --}}
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
      <div class="col-sm-4 invoice-col">
        <b>Details </b><br>
        <br>
        <b> ID:</b> {{ Auth::guard('student')->user()->ref_no }}<br>
        <b>Reg Number</b> {{ Auth::guard('student')->user()->regnumber }}<br>
        <b>Program:</b> {{ Auth::guard('student')->user()->programname }}<br>
        <b>Period</b> {{ Auth::guard('student')->user()->course_period }}<br>
        <b>Gender</b> {{ Auth::guard('student')->user()->gender }}<br>


      </div>
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
            <th>Surname</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Reg Number</th>

            <th>Course Code</th>
            <th>Course Title</th>
            <th>Credit Unit</th>
            <th>Program Name</th>
            <th>Semester</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($printyour_courses as $printyour_course)
            @if ($printyour_course->registercourse['course_code5'] == 'NID' && $printyour_course->registercourse['semester'] == 'First Semester' && $printyour_course->student['programname'] == 'NID Computer Software Engineering Technology')
            <tr>
              <td>{{ $printyour_course->student['surname'] }} </td>
              <td>{{ $printyour_course->student['fname'] }} </td>
              <td>{{ $printyour_course->student['middlename'] }} </td>
              <td>{{ $printyour_course->student['regnumber'] }} </td>

              <td>{{ $printyour_course->registercourse['course_code1'] }} </td>
              <td>{{ $printyour_course->registercourse['course_title1'] }} </td>
              <td>{{ $printyour_course->registercourse['credit_unit1'] }} </td>
              <td>{{ $printyour_course->student['programname'] }} </td>
              <td>{{ $printyour_course->registercourse['semester'] }} </td>

             
            </tr>
            @else
            @endif

          @endforeach
          <th>Nil</th>
          <th>Nil</th>
          <th>Nil</th>
          <th>Nil</th>
          <th>Nil</th>
          <th>Nil</th>

          <th>{{ $course_counts }}</th>
          <th>Nil</th>

          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
  
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
