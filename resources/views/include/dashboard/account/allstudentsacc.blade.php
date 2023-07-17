@include('dashboard.account.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.account.sidebar')

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
                    <th>Edit</th>
                    <th>Status</th>
                    
                    <th>Date</th>

                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($allacc_students as $allacc_student)
       
                      <tr>
                        <td>{{ $allacc_student->surname }}</td>
                        <td>{{ $allacc_student->middlename }}</td>
                        <td>{{ $allacc_student->fname }}</td>
                        <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$allacc_student->passpot")}}" alt=""></td>
                        <td><a href="{{ url('account/viewstudentaccount/'.$allacc_student->ref_no) }}"
                            class='btn btn-default'>
                             <i class="far fa-eye"></i>
                         </a></td>
                         <td><a href="{{ url('account/editstudent/'.$allacc_student->id) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                       <td>@if ($allacc_student->status == null)
                        <span class="badge badge-secondary"> In progress</span>
                       @elseif($allacc_student->status == 'suspend')
                       <span class="badge badge-warning"> Suspended</span>
                       @elseif($allacc_student->status == 'reject')
                       <span class="badge badge-danger"> Rejected</span>
                       @elseif($allacc_student->status == 'approved')
                       <span class="badge badge-info"> Approved</span>
                       @elseif($allacc_student->status == 'admitted')
                       
                       <span class="badge badge-success">Admitted</span>
                       @endif</td>
                       

                      
                        
                     <td>{{ $allacc_student->created_at->format('D d, M Y, H:i')}}</td>

                      </tr>
                     
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>Surname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Images</th>
                    <th>View</th>
                    <th>Edit</th>
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
  @include('dashboard.account.footer')