

@include('dashboard.auditor.header')
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
                      <th>Student ID</th>
                      <th>Surname</th>
                      <th>First Name</th>
                      <th>Middlename</th>
                      <th>Period</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>View</th>
                      {{-- <th>Approved</th> --}}
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($display_schs as $display_sch)
                      
                      <tr>
                        <td>{{ $display_sch->ref_no }}</td>
                        <td>{{ $display_sch->surname }}</td>

                        <td>{{ $display_sch->fname }}</td>
                        <td>{{ $display_sch->middlename }}</td>
                        <td>{{ $display_sch->course_period }}</td>
                        <td>@if ($display_sch->status == null)
                          <span class="badge badge-secondary"> Pending</span>
                         @elseif($display_sch->status == 'suspend')
                         <span class="badge badge-warning"> Suspended</span>
                         @elseif($display_sch->status == 'confirm')
                         <span class="badge badge-success"> Confirmed</span>
                         @elseif($display_sch->status == 'approved')
                         <span class="badge badge-info"> Approved</span>
                         @elseif($display_sch->status == 'admitted')
                         
                         <span class="badge badge-success">Admitted</span>
                         @endif</td>
                         <td>₦ {{ $display_sch->amount }}</td>
                         <td><a href="viewsinglepaymentsaud/{{ $display_sch->id }}" class="btn btn-sm btn-primary float-left">View </a></td>
                         {{-- <td><a href="allthestudents" class="btn btn-sm btn-success float-left">Approved </a></td> --}}
                         {{-- <td><a href="{{ url('auditor/approvedsinglepayments/'.$display_sch->id) }}" class="btn btn-sm btn-success float-left">Approved </a></td> --}}
                         {{-- <td><a href="allthestudents" class="btn btn-sm btn-success float-left">View </a></td> --}}
                         <td>{{ $display_sch->created_at->format('D d, M Y, H:i') }}</td>


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
                      {{-- <th>Approved</th> --}}
                      <th>Date</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="row no-print">
                <div class="col-12">
                  <a href="{{ url('auditor/printsinglepaymentspdfaud') }}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print All</a>
                 
                </div>
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
  <!-- /.content-wrapper -->
  
  @include('dashboard.auditor.footer')








