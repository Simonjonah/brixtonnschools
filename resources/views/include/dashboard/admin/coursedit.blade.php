@include('dashboard.admin.header')


  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Courses </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                    <form action="{{ url('admin/updatecourse/'.$edit_courses->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
                   
                  
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Semester Fee</label>
                      <input type="text" name="firstsemester_fee" class="form-control" @error('firstsemester_fee')
                          
                      @enderror value="{{ $edit_courses->firstsemester_fee }}" id="exampleInputEmail1" placeholder="Course title">
                    </div>
                    @error('firstsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Second Semester Fee</label>
                      <input type="text" name="secondsemester_fee" class="form-control" @error('secondsemester_fee')
                          
                      @enderror value="{{ $edit_courses->secondsemester_fee }}" id="exampleInputEmail1" placeholder="Course title">
                    </div>
                    @error('secondsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                      <label for="exampleInputEmail1">Third Semester Fee</label>
                      <input type="text" name="thirddsemester_fee" class="form-control" @error('thirddsemester_fee')
                          
                      @enderror value="{{ $edit_courses->thirddsemester_fee }}" id="exampleInputEmail1" placeholder="Course title">
                    </div>
                    @error('thirddsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Period</label>
                        <select class="form-control" name="course_period">
                          <option value="{{ $edit_courses->course_period }}">{{ $edit_courses->course_period }}</option>
                          <option value="One Month">1 Month</option>

                          <option value="Three Months">3 Months</option>
                          <option value="Six Months">6 Months</option>
                          <option value="One Year">1 Year</option>
                          <option value="2 Years">2 Year</option>
                        </select>
                    </div>
                    @error('course_period')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Program Amount</label>
                      <input type="number" name="course_amount" class="form-control" @error('course_amount')
                      @enderror value="{{ $edit_courses->course_amount }}" id="exampleInputEmail1" placeholder="Course Amount">
                    </div>
                    @error('course_amount')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                  </div>
                 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                   
                  <div class="card-body">
                                            
                  {{-- <div class="card-body pad"> --}}
                    <div class="form-group">
                    <textarea class="textarea" name="course_contents" class="form-control" @error('course_contents') is-invalid @enderror" placeholder="Place some text here"
                    value="{{ $edit_courses->course_contents }}">{{ $edit_courses->course_contents }} </textarea>
                   </div>
                   @error('course_contents')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror

                   <div class="form-group">
                    <label for="exampleInputEmail1">{{ $edit_courses->course_programs }}</label>
                      <select class="form-control" name="course_programs">
                        <option value="{{ $edit_courses->course_programs }}">{{ $edit_courses->course_programs }}</option>
                        <option value="">Computer Foundation Programs</option>
                        <option value="Certificate in Data Processing">Certificate in Data Processing</option>
                        <option value="Diploma Data Processing">Diploma Data Processing</option>
                        <option value="Diploma Hardware Maintenance and Repairs">Maintenance and Repairs</option>
                        <option value="Professional Programs">Professional Programs</option>
                        <option value="">Under NID Programs</option>
                        <option value="NID Computer Software Engineering Technology">	NID Computer Software Engineering Technology </option>
                        <option value="NID Computer Hardware Engineering Technology">NID Computer Hardware Engineering Technology</option>
                        <option value="NID Networking & Systems Security">NID Networking & Systems Security </option>
                        <option value="NID Business Management & Information Technology">NID Business Management & Information Technology </option>
                        <option value="">Under NSQ Programs</option>
                        <option value="GSM Repairs ">GSM Repairs </option>
                      <option value="Web Application Development ">Web Application Development </option>
                      <option value="Mobile Application Development ">Mobile Application Development </option>
                      <option value="Digital Service Operations ">Digital Service Operations </option>
                      <option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning</option>
                      <option value="Office Technology">Office Technology </option>
                      <option value="Computer Hardware Maintenance and Repairs">Computer Hardware Maintenance and Repairs </option>

                      <option value="">Professional Courses</option>
                      
                      <option value="Computer Networking Administration Specialist/CCNA">Networking Administration Specialist/CCNA</option>
                      <option value="Programming(MATLAB/VB.Net/JAVA//C#/C++/JAVA) ">Programming(MATLAB/VB.Net/JAVA//C#/C++/JAVA)</option>
                      <option value="Embedded System Design using Aduino & PIC">Embedded System Design using Aduino & PIC</option>
                      <option value="PYTHON Development">Python Development</option>
                      <option value="AutoCAD">AutoCAD</option>
                      <option value="Digital Marketing ">Digital Marketing </option>
                      <option value="Advanced Database Design (using Microsoft SPL Server and Visual Basic)">Advanced Database Design </option>
                      <option value="Computer Based Graphics (using Corel Draw and Adobe Photoshop)">Computer Based Graphics </option>
                      <option value="Executive Class (Microsoft Office Applications)">Executive Class (Microsoft Office Applications)</option>
                      <option value="Sage/Peachtree Accounting ">Sage/Peachtree Accounting </option>
                      <option value="Entrepreneurship and SME Development">Entrepreneurship and SME Development </option>
                      <option value="Enterprise Leadership and Character Development (ELCD)">Enterprise Leadership and Character Development (ELCD)</option>
                      <option value="Officer Technology& Secretarial Skills">Officer Technology& Secretarial Skills</option>
                      <option value="Website Design& Hosting ">Website Design& Hosting </option>
                      <option value="PHP(Laravel) Development">PHP(Laravel) Development</option>
                      <option value="API Development">API Development</option>
                      <option value="NODE.JS Development">NODE.JS Development</option>
                      <option value="NEST.JS Development">NEST.JS Development</option>
 
                      <option value="UI/UX.JS Design">UI/UX.JS Design</option>
                      <option value="VUE.JS Development">VUE.JS Development</option>
                      <option value="REACT.JS Development">REACT.JS Development</option>
                      </select>
                  </div>
                  
                  @error('course_programs')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  
                  
                  
                    <div class="form-group">
                      <label for="exampleInputFile">Course Photo</label>
                      <td><img style="width: 10%; height: 10%;" src="{{ URL::asset("/public/../$edit_courses->courseimages")}}" alt=""></td>

                      <div class="input-group">

                        <div class="custom-file">
                          <input  type="file" class="form-control" name="courseimages"  @error('courseimages') is-invalid @enderror"
                          value="{{ $edit_courses->courseimages }} "
                          id="exampleInputFile">
                        </div>
                        
                      </div>
                      @error('courseimages')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
  
 
    @include('dashboard.admin.footer')