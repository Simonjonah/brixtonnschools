@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Publication</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Publication </li>
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
              <h3 class="card-title">Add Personnel</h3>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form action="{{ route('admin.createpersonnel1') }}" method="post" enctype="multipart/form-data">
                                @csrf
                               
                              <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="firstname" class="form-control" @error('firstname')
                                        
                                    @enderror value="{{ old('firstname') }}" id="exampleInputEmail1" placeholder="Firstname">
                                  </div>
                                  @error('firstname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lastname</label>
                                    <input type="text" name="lastname" class="form-control" @error('lastname')
                                    @enderror value="{{ old('lastname') }}" id="exampleInputEmail1" placeholder="Lastname">
                                </div>
                                  @error('lastname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                                
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook Link</label>
                                    <input type="text" name="facebook" class="form-control" @error('facebook')
                                    @enderror value="{{ old('facebook') }}" id="exampleInputEmail1" placeholder="https://facebook.com">
                                  </div>
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Whatsapp Link</label>
                                        <input type="text" name="whatapp" class="form-control" @error('whatapp')
                                        @enderror value="{{ old('whatapp') }}" id="exampleInputEmail1" placeholder="Whatsapp Link">
                                    </div>
                                      @error('whatapp')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror 
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Linkedin Link</label>
                                        <input type="text" name="linkedin" class="form-control" @error('linkedin')
                                        @enderror value="{{ old('linkedin') }}" id="exampleInputEmail1" placeholder="https://linkedin.com">
                                      </div>
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror 

                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Designation</label>
                                          <input type="text" name="designation" class="form-control" @error('designation')
                                          @enderror value="{{ old('designation') }}" id="exampleInputEmail1" placeholder="Designation">
                                        </div>
                                          @error('designation')
                                              <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="number" name="phone" class="form-control" @error('phone')
                                            @enderror value="{{ old('phone') }}" id="exampleInputEmail1" placeholder="Phone Number">
                                          </div>
                                          @error('phone')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror 
                                         
                              </div>
                              
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                         
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Twitter Link</label>
                                  <input type="text" name="twitter" class="form-control" @error('twitter')
                                  @enderror value="{{ old('twitter') }}" id="exampleInputEmail1" placeholder="https://twitter.com">
                                </div>
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 
                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" @error('email')
                                    @enderror value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                                  <div class="form-group">
                                    <label for="exampleInputFile">Profile Picture</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="images"  @error('images') is-invalid @enderror"
                                        value="{{ old('images') }}"
                                        id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                      </div>
                                      
                                    </div>
                                    @error('images')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror 
                                  </div>
                                    
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Instagram Link</label>
                                      <input type="text" name="instagram" class="form-control" @error('instagram')
                                      @enderror value="{{ old('instagram') }}" id="exampleInputEmail1" placeholder="https://instagram.com">
                                    </div>
                                      @error('instagram')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea class="textarea" name="message" class="form-control" @error('message') is-invalid @enderror" placeholder="Place some text here"
                                        value="{{ old('message') }}     style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                       </div>
                                       @error('message')
                                       <span class="text-danger">{{ $message }}</span>
                                       @enderror

                                    
                
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