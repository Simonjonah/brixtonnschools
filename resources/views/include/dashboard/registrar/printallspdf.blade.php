
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
  <style>
    /* .watermark{
      background-image: url('../assets/dist/img/AdminLTELogo.jpg');
      background-position: center; 
      background-repeat: no-repeat;
    } */

  .break-after {
    page-break-after: always;
  }

  #watermark {
    flow: static(watermarkflow);
    font-size: 120px;
    opacity: 0.5;
    transform: rotate(-30deg);
    text-align: center;
  }

  @page {
     @prince-overlay {
        content: flow(watermarkflow)
     }
  }
  </style>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
          <h4>
            <img style="width: 100px; height: 100px;" src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt=""> IMFI ICT ACADEMY
            <small class="float-right"> <img style="width: 100px; height: 100px;" src="{{ asset('/public/../'.Auth::guard('student')->user()->passpot)}}" class="" alt="User Image"></small>
          </h4>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          
          <address>
            <strong>IMFI ICT ACADEMY</strong><br>
            54 Nsikak Eduok Avenue,<br>
            Uyo, Akwa Ibom State<br>
            Phone: 08167930965<br>
            Email: info@imfiacademy.edu.ng
          </address>
        </div>
      <!-- /.col -->
      
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
            @foreach ($printadmitteds_students as $printadmitteds_student)
            <tr>
                <td>{{ $printadmitteds_student->surname }}</td>
                <td>{{ $printadmitteds_student->fname }}</td>
                <td>{{ $printadmitteds_student->middlename }}</td>
                <td>{{ $printadmitteds_student->email }}</td>
                <td>{{ $printadmitteds_student->phone }}</td>
                <td>{{ $printadmitteds_student->course_title }}</td>
                <td>{{ $printadmitteds_student->gender }}</td>

                </tr>
            @endforeach
          </tbody>
        </table>

        {{-- <img src="{{ asset('assets/dist/img/signature.png') }}" alt=""> --}}

      </div>
      <div id="watermark">IMFI ICT ACADEMY</div>

      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      
      <!-- /.col -->
      
      
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
