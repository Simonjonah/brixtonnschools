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
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Images</th>
                    <th>View</th>
                    
                    <th>Status</th>
                   
                    <th>Date</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($viewall_studentapprovedauds as $viewall_studentapprovedaud)
                      @if ($viewall_studentapprovedaud->status == 'approved')
                      <tr>
                        <td>{{ $viewall_studentapprovedaud->surname }}</td>
                        <td>{{ $viewall_studentapprovedaud->middlename }}</td>
                        <td>{{ $viewall_studentapprovedaud->fname }}</td>
                        <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$viewall_studentapprovedaud->passpot")}}" alt=""></td>
                        <td><a href="{{ url('auditor/viewstudentaccountaud/'.$viewall_studentapprovedaud->ref_no) }}"
                          class='btn btn-default'>
                           <i class="far fa-eye"></i>
                       </a></td>
                       
                       <td>@if ($viewall_studentapprovedaud->status == null)
                        <span class="badge badge-secondary"> In progress</span>
                       @elseif($viewall_studentapprovedaud->status == 'suspend')
                       <span class="badge badge-warning"> Suspended</span>
                       @elseif($viewall_studentapprovedaud->status == 'reject')
                       <span class="badge badge-danger"> Rejected</span>
                       @elseif($viewall_studentapprovedaud->status == 'approved')
                       <span class="badge badge-info"> Approved</span>
                       @elseif($viewall_studentapprovedaud->status == 'admitted')
                       
                       <span class="badge badge-success">Admitted</span>
                       @endif</td>
                       

                       
                        
                     <td>{{ $viewall_studentapprovedaud->created_at->format('D d, M Y, H:i')}}</td>

                      </tr>
                      @else
                        
                      @endif
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Images</th>
                    <th>View</th>
                    
                    <th>Status</th>
                   
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
  <!-- /.content-wrapper -->
  
  @include('dashboard.auditor.footer')
