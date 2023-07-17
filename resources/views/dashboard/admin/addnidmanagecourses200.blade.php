@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="btn btn-success">Add</a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Upload  </li>
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
                <form action="{{ route('admin.createsinglecourse') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label> Course Title</label>
                        <select name="course_title1" class="form-control">
                          <option value="Students Industrial Attachment">Students Industrial Attachment</option>
                          <option value="Business Statistics">Business Statistics</option>
                          <option value="Business Law">Business Law</option>
                          <option value="Introduction to Computer Programming">Introduction to Computer Programming</option>
                          <option value="Data Management">Data Management</option>
                          <option value="Public Finance">Public Finance</option>
                          <option value="Principles of Management 2">Principles of Management 2</option>
                          <option value="Research Methodology">Research Methodology</option>
                          <option value="Citizenship Education ">Citizenship Education </option>
                          <option value="Seminar">Seminar</option>

                        </select>
                      </div>

                      
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Course Code</label>
                        <select name="course_code1" class="form-control">
                          <option value="BMI 211">BMI 211</option>
                          <option value="BMI 212">BMI 212</option>
                          <option value="BMI 213">BMI 213</option>
                          <option value="BMI 214">BMI 214</option>
                          <option value="BMI 215">BMI 215</option>
                          <option value="BMI 216">BMI 216</option>
                          <option value="BMI 217">BMI 217</option>
                          <option value="BMI 218">BMI 218</option>
                          <option value="BMI 218">BMI 218</option>
                          <option value="GST 212">GST 212</option>
                          <option value="BMI 219">BMI 219</option>
                        </select>
                      </div>
                     
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Credit Unit</label>
                        <select name="credit_unit1" class="form-control">
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Program</label>
                        <select name="programname_id" class="form-control">
                          @foreach ($display_nidprograms as $display_nidprogram)
                            @if ($display_nidprogram->status == 'approved')
                              <option value="{{ $display_nidprogram->id }}">{{ $display_nidprogram->course_programs }} </option>
                            @else
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Semester</label>
                          <select name="semester" class="form-control">
                            <option value="First Semester">First Semester</option>
                        
                          </select>
                        </div>
                      </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Assign Lecturer</label>
                        <select name="lecturer_id" class="form-control">
                          @foreach ($display_alllecturers as $display_alllecturer)
                            @if ($display_alllecturer->status == 'approved')
                              <option value="{{ $display_alllecturer->id }}">{{ $display_alllecturer->fname }} {{ $display_alllecturer->lname }}</option>
                            @else
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Year</label>
                          <select name="resultsyear" class="form-control">
                            <option value="2022/2023">2022/2023</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Code</label>
                          <select name="course_code5" class="form-control">
                            <option value="NIDMANFIRSTSEMLEVEL200L">NID</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Level</label>
                          <select name="level" class="form-control">
                            <option value="200L"> 200L</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                            Add Second Semester Level 200
                          </button>
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


 

  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
  
      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Dear {{ Auth::guard('admin')->user()->name }} you do not have upto N5000 to withraw')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
  
      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Dear {{ Auth::guard('admin')->user()->name }} your account has been suspended, please contact Whatsapp',
          title: 'Suspended',
          class: 'bg-danger', 
          subtitle: 'Subtitle',
          image: '{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  
  </script>
  <script>
    window.addEventListener('showtoastr', function(event){
      toastr.remove();
      if (event.detail.type == 'info') {
        toastr.info(event.detail.message);
      }eleif(event.detail.type == 'success'){
        toastr.success(event.detail.message);
      }eleif(event.detail.type == 'error'){
        toastr.error(event.detail.message);
      }eleif(event.detail.type == 'warning'){
        toastr.warning(event.detail.message);
      }else{
        return false;
      }

    });
  </script>
    @include('dashboard.admin.footer')


    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('admin.createsinglecourse') }}" method="post" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Course Title</label>
                    <select name="course_title1" class="form-control">
                      <option value="Web Development">Web Development</option>
                      <option value="Elements of Human Capital Management">Elements of Human Capital Management</option>
                      <option value="Principles of Purchasing">Principles of Purchasing</option>
                      <option value="Principles of E-commerce">Principles of E-commerce</option>
                      <option value="Introduction to Digital Communication networking/Computer Networking">Introduction to Digital Communication </option>
                      <option value="Cost Accounting">Cost Accounting</option>
                      <option value="Business Communication">Business Communication</option>
                      <option value="Project">Project</option>
                    </select>
                  </div>

                  
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Course Code</label>
                    <select name="course_code1" class="form-control">
                      <option value="BMI 221">BMI 221</option>
                      <option value="BMI 222">BMI 222</option>
                      <option value="BMI 223">BMI 223</option>
                      <option value="BMI 224">BMI 224</option>
                      <option value="NSS 124">NSS 124</option>
                      <option value="BMI 225">BMI 225</option>
                      <option value="BMI 226">BMI 226</option>
                      <option value="BMI 227">BMI 227</option>
                    </select>
                  </div>
                 
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Credit Unit</label>
                    <select name="credit_unit1" class="form-control">
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      {{-- <option value="6">6</option> --}}
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select Program</label>
                    <select name="programname_id" class="form-control">
                      @foreach ($display_nidprograms as $display_nidprogram)
                        @if ($display_nidprogram->status == 'approved')
                          <option value="{{ $display_nidprogram->id }}">{{ $display_nidprogram->course_programs }} </option>
                        @else
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Semester</label>
                      <select name="semester" class="form-control">
                        {{-- <option value="First Semester">First Semester</option> --}}
                        <option value="Second Semester">Second Semester</option>
                      </select>
                    </div>
                  </div>
  
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Assign Lecturer</label>
                    <select name="lecturer_id" class="form-control">
                      @foreach ($display_alllecturers as $display_alllecturer)
                        @if ($display_alllecturer->status == 'approved')
                          <option value="{{ $display_alllecturer->id }}">{{ $display_alllecturer->fname }} {{ $display_alllecturer->lname }}</option>
                        @else
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Year</label>
                      <select name="resultsyear" class="form-control">
                        <option value="2022/2023">2022/2023</option>
                      </select>
                    </div>
                  </div>
  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Code</label>
                      <select name="course_code5" class="form-control">
                        <option value="NIDMANSECONDSEM200L">NID</option>
                        
                      </select>
                    </div>
                  </div>
  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Level</label>
                      <select name="level" class="form-control">
                        <option value="200L">LEVEL 200</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Add </button>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-primary">Add Second Semester Courses Level 100</button> --}}
                </div>
            </form>
            
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->