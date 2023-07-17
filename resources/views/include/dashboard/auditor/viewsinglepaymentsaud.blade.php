@include('dashboard.auditor.header')

  @include('dashboard.auditor.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payments</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> IMFI ICT ACADEMY.
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
               
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
                        <th>Period</th>
                        {{-- <th>Status</th> --}}
                        <th>Amount</th>
                       
                        {{-- <th>Approved</th> --}}
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>{{ $views_payments->student['ref_no'] }}</td>
                        <td>{{ $views_payments->student['surname'] }}</td>

                        <td>{{ $views_payments->student['fname'] }}</td>
                        <td>{{ $views_payments->student['middlename'] }}</td>
                        <td>{{ $views_payments->course_period }}</td>
                        {{-- <td>@if ($views_payments->status == null)
                          <span class="badge badge-secondary"> Pending</span>
                         @elseif($views_payments->status == 'suspend')
                         <span class="badge badge-warning"> Suspended</span>
                         @elseif($views_payments->status == 'reject')
                         <span class="badge badge-danger"> Rejected</span>
                         @elseif($views_payments->status == 'approved')
                         <span class="badge badge-info"> Approved</span>
                         @elseif($views_payments->status == 'admitted')
                         
                         <span class="badge badge-success">Admitted</span>
                         @endif</td> --}}
                         <td>₦ {{ $views_payments->amount }}</td>
                         {{-- <td><a href="{{ url('account/approvedsinglepayments/'.$views_payments->id) }}" class="btn btn-sm btn-success float-left">Approved </a></td> --}}

                         <td>{{ $views_payments->created_at->format('D d, M Y, H:i') }}</td>

                      
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
                        <td>	{{ $views_payments->course_period}}</td>
                      </tr>
                      <tr>
                        <th>Program</th>
                        <td>{{ $views_payments->student['programname']}}</td>
                      </tr>
                      
                      <tr>
                        <th>Semester</th>
                        <td>{{ $views_payments->semester}}</td>
                      </tr>

                      <tr>
                        <th>Reg Number</th>
                        <td>{{ $views_payments->student['regnumber']}}</td>
                      </tr>

                      <tr>
                        <th>Print</th>
                        <td><a href="{{ url('auditor/printsinglepaymentspdfsaud/'.$views_payments->id) }}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              
              </div>
              <!-- /.row -->

             
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('dashboard.auditor.footer')