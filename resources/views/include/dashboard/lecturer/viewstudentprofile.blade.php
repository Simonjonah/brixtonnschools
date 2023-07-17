@include('dashboard.lecturer.header')
@include('dashboard.lecturer.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile of <span style="color: blue">{{ $view_studentbylecturers->surname }} {{ $view_studentbylecturers->fname }}</span></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                       src="{{ asset('/public/../'.$view_studentbylecturers->passpot)}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view_studentbylecturers->fname }}  {{ $view_studentbylecturers->lname }}</h3>

                <p class="text-muted text-center"> {{ $view_studentbylecturers->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Date Admitted</b> <a class="float-right">{{ $view_studentbylecturers->created_at->toFormattedDateString()}}</a>
                  </li>
                 
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
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
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Personal Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Personal Information</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          {{ $view_studentbylecturers->created_at->format('D d, M Y, H:i')}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_studentbylecturers->created_at->diffForHumans() }}</span>

                          <h3 class="timeline-header"><a href="#">Email</a> {{ $view_studentbylecturers->email }}</h3>

                          <div class="timeline-body">
                            {{ $view_studentbylecturers->address }}
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_studentbylecturers->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_studentbylecturers->phone }}</a> {{ $view_studentbylecturers->phone }}
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        {{-- <i class="fas fa-comments bg-warning"></i> --}}

                        {{-- <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div> --}}
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          {{ $view_studentbylecturers->created_at->toFormattedDateString() }}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    {{-- <form class="form-horizontal" action="{{ url('lecturer/lecturerupdate/'.$view_studentbylecturers->ref_no ) }}" method="post" enctype="multipart/form-data"> --}}
                      @csrf
                      
                      @method('PUT')
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> Sur Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="lname" value="{{ $view_studentbylecturers->surname }}" class="form-control" id="inputName" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> First Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="fname" value="{{ $view_studentbylecturers->fname }}" class="form-control" id="inputName" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> MiddleName</label>
                        <div class="col-sm-10">
                          <input type="text" name="lname" value="{{ $view_studentbylecturers->middlename }}" class="form-control" id="inputName" placeholder="Last Name">
                        </div>
                      </div>
                      
                      {{-- <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="{{ $view_studentbylecturers->email }}" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div> --}}
                      {{-- <div class="form-group row">
                        <label for="inputName2" value="{{ $view_studentbylecturers->address }}" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ $view_studentbylecturers->address }}" name="address" id="inputName2" placeholder="Address">
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
                          <input type="number" name="phone" value="{{ $view_studentbylecturers->phone }}" class="form-control" id="inputSkills" placeholder="Phone">
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
                          {{-- <button type="submit" class="btn btn-danger">Submit</button> --}}
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
 </div>
    @include('dashboard.lecturer.footer')