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
                      <label for="exampleInputEmail1">Course Title</label>
                      <input type="text" name="course_title" class="form-control" @error('course_title')
                          
                      @enderror value="{{ $edit_courses->course_title }}" id="exampleInputEmail1" placeholder="Course title">
                    </div>
                    @error('course_title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Code</label>
                      <input type="text" name="course_code" class="form-control" @error('course_code')
                          
                      @enderror value="{{ $edit_courses->course_code }}" id="exampleInputEmail1" placeholder="Course Code">
                    </div>
                    @error('course_code')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                      <label for="exampleInputEmail1">{{ $edit_courses->course_period }}</label>
                        <select class="form-control" name="course_period">
                          <option value="One Month">1 Month</option>

                          <option value="Three Months">3 Months</option>
                          <option value="Six Months">6 Months</option>
                          <option value="One Year">1 Year</option>
                          <option value="2 Years">2 Year</option>
                        </select>
                      {{-- @enderror value="{{ old('course_period') }}" id="exampleInputEmail1" placeholder="Course Period"> --}}
                    </div>
                    @error('course_period')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Amount</label>
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

                        <option value="Certificate in Data Processing">Certificate in Data Processing</option>
                        <option value="Diploma Data Processing">Diploma Data Processing</option>

                        
                        <option value="Hardware Maintenance and Repairs">Maintenance and Repairs</option>
                        <option value="Professional Programs">Professional Programs</option>
                        <option value="NID Programmes">NID Programmes</option>
                        
                      </select>
                    {{-- @enderror value="{{ old('course_programs') }}" id="exampleInputEmail1" placeholder="Course Period"> --}}
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