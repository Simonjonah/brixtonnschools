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
              <h3 class="card-title">Add Publication</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.createpublication') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="pubtitle" class="form-control" @error('pubtitle')
                      
                  @enderror value="{{ old('pubpubtitle') }}" id="exampleInputEmail1" placeholder="Pub title">
                </div>
                @error('pubtitle')
                <span class="text-danger">{{ $message }}</span>
                @enderror 
                                        
              {{-- <div class="card-body pad"> --}}
                <div class="form-group">
                <textarea class="textarea" name="pubmessage" class="form-control" @error('pubmessage') is-invalid @enderror" placeholder="Place some text here"
                value="{{ old('pubmessage') }}     style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
               </div>
               @error('pubmessage')
               <span class="text-danger">{{ $message }}</span>
               @enderror
              {{-- <p class="text-sm mb-0">
                Editor <a href="https://github.com/summernote/summernote">Documentation and license
                information.</a>
              </p> --}}
            {{-- </div> --}}

                {{-- <div class="form-group">
                  <textarea id="compose-textarea" class="ckeditor" id="myTextarea" name="pubmessage" class="form-control" style="height: 300px" @error('pubmessage') is-invalid @enderror"
                  value="{{ old('pubmessage') }}">
                    
                  </textarea>
              </div>
              @error('pubmessage')
              <span class="text-danger">{{ $message }}</span>
              @enderror --}}

              
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input  type="file" class="form-control" name="pubimages"  @error('pubimages') is-invalid @enderror"
                      value="{{ old('pubimages') }}"
                      id="exampleInputFile">
                      {{-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> --}}
                    </div>
                    {{-- <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div> --}}
                    
                  </div>
                  @error('pubimages')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
  $(document).ready(function() {
      toastr.options.timeOut = 10000;
      @if (Session::has('error'))
          toastr.error('{{ Session::get('error') }}');
      @elseif(Session::has('success'))
          toastr.success('{{ Session::get('success') }}');
      @endif
  });

</script> --}}
 
    @include('dashboard.admin.footer')