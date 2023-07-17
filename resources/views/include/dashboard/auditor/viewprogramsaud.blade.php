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
                    <th>Title</th>
                    <th>Code</th>
                    <th>Period</th>
                    <th>Slug</th>
                    
                    <th>Images</th>
                    <th>Amount</th>
                    <th>Status</th>
                    
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($all_programmes as $all_programme)
                    <tr>
                        <td>{{ $all_programme->course_programs }}</td>
                        <td>{{ $all_programme->course_code }}</td>
                        <td>{{ $all_programme->course_period }}</td>
                        <td> {{ $all_programme->slug }}</td>
                        
                        <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                          src="{{ URL::asset("/public/../$all_programme->courseimages")}}"
                          alt="User profile picture"></td>
                          <td> ₦ {{ $all_programme->course_amount }}</td>
                        
                          
                        <td>@if ($all_programme->status == null)
                          <span class="badge badge-secondary"> In progress</span>
                         @elseif($all_programme->status == 'suspended')
                         <span class="badge badge-warning"> Suspended</span>
                         @else
                         <span class="badge badge-success">Approved</span>
                         @endif</td>

                       
                     <td>{{ $all_programme->created_at->format('D d, M Y, H:i')}}</td>
                     {{-- <td><a href="{{ url('admin/downloadcourse/'.$all_programme->slug) }}" class="btn btn-success"><i class="fas fa-print"></i></a></td> --}}

                      </tr>
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Code</th>
                      <th>Period</th>
                      <th>Slug</th>
                      <th>Images</th>
                      <th>Amount</th>
  
                    
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
