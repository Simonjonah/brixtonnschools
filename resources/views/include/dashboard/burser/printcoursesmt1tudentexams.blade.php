
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
          {{-- <small class="float-right">Date: {{ $print_programscourse->created_at->format('D d, M Y, H:i')}}</small> --}}
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
            <th>Semester</th>
            <th>Program</th>
            <th>Lecturer Assigned</th>
           
          </tr>
          </thead>
          <tbody>
            @foreach ($displyall_subjectsbys as $displyall_subjectsby)
                {{-- @if ($displyall_subjectsby->semester == 'First Semester') --}}
                <tr>
                    <td>{{ $displyall_subjectsby->course_code1}}</td>
                    <td>{{ $displyall_subjectsby->course_title1 }}</td>
                    <td>{{ $displyall_subjectsby->credit_unit1 }}</td>
                    <td>{{ $displyall_subjectsby->semester }}</td>
                    <td>{{ $displyall_subjectsby->programname }}</td>
                    <td>{{ $displyall_subjectsby->lecturer['fname'] }} {{ $displyall_subjectsby->lecturer['lname'] }}</td>

                </tr>
                {{-- @else
                @endif --}}
          @endforeach

          
          <td>Total</td>
          <td>Nil</td>
          <td>{{ $course_counts }}</td>
          <td>to</td>
          <td>to</td>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
       
        
      </div>
      <!-- /.col -->
      <div class="col-6">
        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
            Second Semester
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Credit Unit</th>
            <th>Semester</th>
            <th>Program</th>
            <th>Lecturer Assigned</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($displyalls_subjectsbys as $displyalls_subjectsby)
                {{-- @if ($displyalls_subjectsby->semester == 'Second Semester') --}}
                <tr>
                    <td>{{ $displyalls_subjectsby->course_code1}}</td>
                    <td>{{ $displyalls_subjectsby->course_title1 }}</td>
                    <td>{{ $displyalls_subjectsby->credit_unit1 }}</td>
                    <td>{{ $displyalls_subjectsby->semester }}</td>
                    <td>{{ $displyalls_subjectsby->programname }}</td>
                    <td>{{ $displyalls_subjectsby->lecturer['fname'] }} {{ $displyalls_subjectsby->lecturer['lname'] }}</td>

                </tr>
                {{-- @else
                @endif --}}
          @endforeach

          
          <td>Total</td>
          <td>Nil</td>
          <td>{{ $course_counts }}</td>
          <td>to</td>
          <td>to</td>
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

        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>




  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
            Third Semester
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Credit Unit</th>
            <th>Semester</th>
            <th>Program</th>
            <th>Lecturer Assigned</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($displyall3s_subjectsbys as $displyall3s_subjectsby)
                {{-- @if ($displyall3s_subjectsby->semester == 'Second Semester') --}}
                <tr>
                    <td>{{ $displyall3s_subjectsby->course_code1}}</td>
                    <td>{{ $displyall3s_subjectsby->course_title1 }}</td>
                    <td>{{ $displyall3s_subjectsby->credit_unit1 }}</td>
                    <td>{{ $displyall3s_subjectsby->semester }}</td>
                    <td>{{ $displyall3s_subjectsby->programname }}</td>
                    <td>{{ $displyall3s_subjectsby->lecturer['fname'] }} {{ $displyall3s_subjectsby->lecturer['lname'] }}</td>

                </tr>
                {{-- @else
                @endif --}}
          @endforeach

          
          <td>Total</td>
          <td>Nil</td>
          <td>{{ $course_count3 }}</td>
          <td>to</td>
          <td>to</td>
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
