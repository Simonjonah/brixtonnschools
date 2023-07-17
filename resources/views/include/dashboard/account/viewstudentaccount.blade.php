@include('dashboard.account.header')
@include('dashboard.account.sidebar')
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
                       src="{{ URL::asset("/public/../$viewallacc_students->passpot")}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $viewallacc_students->surname }}, {{ $viewallacc_students->fname }} {{ $viewallacc_students->middlename }}</h3>

                <p class="text-muted text-center"> {{ $viewallacc_students->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Course</b> <a href="" style="text-transform: uppercase" class="float-right">{{ $viewallacc_students->course_title }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Period</b> <a class="float-right">{{ $viewallacc_students->course_period }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>DOB</b> <a class="float-right">{{ $viewallacc_students->dob }}</a>
                  </li>

                  
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">@if ($viewallacc_students->status == null)
                      <span class="badge badge-secondary">Admission In progress</span>
                    @elseif ($viewallacc_students->status == 'rejected')
                    <span class="badge badge-danger">Rejected</span>
                    @elseif ($viewallacc_students->status == 'suspend')
                    <span class="badge badge-warning">Suspended</span>
                    @elseif ($viewallacc_students->status == 'approved')
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
                  {{ $viewallacc_students->quali_obtain }}
                  <p>study Area</p>
                  {{ $viewallacc_students->studyarea }} 
                  <p>study Name of School</p>
                  {{ $viewallacc_students->institname }} 
                  <p>Grade Pass</p>
                  {{ $viewallacc_students->gradepass }} 
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Session Applied</strong>

                <p class="text-muted">{{ $viewallacc_students->sessionapplied }} </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{ $viewallacc_students->course_title }}</span>
                  
                </p>
                <strong><i class="fas fa-pencil-alt mr-1"></i> ₦ {{ $viewallacc_students->course_amount }}</strong>
                

                 <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Note:</strong>

                <p class="text-muted">{{ $viewallacc_students->fname }} {{ $viewallacc_students->middlename }} {{ $viewallacc_students->surname }} hereby declare that the information given by me in this form is correct. I understand that if any piece of informatio is false i shall automatically be disqualified</p>
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
                          {{ $viewallacc_students->created_at->format('D d, M Y, H:i')}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $viewallacc_students->created_at->diffForHumans() }}</span>

                          <h3 class="timeline-header"><a href="mailTo:{{ $viewallacc_students->email }}">Email </a> {{ $viewallacc_students->email }}</h3>
                          <h3 class="timeline-header"><a href="mailTo:{{ $viewallacc_students->nationality }}">Nationality </a> {{ $viewallacc_students->nationality }}</h3>

                          <div class="timeline-body">
                            {{ $viewallacc_students->contactaddress }}
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $viewallacc_students->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header border-0"><a href="#">{{ $viewallacc_students->phone }}</a>
                          </h3>

                          <h3 class="timeline-header border-0"><a href="#">{{ $viewallacc_students->logalgovt }}</a>
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                         <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{ $viewallacc_students->created_at->diffForHumans()}}</span>

                          <h3 class="timeline-header"><a href="#">State</a> {{ $viewallacc_students->state }}</h3>

                          <div class="timeline-body">
                            I {{ $viewallacc_students->fname }} {{ $viewallacc_students->middlename}} {{ $viewallacc_students->surname}} hereby declare that the information given by me in this form is correct. I understand that if any piece of informatio is false i shall automatically be disqualified
                          </div>
                         
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          {{ $viewallacc_students->created_at->toFormattedDateString() }}
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
                  All Qualification submitted by {{ $viewallacc_students->surname }} {{ $viewallacc_students->fname }}
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$viewallacc_students->olevel2")}}?text=1" data-toggle="lightbox" data-title="Olevel first sitting  - white" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$viewallacc_students->olevel2")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$viewallacc_students->olevel")}}?text=1" data-toggle="lightbox" data-title="Olevel second sitting" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$viewallacc_students->olevel")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$viewallacc_students->additionalquali")}}?text=1" data-toggle="lightbox" data-title="Additional Qualifications" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$viewallacc_students->additionalquali")}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                  <div class="col-sm-2">
                    <a href="{{ URL::asset("/public/../$viewallacc_students->passpot")}}?text=1" data-toggle="lightbox" data-title="Additional Qualifications" data-gallery="gallery">
                      <img src="{{ URL::asset("/public/../$viewallacc_students->passpot")}}" class="img-fluid mb-2" alt="white sample"/>
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
                          <input type="text" name="name" value="{{ $viewallacc_students->sponsorname }}" class="form-control" id="inputName" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> Address of Sponsor</label>
                        <div class="col-sm-10">
                          <input type="text" name="lastname" value="{{ $viewallacc_students->sponsoraddress }}" class="form-control" id="inputName" placeholder="Last Name">
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
                              <input type="text" name="name" value="{{ $viewallacc_students->centre_name }}" class="form-control" id="inputName" placeholder="First Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName"> Exam Number</label>
                            <div class="col-sm-10">
                              <input type="text" name="lastname" value="{{ $viewallacc_students->examnumber }}" class="form-control" id="inputName" placeholder="Last Name">
                            </div>
                          </div>
                          
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group row">
                            <label for="inputName"> Year Obtain</label>
                            <div class="col-sm-10">
                              <input type="text" name="name" value="{{ $viewallacc_students->yearobtain }}" class="form-control" id="inputName" placeholder="First Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName"> Qualification Obtain</label>
                            <div class="col-sm-10">
                              <input type="text" name="lastname" value="{{ $viewallacc_students->quali_obtain }}" class="form-control" id="inputName" placeholder="Last Name">
                            </div>
                          </div>
                        </div>

                        <table class="col-lg-12">
                                        
                          <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                          <tr>
                             
                              <th><div class="form-group">
                                  <select class="form-control" name="subject1" id="">
                                      <option value="{{ $viewallacc_students->subject1 }}">{{ $viewallacc_students->subject1 }}</option>
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
                                      <option value="{{ $viewallacc_students->grade1 }}">{{ $viewallacc_students->grade1 }}</option>
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
                                      <option value="{{ $viewallacc_students->subject2 }}">{{ $viewallacc_students->subject2 }}</option>
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
                                      <option value="{{ $viewallacc_students->grade2 }}">{{ $viewallacc_students->grade2 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject3 }}">{{ $viewallacc_students->subject3 }}</option>
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
                                      <option value="{{ $viewallacc_students->grade3 }}">{{ $viewallacc_students->grade3 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject4 }}">{{ $viewallacc_students->subject4 }}</option>
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
                                  <option value="{{ $viewallacc_students->grade4 }}">{{ $viewallacc_students->grade4 }}</option>
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
                                      <option value="{{ $viewallacc_students->subject5 }}">{{ $viewallacc_students->subject5 }}</option>
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
                                    <option value="{{ $viewallacc_students->grade5 }}">{{ $viewallacc_students->grade5 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject6 }}">{{ $viewallacc_students->subject6 }}</option>
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
                                      <option value="{{ $viewallacc_students->grade6 }}">{{ $viewallacc_students->grade6 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject7 }}">{{ $viewallacc_students->subject7 }}</option>
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
                                   <option value="{{ $viewallacc_students->grade7 }}">{{ $viewallacc_students->grade7 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject8 }}">{{ $viewallacc_students->subject8 }}</option>
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
                                   <option value="{{ $viewallacc_students->grade8 }}">{{ $viewallacc_students->grade8 }}</option>
                
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
                                      <option value="{{ $viewallacc_students->subject9 }}">{{ $viewallacc_students->subject9 }}</option>
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
                                   <option value="{{ $viewallacc_students->grade9 }}">{{ $viewallacc_students->grade9 }}</option>
                
                
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
                             <input type="text" name="name" value="{{ $viewallacc_students->centre_name2 }}" class="form-control" id="inputName" placeholder="First Name">
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="inputName"> Exam Number</label>
                           <div class="col-sm-10">
                             <input type="text" name="lastname" value="{{ $viewallacc_students->examnumber2 }}" class="form-control" id="inputName" placeholder="Last Name">
                           </div>
                         </div>
                         
                       </div>

                       <div class="col-lg-6 col-md-6 col-sm-12">
                         <div class="form-group row">
                           <label for="inputName"> Year Obtain</label>
                           <div class="col-sm-10">
                             <input type="text" name="name" value="{{ $viewallacc_students->yearobtain2 }}" class="form-control" id="inputName" placeholder="First Name">
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="inputName"> Qualification Obtain</label>
                           <div class="col-sm-10">
                             <input type="text" name="lastname" value="{{ $viewallacc_students->qualiobtain2 }}" class="form-control" id="inputName" placeholder="Last Name">
                           </div>
                         </div>
                       </div>

                       <table class="col-lg-12">
                                       
                        <tr>
                                               
                          <th><div class="form-group col-12">
                              <select class="form-control" class="form-control" name="subject11" id="">
                                  <option value="{{ $viewallacc_students->subject11 }}">{{ $viewallacc_students->subject11 }}</option>
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
                                  <option value="{{ $viewallacc_students->grade11 }}">{{ $viewallacc_students->grade11 }}</option>
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
                                  <option value="{{ $viewallacc_students->subject12 }}">{{ $viewallacc_students->subject12 }}</option>
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
                               <option value="{{ $viewallacc_students->grade12 }}">{{ $viewallacc_students->grade12 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject13 }}">{{ $viewallacc_students->subject13 }}</option>
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
                               <option value="{{ $viewallacc_students->grade13 }}">{{ $viewallacc_students->grade13 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject14 }}">{{ $viewallacc_students->subject14 }}</option>
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
                                <option value="{{ $viewallacc_students->grade14 }}">{{ $viewallacc_students->grade14 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject15 }}">{{ $viewallacc_students->subject15 }}</option>
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
                                 <option value="{{ $viewallacc_students->grade15 }}">{{ $viewallacc_students->grade15 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject16 }}">{{ $viewallacc_students->subject16 }}</option>
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
                              <option value="{{ $viewallacc_students->grade16 }}">{{ $viewallacc_students->grade16 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject17 }}">{{ $viewallacc_students->subject17 }}</option>
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
                                <option value="{{ $viewallacc_students->grade17 }}">{{ $viewallacc_students->grade17 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject18 }}">{{ $viewallacc_students->subject18 }}</option>
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
                                <option value="{{ $viewallacc_students->grade18 }}">{{ $viewallacc_students->grade18 }}</option>

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
                                  <option value="{{ $viewallacc_students->subject19 }}">{{ $viewallacc_students->subject19 }}</option>
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
                                  <option value="{{ $viewallacc_students->grade19 }}">{{ $viewallacc_students->grade19 }}</option>


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
    @include('dashboard.account.footer')

    

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

