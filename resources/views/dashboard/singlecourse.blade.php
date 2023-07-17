@include('dashboard.student.header')
@include('dashboard.student.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course</h1>
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
         
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header p-2">
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    
                    
                     @if ($display_sinleprograms)
                     <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">{{ $display_sinleprograms->course_programs }}</h3>
                <div class="col-12">
                  <img src="{{ URL::asset("/public/../$display_sinleprograms->courseimages")}}" class="product-image" alt="Product Image">
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">{{ $display_sinleprograms->course_programs }}</h3>
                {{-- <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> --}}
  
                <hr>
                
                <h4 class="mt-3">Size <small>Please select one</small></h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                    <span class="text-xl">Period</span>
                    <br>
                    {{ $display_sinleprograms->course_period }}
                  </label>
                  <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                    <span class="text-xl">Date Created</span>
                    <br>
                    {{ $display_sinleprograms->created_at->diffForHumans() }}
                  </label>
                  
                  
                </div>
  
                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">Amount
                    ₦ {{ $display_sinleprograms->course_amount }}
                  </h2>
                 
                </div>
  
                <div class="mt-4">
                    
                      <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                        {{ csrf_field() }}
                    
                        <input type="hidden" name="name" value="{{ Auth::guard('student')->user()->fname }}" placeholder="Name" />
                        <input type="hidden" name="course_amount" value="{{ $display_sinleprograms->course_amount }}" placeholder="Amount" />
                        <input type="hidden" name="course_id" value="{{ $display_sinleprograms->id }}" placeholder="" />
                        <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}" placeholder="" />
                        <input type="hidden" name="course_title" value="{{ $display_sinleprograms->course_title }}" placeholder="Amount" />
                        <input type="hidden" name="course_programs" value="{{ $display_sinleprograms->course_programs }}" placeholder="Amount" />
                        <input type="hidden" name="course_period" value="{{ $display_sinleprograms->course_period }}" placeholder="course_period" />
                        <input type="hidden" name="course_contents" value="{{ $display_sinleprograms->course_contents }}" placeholder="course_period" />
                        <input type="hidden" name="course_code" value="{{ $display_sinleprograms->course_code }}" placeholder="course_period" />
                        <input type="hidden" name="slug" value="{{ $display_sinleprograms->slug }}" placeholder="course_period" />
                        <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_period" />
                        
                        <input type="hidden" name="courseimages" value="{{ $display_sinleprograms->courseimages }}" placeholder="course_period" />

                        <input type="hidden" name="email" value="{{ Auth::guard('student')->user()->email }}"  type="email" placeholder="Your Email" />
                        <input type="hidden" name="phone" value="{{ Auth::guard('student')->user()->phone }}" type="tel" placeholder="Phone number" />
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                          View More
                        </button>
                        {{-- <input class="btn btn-success" type="submit" value="Pay Now!" /> --}}
                    </form>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                  <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                  {{-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                  <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> --}}
                </div>
              </nav>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {!! $display_sinleprograms->course_contents !!}</div>
                {{-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div> --}}
                
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">₦ {{ $display_sinleprograms->course_amount }} {{ $display_sinleprograms->course_title }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('student/registersingleprogram') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                  <p>Program Contents</p>
                  <textarea class="form-control" value="{!! $display_sinleprograms->course_contents !!}" name="course_contents" id="" cols="30" rows="10">{!! $display_sinleprograms->course_contents !!}</textarea>
              </div>
                 <div class="form-group">
                    {{-- <p>Course Title</p> --}}
                    <input type="hidden" class="form-control" value="{{ $display_sinleprograms->course_title }}" name="course_title" id="" placeholder="Course Title">
                </div>
               <div class="form-group">
                  <p>Program period</p>
                  <input type="text" class="form-control" value="{{ $display_sinleprograms->course_period }}" name="course_period" id="" placeholder="Course Title">
              </div>
              <div class="form-group">
                <p>Program Amount</p>
                <input type="text" class="form-control" value="{{ $display_sinleprograms->course_amount }}" name="course_amount" id="" placeholder="Course Title">
            </div>

            <div class="form-group">
              <p>First Amount</p>
              <input type="text" class="form-control" value="{{ $display_sinleprograms->firstsemester_fee }}" name="firstsemester_fee" id="" placeholder="Course Title">
          </div>  
          <div class="form-group">
            <p>Second Amount</p>
            <input type="text" class="form-control" value="{{ $display_sinleprograms->secondsemester_fee }}" name="secondsemester_fee" id="" placeholder="Course Title">
        </div>  
        <div class="form-group">
          <p>Third Amount</p>
          <input type="text" class="form-control" value="{{ $display_sinleprograms->thirddsemester_fee }}" name="thirddsemester_fee" id="" placeholder="Course Title">
        </div>


            <div class="form-group">
              <p> Program</p>
              <input type="text" class="form-control" value="{{ $display_sinleprograms->course_programs }}" name="course_programs" id="" placeholder="Course Title">
          </div>

          <div class="form-group">
            {{-- <p>Course id</p> --}}
            <input type="hidden" class="form-control" value="{{ $display_sinleprograms->id }}" name="course_id" id="" placeholder="Course Title">
        </div> 
                <div class="form-group">
                  {{-- <p>Course Code</p> --}}
                  <input type="hidden" class="form-control" value="{{ $display_sinleprograms->course_code }}" name="course_code" id="" placeholder="Course Title">
              </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Please Enroll this Course</button>
                </div>
              </form>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
     @else
                         
    @endif
                      
                                            <!-- /.post -->
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
    @include('dashboard.student.footer')