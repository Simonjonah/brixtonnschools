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

  
    <section class="content">
        <div class="container-fluid">
          <div class="row">
         
            <!-- right column -->
            <div class="col-md-12">
              
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Certificate in Data Processing Course Uploads</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ url('registrar/updatecreatesinglecoursereg/'.$editcourse_certs->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                          <label> Course Title</label>
                          <select name="course_title1" class="form-control">
                            <option value="{{ $editcourse_certs->course_title1 }}">{{ $editcourse_certs->course_title1 }}</option>
  
                            <option value="Computer Essentials">Computer Essentials</option>
                            <option value="Typing Skills">Typing Skills</option>
                            <option value="Electronic Word Processing ">Electronic Word Processing </option>
                            <option value="Electronic Spreadsheet">Electronic Spreadsheet</option>
                            <option value="Corel Draw 1">Corel Draw 1</option>
                            <option value="Electronic Presentation">Electronic Presentation</option>
                            <option value="Enterprise Leadership & Character Development (ELCD)">Enterprise Leadership  (ELCD)</option>
  
                          </select>
                        </div>
  
                        
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Course Code</label>
                          <select name="course_code1" class="form-control">
                            <option value="{{ $editcourse_certs->course_code1 }}">{{ $editcourse_certs->course_code1 }}</option>
  
                            <option value="CDP 101">CDP 101</option>
                            <option value="CDP 102">CDP 102</option>
                            <option value="CDP 103">CDP 103</option>
                            <option value="CDP 104">CDP 104</option>
                            <option value="CDP 105">CDP 105</option>
                            <option value="CDP 106">CDP 106</option>
                            <option value="GST 124">GST 124</option>
  
                          </select>
                        </div>
                       
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Credit Unit</label>
                          <select name="credit_unit1" class="form-control">
                            <option value="{{ $editcourse_certs->credit_unit1 }}">{{ $editcourse_certs->credit_unit1 }}</option>
                            <option value="3">3</option>
  
                            <option value="2">2</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Select Program</label>
                          <select name="programname" class="form-control">
                            <option value="{{ $editcourse_certs->programname }}">{{ $editcourse_certs->programname }}</option>
  
                            <option value="Certificate in Data Processing">Certificate in Data Processing</option>
                            <option value="Diploma in Data Processing">Diploma in Data Processing</option>
                            <option value="Diploma in Hardware Maintenance & Repairs">Diploma in Hardware Maintenance & Repairs</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label>Assign Lecturer</label>

                          <select name="lecturer_id" class="form-control">
                            @foreach ($display_lecturers as $display_lecturer)
                              @if ($display_lecturer->status == 'approved')
                                <option value="{{ $display_lecturer->id }}">{{ $display_lecturer->fname }} {{ $display_lecturer->lname }}</option>
                              @else
                              @endif
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
  
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  
    

  </div>
    @include('dashboard.registrar.footer')