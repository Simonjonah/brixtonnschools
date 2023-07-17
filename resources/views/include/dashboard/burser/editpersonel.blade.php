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
                            <form action="{{ url('admin/updatepersonnel/'.$edit_personnels->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                @method('PUT')
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
                              <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="firstname" class="form-control" @error('firstname')
                                        
                                    @enderror value="{{ $edit_personnels->firstname }}" id="exampleInputEmail1" placeholder="Firstname">
                                  </div>
                                  @error('firstname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lastname</label>
                                    <input type="text" name="lastname" class="form-control" @error('lastname')
                                    @enderror value="{{ $edit_personnels->lastname }}" id="exampleInputEmail1" placeholder="Lastname">
                                </div>
                                  @error('lastname')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                                
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook Link</label>
                                    <input type="text" name="facebook" class="form-control" @error('facebook')
                                    @enderror value="{{ $edit_personnels->facebook }}" id="exampleInputEmail1" placeholder="https://facebook.com">
                                  </div>
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Whatsapp Link</label>
                                        <input type="text" name="whatapp" class="form-control" @error('whatapp')
                                        @enderror value="{{ $edit_personnels->whatapp }}" id="exampleInputEmail1" placeholder="Whatsapp Link">
                                    </div>
                                      @error('whatapp')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror 
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Linkedin Link</label>
                                        <input type="text" name="linkedin" class="form-control" @error('linkedin')
                                        @enderror value="{{ $edit_personnels->linkedin }}" id="exampleInputEmail1" placeholder="https://linkedin.com">
                                      </div>
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror 

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Message</label>
                                            <textarea name="message" id="" cols="30" rows="10" class="form-control" @error('message')
                                            @enderror value="{{ $edit_personnels->message }}" id="exampleInputEmail1" placeholder="Message">{{ $edit_personnels->message }}</textarea>
                                           
                                          </div>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                              </div>
                              
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                         
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Twitter Link</label>
                                  <input type="text" name="twitter" class="form-control" @error('twitter')
                                  @enderror value="{{ $edit_personnels->twitter }}" id="exampleInputEmail1" placeholder="https://twitter.com">
                                </div>
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 
                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" @error('email')
                                    @enderror value="{{ $edit_personnels->email }}" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 
                                

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" @error('phone')
                                    @enderror value="{{ $edit_personnels->phone }}" id="exampleInputEmail1" placeholder="Phone Number">
                                  </div>
                                  @error('phone')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Designation</label>
                                    <input type="text" name="designation" class="form-control" @error('designation')
                                    @enderror value="{{ $edit_personnels->designation }}" id="exampleInputEmail1" placeholder="Designation">
                                  </div>
                                  @error('designation')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror 

                                    <img class="image rounded-circle" src="{{ asset('/public/../'.$edit_personnels->images)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

                                <div class="form-group">
                                  <label for="exampleInputFile">Profile Picture</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="images"  @error('images') is-invalid @enderror"
                                      value="{{ $edit_personnels->images }}"
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
                                    @enderror value="{{ $edit_personnels->instagram }}" id="exampleInputEmail1" placeholder="https://instagram.com">
                                  </div>
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                              </div>

                             
                
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