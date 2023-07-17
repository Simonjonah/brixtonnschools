<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header text-info" style="text-align: center; margin-bottom: 30px;">
          <i class="fas fa-globe"></i> IMFI ICT ACADEMY, Uyo 
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin, IMFI.</strong><br>
          54 Nsikak Eduok, Uyo <br>
          P.O.Box 1723. Akwa Ibom State<br>
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
            
            <th>Program</th>
            {{-- <th>Course Code</th> --}}
            <th>Course Period</th>
            <th>Course Amount</th>
            <th>Category</th>

            
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($print_professionals as $print_professionals)
                @if ($print_professionals->status == 'approved')
                    <tr>
                        
                        <td>{{ $print_professionals->course_programs }}</td>
                        {{-- <td>{{ $print_professionals->course_code }}</td> --}}
                        <td>{{ $print_professionals->course_period }}</td>
                        <td>{{ $print_professionals->course_amount }}</td>
                        <td>{{ $print_professionals->category }}</td>

                       
                        <td>{!! $print_professionals->status !!}</td>
                    </tr>
                    @else
                @endif
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
