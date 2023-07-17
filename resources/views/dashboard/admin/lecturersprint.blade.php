
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
        <h2 class="page-header text-center text-info">
            <img style="float: left" src="{{ asset('assets/dist/img/AdminLTELogo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
            style="opacity: .8"> IMFI ICT ACADEMY, <br>
            54 Nsikak Eduok Avenue, Uyo, <br>
            Akwa Ibom State, Nigeria

          
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img style="width: 100%; height: 200px;" class="profile-user-img img-fluid"
                     src="{{ asset('/public/../'.$view_andapprove_lecturers->images)}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $view_andapprove_lecturers->fname }}  {{ $view_andapprove_lecturers->lname }}</h3>

              <p class="text-muted text-center"> {{ $view_andapprove_lecturers->email }}</p>

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                {{-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Bio Data</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Set Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#sponsor" data-toggle="tab">Sponsor</a></li>
                <li class="nav-item"><a class="nav-link" href="#quali" data-toggle="tab">Qualifications</a></li> --}}

              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form class="form-horizontal" action="{{ url('admin/settingsupdate/'.$view_andapprove_lecturers->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                  @method('PUT')

                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label"> First Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="fname" value="{{ $view_andapprove_lecturers->fname }}" class="form-control" id="inputName" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label"> Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="lname" value="{{ $view_andapprove_lecturers->lname }}" class="form-control" id="inputName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" value="{{ $view_andapprove_lecturers->email }}" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label for="inputName2" value="{{ $view_andapprove_lecturers->phone }}" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{ $view_andapprove_lecturers->phone }}" name="phone" id="inputName2" placeholder="phone">
                    </div>
                  </div> --}}
                  {{-- <img class="image rounded-circle" src="{{ asset('/public/../'.$view_andapprove_lecturers->profileimage)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; "> --}}

                  {{-- <div class="form-group row">
                    <label for="inputName2" value="{{ $view_andapprove_lecturers->profileimage }}" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="profileimage" id="inputName2" placeholder="profileimage">
                    </div>
                  </div> --}}
                  {{-- <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div> --}}
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="number" name="phone" value="{{ $view_andapprove_lecturers->phone }}" class="form-control" id="inputSkills" placeholder="Phone">
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div> --}}
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      {{-- <a class="btn btn-primary" href="../lecturersprint/{{ $view_andapprove_lecturers->ref_no }}">Print</a> --}}
                      {{-- <button type="submit" class="btn btn-danger">Submit</button> --}}
                    </div>
                  </div>
                </form>
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
