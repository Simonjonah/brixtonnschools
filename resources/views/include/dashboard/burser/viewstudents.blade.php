@include('dashboard.burser.header')
@include('dashboard.burser.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
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
                       src="{{ URL::asset("/public/../$view_singlstudent->passpot")}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view_singlstudent->surname }}, {{ $view_singlstudent->fname }} {{ $view_singlstudent->middlename }}</h3>

                <p class="text-muted text-center"> {{ $view_singlstudent->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Course</b> <a href="" style="text-transform: uppercase" class="float-right">{{ $view_singlstudent->course_title }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Period</b> <a class="float-right">{{ $view_singlstudent->course_period }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>DOB</b> <a class="float-right">{{ $view_singlstudent->dob }}</a>
                  </li>

                  
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">@if ($view_singlstudent->status == null)
                      <span class="badge badge-secondary">Admission In progress</span>
                    @elseif ($view_singlstudent->status == 'rejected')
                    <span class="badge badge-danger">Rejected</span>
                    @elseif ($view_singlstudent->status == 'suspend')
                    <span class="badge badge-warning">Suspended</span>
                    @elseif ($view_singlstudent->status == 'approved')
                    <span class="badge badge-info">Approved</span>
                    @else
                    <span class="badge badge-success">Admitted</span>
                    @endif</a>
                  </li>
                </ul>

                {{-- <a href="couse" class="btn btn-primary btn-block"><b>Register more Courses</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Program</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Student Education Level </strong>

                <p class="text-muted">
                  {{ $view_singlstudent->quali_obtain }}
                  <p>study Area</p>
                  {{ $view_singlstudent->studyarea }} 
                  <p>study Name of School</p>
                  {{ $view_singlstudent->institname }} 
                  <p>Grade Pass</p>
                  {{ $view_singlstudent->gradepass }} 
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Session Applied</strong>

                <p class="text-muted">{{ $view_singlstudent->sessionapplied }} </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{ $view_singlstudent->course_title }}</span>
                  
                </p>
                <strong><i class="fas fa-pencil-alt mr-1"></i> ₦ {{ $view_singlstudent->course_amount }}</strong>
                

                 <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Note:</strong>

                <p class="text-muted">{{ $view_singlstudent->fname }} {{ $view_singlstudent->middlename }} {{ $view_singlstudent->surname }} hereby declare that the information given by me in this form is correct. I understand that if any piece of informatio is false i shall automatically be disqualified</p>
              </div> 
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  {{-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li> --}}
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Bio Data</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Sponsor</a></li>
                  {{-- <li class="nav-item"><a class="nav-link" href="#sponsor" data-toggle="tab">Sponsor</a></li> --}}
                  <li class="nav-item"><a class="nav-link" href="#olevels1" data-toggle="tab">Olevels 1st sitting</a></li>
                  <li class="nav-item"><a class="nav-link" href="#olevels2" data-toggle="tab">Olevels 2nd sitting</a></li>

                  <li class="nav-item"><a class="nav-link" href="#quali" data-toggle="tab">Qualifications</a></li>


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
                          {{ $view_singlstudent->created_at->format('D d, M Y, H:i')}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlstudent->created_at->diffForHumans() }}</span>

                          <h3 class="timeline-header"><a href="mailTo:{{ $view_singlstudent->email }}">Email </a> {{ $view_singlstudent->email }}</h3>
                          <h3 class="timeline-header"><a href="mailTo:{{ $view_singlstudent->nationality }}">Nationality </a> {{ $view_singlstudent->nationality }}</h3>

                          <div class="timeline-body">
                            {{ $view_singlstudent->contactaddress }}
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlstudent->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_singlstudent->phone }}</a>
                          </h3>

                          <h3 class="timeline-header border-0"><a href="#">{{ $view_singlstudent->logalgovt }}</a>
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                         <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $view_singlstudent->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header"><a href="#">State</a> {{ $view_singlstudent->state }}</h3>

                          <div class="timeline-body">
                            I {{ $view_singlstudent->fname }} {{ $view_singlstudent->middlename}} {{ $view_singlstudent->surname}} hereby declare that the information given by me in this form is correct. I understand that if any piece of informatio is false i shall automatically be disqualified
                          </div>
                         
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          {{ $view_singlstudent->created_at->toFormattedDateString() }}
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



                  <div class="tab-pane" id="quali">
                    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  All Qualification submitted by {{ $view_singlstudent->surname }} {{ $view_singlstudent->fname }}
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$view_singlstudent->olevel2")}}?text=1" data-toggle="lightbox" data-title="Olevel first sitting  - white" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$view_singlstudent->olevel2")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$view_singlstudent->olevel")}}?text=1" data-toggle="lightbox" data-title="Olevel second sitting" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$view_singlstudent->olevel")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$view_singlstudent->additionalquali")}}?text=1" data-toggle="lightbox" data-title="Additional Qualifications" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$view_singlstudent->additionalquali")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$view_singlstudent->passpot")}}?text=1" data-toggle="lightbox" data-title="Additional Qualifications" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$view_singlstudent->passpot")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                  </div>

                  









                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      @csrf
                      
                      @method('PUT')

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> Sponsor Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="{{ $view_singlstudent->sponsorname }}" class="form-control" id="inputName" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> Address of Sponsor</label>
                        <div class="col-sm-10">
                          <input type="text" name="lastname" value="{{ $view_singlstudent->sponsoraddress }}" class="form-control" id="inputName" placeholder="Last Name">
                        </div>
                      </div>
                      
                      
                    </form>
                  </div>

                  <div class="tab-pane" id="olevels1">
                  
                     <div class="container">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group row">
                            <label for="inputName">Center Name</label>
                            <div class="col-sm-10">
                              <input type="text" name="name" value="{{ $view_singlstudent->centre_name }}" class="form-control" id="inputName" placeholder="First Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName"> Exam Number</label>
                            <div class="col-sm-10">
                              <input type="text" name="lastname" value="{{ $view_singlstudent->examnumber }}" class="form-control" id="inputName" placeholder="Last Name">
                            </div>
                          </div>
                          
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group row">
                            <label for="inputName"> Year Obtain</label>
                            <div class="col-sm-10">
                              <input type="text" name="name" value="{{ $view_singlstudent->yearobtain }}" class="form-control" id="inputName" placeholder="First Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName"> Qualification Obtain</label>
                            <div class="col-sm-10">
                              <input type="text" name="lastname" value="{{ $view_singlstudent->quali_obtain }}" class="form-control" id="inputName" placeholder="Last Name">
                            </div>
                          </div>
                        </div>

                        <table class="col-lg-12">
                                        
                          <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject1" id="">
                                      <option value="{{ $view_singlstudent->subject1 }}">{{ $view_singlstudent->subject1 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade1" id="">
                                      <option value="{{ $view_singlstudent->grade1 }}">{{ $view_singlstudent->grade1 }}</option>
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject2" id="">
                                      <option value="{{ $view_singlstudent->subject2 }}">{{ $view_singlstudent->subject2 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade2" id="">
                                      <option value="{{ $view_singlstudent->grade2 }}">{{ $view_singlstudent->grade2 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject3" id="">
                                      <option value="{{ $view_singlstudent->subject3 }}">{{ $view_singlstudent->subject3 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade3" id="">
                                      <option value="{{ $view_singlstudent->grade3 }}">{{ $view_singlstudent->grade3 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject4" id="">
                                      <option value="{{ $view_singlstudent->subject4 }}">{{ $view_singlstudent->subject4 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade4" id="">
                                  <option value="{{ $view_singlstudent->grade4 }}">{{ $view_singlstudent->grade4 }}</option>
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject5" id="">
                                      <option value="{{ $view_singlstudent->subject5 }}">{{ $view_singlstudent->subject5 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade5" id="">
                                    <option value="{{ $view_singlstudent->grade5 }}">{{ $view_singlstudent->grade5 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject6" id="">
                                      <option value="{{ $view_singlstudent->subject6 }}">{{ $view_singlstudent->subject6 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade6" id="">
                                      <option value="{{ $view_singlstudent->grade6 }}">{{ $view_singlstudent->grade6 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject7" id="">
                                      <option value="{{ $view_singlstudent->subject7 }}">{{ $view_singlstudent->subject7 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade7" id="">
                                   <option value="{{ $view_singlstudent->grade7 }}">{{ $view_singlstudent->grade7 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject8" id="">
                                      <option value="{{ $view_singlstudent->subject8 }}">{{ $view_singlstudent->subject8 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade8" id="">
                                   <option value="{{ $view_singlstudent->grade8 }}">{{ $view_singlstudent->grade8 }}</option>
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject9" id="">
                                      <option value="{{ $view_singlstudent->subject9 }}">{{ $view_singlstudent->subject9 }}</option>
                                      <option value="Mathematic">Mathematics</option>
                                      <option value="English Language">English Language</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Literature">Literature</option>
                                      <option value="Computer Studies">Computer Studies</option>
                                      <option value="Library Studies">Library Studies</option>
                                      <option value="Physics">Physics</option>
                                      <option value=" Chemistry">Chemistry</option>
                                      <option value="Technical Drawing">Technical Drawin</option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                      <option value="French">French</option>
                                      <option value="Food and Nutrition">Food and Nutrition</option>
                                      <option value="C. R. Studies">C. R. Studies</option>
                                      <option value="Government">Government</option>
                                      <option value="History">History</option>
                                      <option value="Geography  Music">Geography</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                      <option value="Music">Music</option>
                                      <option value="Agricultural Science">Commerce</option>
                                      <option value="Financial Accounting">Financial Accounting</option>
                                      <option value="Commerce ">Commerce </option>
                                      <option value="Agricultural Science">Agricultural Science</option>
                                 </select>
                              </div></th>
                              <th><div class="form-group">
                                  <select class="form-control" name="grade9" id="">
                                   <option value="{{ $view_singlstudent->grade9 }}">{{ $view_singlstudent->grade9 }}</option>
                
                
                                      <option value="A1">A1</option>
                                      <option value="A2">A2</option>
                                      <option value="A3">A3</option>
                                      <option value="B2">B2</option>
                                      <option value="B3">B3</option>
                                      <option value="C4">C4</option>
                                      <option value="C5">C5</option>
                                      <option value="C6">C6</option>
                                      <option value="D7">D7</option>
                                      <option value="F9">F9</option>
                                 </select>
                              </div></th>
                          </tr>
                      </table>
                      </div>

                      
                     </div>







                     
                  </div>
                  <!-- /.tab-pane -->






                  <div class="tab-pane" id="olevels2">
                  
                    <div class="container">
                     <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                         <div class="form-group row">
                           <label for="inputName">Center Name</label>
                           <div class="col-sm-10">
                             <input type="text" name="name" value="{{ $view_singlstudent->centre_name2 }}" class="form-control" id="inputName" placeholder="First Name">
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="inputName"> Exam Number</label>
                           <div class="col-sm-10">
                             <input type="text" name="lastname" value="{{ $view_singlstudent->examnumber2 }}" class="form-control" id="inputName" placeholder="Last Name">
                           </div>
                         </div>
                         
                       </div>

                       <div class="col-lg-6 col-md-6 col-sm-12">
                         <div class="form-group row">
                           <label for="inputName"> Year Obtain</label>
                           <div class="col-sm-10">
                             <input type="text" name="name" value="{{ $view_singlstudent->yearobtain2 }}" class="form-control" id="inputName" placeholder="First Name">
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="inputName"> Qualification Obtain</label>
                           <div class="col-sm-10">
                             <input type="text" name="lastname" value="{{ $view_singlstudent->qualiobtain2 }}" class="form-control" id="inputName" placeholder="Last Name">
                           </div>
                         </div>
                       </div>

                       <table class="col-lg-12">
                                       
                        <tr>
                                               
                          <th><div class="form-group col-12">
                              <select class="form-control" class="form-control" name="subject11" id="">
                                  <option value="{{ $view_singlstudent->subject11 }}">{{ $view_singlstudent->subject11 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade11" id="">
                                  <option value="{{ $view_singlstudent->grade11 }}">{{ $view_singlstudent->grade11 }}</option>
                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>
                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject12" id="">
                                  <option value="{{ $view_singlstudent->subject12 }}">{{ $view_singlstudent->subject12 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade12" id="">
                               <option value="{{ $view_singlstudent->grade12 }}">{{ $view_singlstudent->grade12 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>

                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject13" id="">
                                  <option value="{{ $view_singlstudent->subject13 }}">{{ $view_singlstudent->subject13 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade13" id="">
                               <option value="{{ $view_singlstudent->grade13 }}">{{ $view_singlstudent->grade13 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>
                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject14" id="">
                                  <option value="{{ $view_singlstudent->subject14 }}">{{ $view_singlstudent->subject14 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade14" id="">
                                <option value="{{ $view_singlstudent->grade14 }}">{{ $view_singlstudent->grade14 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>

                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject15" id="">
                                  <option value="{{ $view_singlstudent->subject15 }}">{{ $view_singlstudent->subject15 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade15" id="">
                                 <option value="{{ $view_singlstudent->grade15 }}">{{ $view_singlstudent->grade15 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>
                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject16" id="">
                                  <option value="{{ $view_singlstudent->subject16 }}">{{ $view_singlstudent->subject16 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade16" id="">
                              <option value="{{ $view_singlstudent->grade16 }}">{{ $view_singlstudent->grade16 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>

                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject17" id="">
                                  <option value="{{ $view_singlstudent->subject17 }}">{{ $view_singlstudent->subject17 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade17" id="">
                                <option value="{{ $view_singlstudent->grade17 }}">{{ $view_singlstudent->grade17 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>

                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject18" id="">
                                  <option value="{{ $view_singlstudent->subject18 }}">{{ $view_singlstudent->subject18 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade18" id="">
                                <option value="{{ $view_singlstudent->grade18 }}">{{ $view_singlstudent->grade18 }}</option>

                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>

                      <tr>
                         
                          <th><div class="form-group col-12">
                              <select class="form-control" name="subject19" id="">
                                  <option value="{{ $view_singlstudent->subject19 }}">{{ $view_singlstudent->subject19 }}</option>
                                  <option value="Mathematic">Mathematics</option>
                                  <option value="English Language">English Language</option>
                                  <option value="Biology">Biology</option>
                                  <option value="Economics">Economics</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Computer Studies">Computer Studies</option>
                                  <option value="Library Studies">Library Studies</option>
                                  <option value="Physics">Physics</option>
                                  <option value=" Chemistry">Chemistry</option>
                                  <option value="Technical Drawing">Technical Drawin</option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                                  <option value="French">French</option>
                                  <option value="Food and Nutrition">Food and Nutrition</option>
                                  <option value="C. R. Studies">C. R. Studies</option>
                                  <option value="Government">Government</option>
                                  <option value="History">History</option>
                                  <option value="Geography  Music">Geography</option>
                                  <option value="Fine Arts">Fine Arts</option>
                                  <option value="Music">Music</option>
                                  <option value="Agricultural Science">Commerce</option>
                                  <option value="Financial Accounting">Financial Accounting</option>
                                  <option value="Commerce ">Commerce </option>
                                  <option value="Agricultural Science">Agricultural Science</option>
                             </select>
                          </div></th>
                          <th><div class="form-group col-12">
                              <select class="form-control" name="grade19" id="">
                                  <option value="{{ $view_singlstudent->grade19 }}">{{ $view_singlstudent->grade19 }}</option>


                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="A3">A3</option>
                                  <option value="B2">B2</option>
                                  <option value="B3">B3</option>
                                  <option value="C4">C4</option>
                                  <option value="C5">C5</option>
                                  <option value="C6">C6</option>
                                  <option value="D7">D7</option>
                                  <option value="F9">F9</option>
                             </select>
                          </div></th>
                      </tr>
                </table>
                     </div>
                    </div> 
                 </div>
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
    @include('dashboard.burser.footer')

    

<script src="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

<script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

