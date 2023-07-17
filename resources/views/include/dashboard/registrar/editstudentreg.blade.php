@include('dashboard.registrar.header')

  @include('dashboard.registrar.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Student </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="contact-us-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form form-style-2">
                        <div class="section-title">
                            <h4 class="title"></h4>
                        </div>
                        <form action="{{ url('registrar/updatestudentreg/'.$edit_singlstudents->ref_no) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                                </div>
                            @endif

                            @method('PUT')

                            <div class="row row--10">

                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="surname" id="contact-name"  @error('surname')
                                    @enderror value="{{ $edit_singlstudents->surname }}" placeholder="Surname">
                                </div>
                                @error('surname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-12">
                                    <input class="form-control" type="text"  @error('fname')
                                    @enderror value="{{ $edit_singlstudents->fname }}" name="fname" id="contact-name" placeholder="Firstname">
                                </div>
                                @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="middlename" @error('middlename')
                                    @enderror value="{{ $edit_singlstudents->middlename }}" id="contact-name" placeholder="Middlename">
                                </div>
                                @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-12">
                                    <input class="form-control" type="email" @error('email')
                                    @enderror value="{{ $edit_singlstudents->email }}" name="email" id="contact-email" placeholder="Enter your email">
                                </div>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                                <div class="form-group col-12">
                                    <input class="form-control" type="tel"  @error('phone')
                                    @enderror value="{{ $edit_singlstudents->phone }}" name="phone" id="contact-phone" placeholder="Phone number">
                                </div>
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group col-12">
                                    <input type="text" class="form-control"  @error('state')
                                    @enderror value="{{ $edit_singlstudents->state }}" name="state" id="contact-phone" placeholder="State">
                                    {{-- <textarea name="contact-message" id="contact-message" cols="30" rows="4" placeholder="Your message"></textarea> --}}
                                </div>
                                @error('state')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 

                                <div class="form-group col-12">
                                    <input type="text" class="form-control"
                                     @error('logalgovt') @enderror value="{{ $edit_singlstudents->logalgovt }}"  name="logalgovt" id="contact-phone" placeholder="LGA">
                                </div>
                                @error('logalgovt')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 

                                <div class="form-group col-12">
                                    <input type="text" class="form-control" @error('nationality') @enderror 
                                    value="{{ $edit_singlstudents->nationality }}" name="nationality" id="contact-phone" placeholder="Nationality">
                                </div>
                                @error('nationality')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 

                                <div class="form-group col-12">
                                    <input type="text" class="form-control" @error('contactaddress')
                                    @enderror value="{{ $edit_singlstudents->contactaddress }}" name="contactaddress" id="contact-phone" placeholder="Contact Address">
                                </div>
                                @error('contactaddress')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 

                                <div class="form-group col-12">
                                    <input type="text" class="form-control" @error('permanentaddress')
                                    @enderror value="{{ $edit_singlstudents->permanentaddress }}" name="permanentaddress" id="contact-phone" placeholder="Permanent Address">
                                </div>
                                @error('permanentaddress')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-12">
                                    <input type="text" value="{{ $edit_singlstudents->sponsorname }}" class="form-control" name="sponsorname"  id="contact-phone" placeholder="Sponsor Name">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" value="{{ $edit_singlstudents->sponsoraddress }}" class="form-control" name="sponsoraddress" id="contact-phone" placeholder="Address of Sponsor">
                                </div>
                               
                                <div class="form-group col-12">
                                    <select value="{{ $edit_singlstudents->sessionapplied }}" class="form-control" name="sessionapplied" @error('sessionapplied')
                                    @enderror value="{{ $edit_singlstudents->sessionapplied }}" id="">
                                        <option value="{{ $edit_singlstudents->sessionapplied }}">{{ $edit_singlstudents->sessionapplied }}</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                                @error('sessionapplied')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <h4>Additional Qualification (OND, HND, B.sc, NCE etc )</h4>
                                
                                <div class="form-group col-12">
                                    <table>
                                        <tr>
                                            <th><div class="form-group col-12">
                                                <input type="text" value="{{ $edit_singlstudents->studyarea }}" class="form-control" name="studyarea" id="contact-phone" placeholder="Specify Area">
                                            </div></th>
                                        <th><div class="form-group col-12">
                                            <input type="text" name="institname" value="{{ $edit_singlstudents->institname }}" class="form-control" id="contact-phone" placeholder="Name of Institution">
                                        </div></th>
                                          
                                        </tr>
                                        <tr>
                                            <th><div class="form-group col-12">
                                                <input type="text"  name="studyear" value="{{ $edit_singlstudents->studyear }}" class="form-control" id="contact-phone" placeholder="Year">
                                            </div></th>
                                            <th><div class="form-group col-12">
                                                <input type="text" name="gradepass" value="{{ $edit_singlstudents->gradepass }}" class="form-control" id="contact-phone" placeholder="Grade of Pass">
                                            </div></th>
                                        </tr>
                                
                                      </table>

                                      <div class="form-group col-12">
                                      <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$edit_singlstudents->additionalquali")}}" alt="">

                                        <h3 for="">Uplaod Certificate here</h3>
                                        <input type="file" name="additionalquali" value="{{ $edit_singlstudents->additionalquali }}" class="form-control" id="contact-phone" placeholder="Nationality">
                                    </div>

                                    <div class="form-group col-12">
                                      <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$edit_singlstudents->passpot")}}" alt="">
                                        <h3 for="">Uplaod Passport here</h3>
                                        <input type="file" class="form-control" name="passpot" value="{{ $edit_singlstudents->passpot }}" id="contact-phone" placeholder="Nationality">
                                    </div>

                                    <div class="form-group col-12">
                                        <table>
                                            <tr>
                                                <th><div class="form-group col-12">
                                                  
                                                 <select class="form-control" name="quali_obtain" id="">
                                                    <option value="{{ $edit_singlstudents->quali_obtain }}">{{ $edit_singlstudents->quali_obtain }}</option>
                                                      <option value="WAEC">WAEC</option>
                                                      <option value="NECO">NECO</option>
                                                      <option value="GCE">GCE</option>
                                                      <option value="EQUIVALENT">EQUIVALENT</option>
                                                 </select>
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <input type="text" class="form-control" value="{{ $edit_singlstudents->examnumber }}"
                                                   name="examnumber" id="contact-phone" placeholder="Examination Number">
                                              </div></th>
                                                
                                              </tr>
                                              <tr>
                                                  <th><div class="form-group col-12">
                                                      <input type="text" value="{{ $edit_singlstudents->centre_name }}" name="centre_name" id="contact-phone" class="form-control" placeholder="Centre Name">
                                                  </div></th>
                                                  <th><div class="form-group col-12">
                                                      <input type="text" value="{{ $edit_singlstudents->yearobtain }}" class="form-control" name="yearobtain" id="contact-phone" placeholder="Month/Year Obtain">
                                                  </div></th>
                                              </tr>
                                        </table>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="dateofbob">Date of Birth</label>
                                        <input class="form-control" type="date"  @error('dob')
                                        @enderror value="{{ $edit_singlstudents->dob }}" name="dob" placeholder="dob" required>
                                    </div>
                                    @error('dob')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                       
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form form-style-2">
                        <div class="section-title">
                            <h4 class="title"></h4>
                        </div>
                        
                            <div class="row row--10">
                                <div class="form-group col-12">
                                    <table>
                                        
                                        <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                                        <tr>
                                           
                                            <th><div class="form-group col-12">
                                                <select class="form-control" name="subject1" id="">
                                                    <option value="{{ $edit_singlstudents->subject1 }}">{{ $edit_singlstudents->subject1 }}</option>
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
                                                <select class="form-control" name="grade1" id="">
                                                    <option value="{{ $edit_singlstudents->grade1 }}">{{ $edit_singlstudents->grade1 }}</option>
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
                                                <select class="form-control" name="subject2" id="">
                                                    <option value="{{ $edit_singlstudents->subject2 }}">{{ $edit_singlstudents->subject2 }}</option>
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
                                                <select class="form-control" name="grade2" id="">
                                                    <option value="{{ $edit_singlstudents->grade2 }}">{{ $edit_singlstudents->grade2 }}</option>

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
                                                <select class="form-control" name="subject3" id="">
                                                    <option value="{{ $edit_singlstudents->subject3 }}">{{ $edit_singlstudents->subject3 }}</option>
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
                                                <select class="form-control" name="grade3" id="">
                                                    <option value="{{ $edit_singlstudents->grade3 }}">{{ $edit_singlstudents->grade3 }}</option>

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
                                                <select class="form-control" name="subject4" id="">
                                                    <option value="{{ $edit_singlstudents->subject4 }}">{{ $edit_singlstudents->subject4 }}</option>
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
                                                <select class="form-control" name="grade4" id="">
                                                <option value="{{ $edit_singlstudents->grade4 }}">{{ $edit_singlstudents->grade4 }}</option>
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
                                                <select class="form-control" name="subject5" id="">
                                                    <option value="{{ $edit_singlstudents->subject5 }}">{{ $edit_singlstudents->subject5 }}</option>
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
                                                <select class="form-control" name="grade5" id="">
                                                  <option value="{{ $edit_singlstudents->grade5 }}">{{ $edit_singlstudents->grade5 }}</option>

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
                                                <select class="form-control" name="subject6" id="">
                                                    <option value="{{ $edit_singlstudents->subject6 }}">{{ $edit_singlstudents->subject6 }}</option>
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
                                                <select class="form-control" name="grade6" id="">
                                                    <option value="{{ $edit_singlstudents->grade6 }}">{{ $edit_singlstudents->grade6 }}</option>

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
                                                <select class="form-control" name="subject7" id="">
                                                    <option value="{{ $edit_singlstudents->subject7 }}">{{ $edit_singlstudents->subject7 }}</option>
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
                                                <select class="form-control" name="grade7" id="">
                                                 <option value="{{ $edit_singlstudents->grade7 }}">{{ $edit_singlstudents->grade7 }}</option>

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
                                                <select class="form-control" name="subject8" id="">
                                                    <option value="{{ $edit_singlstudents->subject8 }}">{{ $edit_singlstudents->subject8 }}</option>
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
                                                <select class="form-control" name="grade8" id="">
                                                 <option value="{{ $edit_singlstudents->grade8 }}">{{ $edit_singlstudents->grade8 }}</option>

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
                                                <select class="form-control" name="subject9" id="">
                                                    <option value="{{ $edit_singlstudents->subject9 }}">{{ $edit_singlstudents->subject9 }}</option>
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
                                                <select class="form-control" name="grade9" id="">
                                                 <option value="{{ $edit_singlstudents->grade9 }}">{{ $edit_singlstudents->grade9 }}</option>


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
                                      <tr><th><img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$edit_singlstudents->olevel")}}" alt=""></th></tr>
                                        <tr><th><h3>Uplaod O'Level </h3><input value="{{ $edit_singlstudents->olevel }}" class="form-control" type="file" name="olevel" id=""></th></tr>
                                        <tr><th> <h3 style="text-align: center">Second setting if Any</h3></th></tr>

                                        <tr>
                                            <th><div class="form-group col-12">
                                              
                                             <select class="form-control" name="qualiobtain2" id="">
                                                  <option value="{{ $edit_singlstudents->qualiobtain2 }}">{{ $edit_singlstudents->qualiobtain2 }}</option>
                                                  <option value="WAEC">WAEC</option>
                                                  <option value="NECO">NECO</option>
                                                  <option value="GCE">GCE</option>
                                                  <option value="EQUIVALENT">EQUIVALENT</option>
                                             </select>
                                          </div></th>
                                          <th><div class="form-group col-12">
                                              <input type="text" class="form-control" value="{{ $edit_singlstudents->examnumber2 }}" class="form-control" name="examnumber2" value="{{ $edit_singlstudents->examnumber2 }}" id="contact-phone" placeholder="Examination Number">
                                          </div></th>
                                            
                                          </tr>
                                          <tr>
                                              <th><div class="form-group col-12">
                                                  <input type="text" class="form-control" name="centre_name2" value="{{ $edit_singlstudents->centre_name2 }}" id="contact-phone" placeholder="Centre Name">
                                              </div></th>
                                              <th><div class="form-group col-12">
                                                  <input type="text" class="form-control" name="yearobtain2" value="{{ $edit_singlstudents->yearobtain2 }}" id="contact-phone" placeholder="Month/Year Obtain">
                                              </div></th>
                                          </tr>
                                          <tr><th> <h3 style="text-align: center">Subject Taken</h3></th></tr>
                                          <tr>
                                             
                                              <th><div class="form-group col-12">
                                                  <select class="form-control" class="form-control" name="subject11" id="">
                                                      <option value="{{ $edit_singlstudents->subject11 }}">{{ $edit_singlstudents->subject11 }}</option>
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
                                                      <option value="{{ $edit_singlstudents->grade11 }}">{{ $edit_singlstudents->grade11 }}</option>
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
                                                      <option value="{{ $edit_singlstudents->subject12 }}">{{ $edit_singlstudents->subject12 }}</option>
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
                                                   <option value="{{ $edit_singlstudents->grade12 }}">{{ $edit_singlstudents->grade12 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject13 }}">{{ $edit_singlstudents->subject13 }}</option>
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
                                                   <option value="{{ $edit_singlstudents->grade13 }}">{{ $edit_singlstudents->grade13 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject14 }}">{{ $edit_singlstudents->subject14 }}</option>
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
                                                    <option value="{{ $edit_singlstudents->grade14 }}">{{ $edit_singlstudents->grade14 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject15 }}">{{ $edit_singlstudents->subject15 }}</option>
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
                                                     <option value="{{ $edit_singlstudents->grade15 }}">{{ $edit_singlstudents->grade15 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject16 }}">{{ $edit_singlstudents->subject16 }}</option>
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
                                                  <option value="{{ $edit_singlstudents->grade16 }}">{{ $edit_singlstudents->grade16 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject17 }}">{{ $edit_singlstudents->subject17 }}</option>
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
                                                    <option value="{{ $edit_singlstudents->grade17 }}">{{ $edit_singlstudents->grade17 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject18 }}">{{ $edit_singlstudents->subject18 }}</option>
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
                                                    <option value="{{ $edit_singlstudents->grade18 }}">{{ $edit_singlstudents->grade18 }}</option>

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
                                                      <option value="{{ $edit_singlstudents->subject19 }}">{{ $edit_singlstudents->subject19 }}</option>
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
                                                      <option value="{{ $edit_singlstudents->grade19 }}">{{ $edit_singlstudents->grade19 }}</option>


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
                                    <img style="width: 10%; height: 30px;" src="{{ URL::asset("/public/../$edit_singlstudents->olevel2")}}" alt="">

                                      <tr><th><h6>Upload O'Level 2nd sitting if any </h6><input class="form-control" type="file" value="{{ $edit_singlstudents->olevel2 }}" name="olevel2" id=""></th></tr>
                                </div>
                                
                                <div class="form-group col-12">
                                    <button class="btn btn-medium btn-primary" name="submit" type="submit">Submit Message <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                </div>
            </div>
            {{-- <input type="checkbox" class="form-control" name="nationality" id="contact-phone" > --}}

        </div>
    </section>

  </div>
    @include('dashboard.registrar.footer')