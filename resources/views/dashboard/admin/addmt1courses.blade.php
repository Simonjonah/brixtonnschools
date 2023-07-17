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
                          <option value="Computer Essentials">Computer Essentials</option>
                          <option value="Typing Skills">Typing Skills</option>
                          <option value="Electronic Word Processing ">Electronic Word Processing </option>
                          <option value="Electronic Spreadsheet">Electronic Spreadsheet</option>
                          <option value="Corel Draw 1">Corel Draw 1</option>
                          <option value="Electronic Presentation">Electronic Presentation</option>
                          <option value="Database Management">Database Management</option>

                          <option value="Enterprise Leadership & Character Development (ELCD)">Enterprise Leadership  (ELCD)</option>
                          <option value="System Architecture 1">System Architecture 1</option>
                          <option value="Computer Networking">Computer Networking</option>
                          <option value="Basic Electricity">Basic Electricity</option>
                          <option value="Basic Electronics">Basic Electronics</option>
                          <option value="Computer Assembling & Installation">Computer Assembling & Installation</option>
                          <option value="System Architecture 2">System Architecture 2</option>
                          <option value="Operating Systems">Operating Systems</option>
                          <option value="System Troubleshooting & Repairs">System Troubleshooting & Repairs</option>
                          <option value="Computer Networking 2">Computer Networking 2</option>
                          <option value="Operating Systems 2">Operating Systems 2</option>
                          <option value="Computer Assembling & Installation 2">Computer Assembling & Installation 2</option>
                          <option value="End of Course Work">End of Course Work</option>



                        </select>
                      </div>

                      
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Course Code</label>
                        <select name="course_code1" class="form-control">
                          <option value="CDP 101">CDP 101</option>
                          <option value="CDP 102">CDP 102</option>
                          <option value="CDP 103">CDP 103</option>
                          <option value="CDP 104">CDP 104</option>
                          <option value="CDP 105">CDP 105</option>
                          <option value="CDP 106">CDP 106</option>
                          <option value="GST 124">GST 124</option>
                          <option value="DHM 101">DHM 101</option>
                          <option value="DHM 102">DHM 102</option>
                          <option value="DHM 103">DHM 103</option>
                          <option value="DHM 104">DHM 104</option>
                          <option value="DHM 105">DHM 105</option>
                          <option value="DHM 106">DHM 106</option>
                          
                          <option value="DHM 201">DHM 201</option>
                          <option value="DHM 202">DHM 202</option>
                          <option value="DHM 203">DHM 203</option>
                          <option value="DHM 204">DHM 204</option>
                          <option value="DHM 205">DHM 205</option>
                          <option value="DHM 302">DHM 302</option>




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
                          <option value="6">6</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Program</label>
                        <select name="programname_id" class="form-control">
                          @foreach ($display_programs as $display_program)
                            @if ($display_program->status == 'approved')
                              <option value="{{ $display_program->id }}">{{ $display_program->course_programs }} </option>
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
                            <option value="Second Semester">Second Semester</option>
                            <option value="Third Semester">Third Semester</option>

                          </select>
                        </div>
                      </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Assign Lecturer</label>
                        <select name="lecturer_id" class="form-control">
                          @foreach ($disall_lecturers as $disall_lecturer)
                            @if ($disall_lecturer->status == 'approved')
                              <option value="{{ $disall_lecturer->id }}">{{ $disall_lecturer->fname }} {{ $disall_lecturer->lname }}</option>
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
                            <option value="MT">MT</option>
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