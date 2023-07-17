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
                        
                        

                        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ Auth::guard('student')->user()->course['course_programs'] }}</h3>
                    <div class="col-12">
                    <img src="{{ asset('assets/dist/img/imfi56.jpg')}}" class="product-image" alt="Product Image">
                    </div>
                    
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">Program Information</h3>
                    <p>Date Registered {{ $costanalysis->created_at->format('D d, M Y, H:i') }}</p>
    
                    <hr>
                    
                    {{-- <h4 class="mt-3">Size <small>Please select one</small></h4> --}}
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">Period</span>
                        <br>
                        {{ $costanalysis->course_period }}
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">Course Programs</span>
                        <br>
                        {{ $costanalysis->course['course_programs'] }}
                    </label>

                    </div>
               <div class="card-header">
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                 <div id="accordion">
                   <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                   <div class="card card-primary">
                     <div class="card-header">
                       <h4 class="card-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          ₦ {{ $costanalysis->course['course_amount'] }} Pay All
                         </a>
                       </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                       <div class="card-body">
                        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                          {{ csrf_field() }}
                      
                          <input type="hidden" name="fname" value="{{ Auth::guard('student')->user()->fname }}" placeholder="Name" />
                          {{-- <input type="text" name="course_amount" value="{{ $costanalysis->course_amount }}" placeholder="course_Amount" /> --}}
                          <select class="form-control" name="amount" id="">
                            <label for="">Select course_Amount</label>
                            @if ($costanalysis->programname == 'Certificate in Data Processing')
                            <option value=""> No Semester for this program</option>
                              
                            @elseif($costanalysis->course['course_programs'] == 'Diploma in Data Processing')
                            {{-- <option value="{{ $costanalysis->course_amount }}">{{ $costanalysis->course_amount }} Pay All</option> --}}
                              
                            <option value="{{ $costanalysis->course['course_amount'] }}">{{ $costanalysis->course['course_amount'] }} Pay All</option>
                            <option value="{{ $costanalysis->course['firstsemester_fee'] }}">{{ $costanalysis->course['firstsemester_fee'] }} First Semester </option>
                            <option value="{{ $costanalysis->course['secondsemester_fee'] }}">{{ $costanalysis->course['thirddsemester_fee'] }} Second Semester</option>
                            {{-- <option value="{{ $costanalysis->course['thirddsemester_fee'] }}">{{ $costanalysis->thirddsemester_fee }} Third Semester</option> --}}
                            @elseif($costanalysis->course['course_programs'] == 'Diploma Hardware Maintenance and Repairs')
                            <option value="{{ $costanalysis->course['course_amount'] }}">{{ $costanalysis->course['course_amount'] }} Pay All</option>
                            <option value="{{ $costanalysis->course['firstsemester_fee'] }}">{{ $costanalysis->course['firstsemester_fee'] }} First Semester </option>
                            <option value="{{ $costanalysis->course['secondsemester_fee'] }}">{{ $costanalysis->course['secondsemester_fee'] }} Second Semester</option>
                              <option value="{{ $costanalysis->course['thirddsemester_fee'] }}">{{ $costanalysis->course['thirddsemester_fee'] }} Third Semester</option>

                              
                            @endif
    
                          </select><br>

                          @if($costanalysis->course['course_period'] == '2 Years')
                            <div class="card card-primary card-outline">
                              <div class="card-header">
                                <h3 class="card-title">
                                  <i class="fas fa-edit"></i>
                                    {{ Auth::guard('student')->user()->programname }} <span style="color:
                                    red">Select Semester and Level</span>
                                </h3>
                              </div>
                              <div class="card-body">
                                
                                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">100 Level</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">200 Level</a>
                                  </li>
                                 
                                </ul>
                                <div class="tab-content" id="custom-content-below-tabContent">
                                  <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                    <form action="" method="post">
                                      <div class="form-group">
                                        <select name="amount" class="form-control" id="">
                                          @if($costanalysis->course['course_period'] == '2 Years')
                                    `       <option value="{{ $costanalysis->course['course_amount'] }}">{{ $costanalysis->course['course_amount'] }} Pay All</option>
                                            <option value="{{ $costanalysis->course['firstsemester_fee'] }}">{{ $costanalysis->course['firstsemester_fee'] }} First Semester </option>
                                            <option value="{{ $costanalysis->course['secondsemester_fee'] }}">{{ $costanalysis->course['secondsemester_fee'] }} Second Semester</option>
                                          @endif
                                      </select>
                                      </div>
  
                                      <div class="form-group">
                                          <select name="semester" class="form-control" id="">
                                            @if($costanalysis->course['course_period'] == '2 Years')
                                            {{-- <option value="First Semester">First Semester </option> --}}
                                            <option value="Second Semester"> Second Semester</option>
                                            @endif
                                          </select>
                                      </div>
                                      <div class="form-group">
                                        <select name="level" class="form-control" id="">
                                          @if($costanalysis->course['course_period'] == '2 Years' && $costanalysis->level = '200L')
                                          <option value="100L">100L </option>
                                          {{-- <option value="200L"> 200L</option> --}}
                                          @endif
                                        </select>
                                    </div>
                                      <input type="hidden" name="course_id" value="{{ $costanalysis->course['id'] }}" placeholder="" />
                                      <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}" placeholder="" />
                                      {{-- <input type="text" name="level" value="{{ $costanalysis->course['level'] }}" placeholder="Level" /> --}}
                                      <input type="hidden" name="course_programs" value="{{ $costanalysis->course['course_programs'] }}" placeholder="course_Amount" />
            
                                      <input type="hidden" name="course_period" value="{{ $costanalysis->course['course_period'] }}" placeholder="course_period" />
                                      {{-- <input type="hidden" name="course_contents" value="{{ $costanalysis->course_contents }}" placeholder="course_period" /> --}}
                                      <input type="hidden" name="course_code" value="{{ $costanalysis->course['course_code'] }}" placeholder="course_period" />
                                      <input type="hidden" name="slug" value="{{ $costanalysis->course['slug'] }}" placeholder="course_period" />
                                      <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_period" />
                                      
                                      <input type="hidden" name="courseimages" value="{{ $costanalysis->course['courseimages'] }}" placeholder="course_period" />
              
                                      <input type="hidden" name="email" value="{{ Auth::guard('student')->user()->email }}"  type="email" placeholder="Your Email" />
                                      <input type="hidden" name="phone" value="{{ Auth::guard('student')->user()->phone }}" type="tel" placeholder="Phone number" />
                                      {{-- <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_Amount" /> --}}
                                      
                                      <input class="btn btn-success" type="submit" value="Pay Now!" />
                                    </form>
                                    
                                    
                                  </div>
                                  <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                        {{ csrf_field() }}

                                      <div class="form-group">
                                        <select name="amount" class="form-control" id="">
                                          @if($costanalysis->course['course_period'] == '2 Years')
                                    `       <option value="{{ $nidsch_fees200s->amount }}">{{ $nidsch_fees200s->amount }} Pay All</option>
                                            <option value="{{ $nidsch_fees200s->firstsemester_fee }}">{{ $nidsch_fees200s->firstsemester_fee }} First Semester </option>
                                            <option value="{{ $nidsch_fees200s->secondsemester_fee }}">{{ $nidsch_fees200s->secondsemester_fee }} Second Semester</option>
                                          @endif
                                      </select>
                                      </div>
  
                                      <div class="form-group">
                                          <select name="semester" class="form-control" id="">
                                            @if($costanalysis->course['course_period'] == '2 Years' && $costanalysis->level = '200L')
                                            <option value="First Semester">First Semester </option>
                                            <option value="Second Semester"> Second Semester</option>
                                            @endif
                                          </select>
                                      </div>

                                      <div class="form-group">
                                        <select name="level" class="form-control" id="">
                                          @if($costanalysis->course['course_period'] == '2 Years' && $costanalysis->level = '200L')
                                          {{-- <option value="100L">100L </option> --}}
                                          <option value="200L"> 200L</option>
                                          @endif
                                        </select>
                                    </div>
                                      <select name="semester" class="form-control" id="">
                                      <input type="hidden" name="course_id" value="{{ $costanalysis->course['id'] }}" placeholder="" />
                                      <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}" placeholder="" />
                                      {{-- <input type="text" name="level" value="{{ $nidsch_fees200s->level }}" placeholder="Level" /> --}}
                                      <input type="hidden" name="course_programs" value="{{ $costanalysis->course['course_programs'] }}" placeholder="course_Amount" />
            
                                      <input type="hidden" name="course_period" value="{{ $costanalysis->course['course_period'] }}" placeholder="course_period" />
                                      <input type="hidden" name="course_code" value="{{ $costanalysis->course['course_code'] }}" placeholder="course_period" />
                                      <input type="hidden" name="slug" value="{{ $costanalysis->course['slug'] }}" placeholder="course_period" />
                                      <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_period" />
                                      
                                      <input type="hidden" name="courseimages" value="{{ $costanalysis->course['courseimages'] }}" placeholder="course_period" />
              
                                      <input type="hidden" name="email" value="{{ Auth::guard('student')->user()->email }}"  type="email" placeholder="Your Email" />
                                      <input type="hidden" name="phone" value="{{ Auth::guard('student')->user()->phone }}" type="tel" placeholder="Phone number" />
                                      {{-- <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_Amount" /> --}}
                                      
                                      <input class="btn btn-success" type="submit" value="Pay Now!" />
                                    </form>
                                  </div>
                                  
                                </div>
                               
                               
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /.card -->
                          </div>
                        @endif
                          <select class="form-control" name="semester" id="">
                          <label for="">Select Semester</label>
                          @if ($costanalysis->course['course_programs'] == 'Certificate in Data Processing')
                          <option value="First Semester">First Semester</option>
                          @elseif ($costanalysis->course['course_programs'] == 'Diploma in Data Processing')
                          <option value="Second Semester"> Second Semester</option>
                          @elseif ($costanalysis->course['course_programs'] == 'Diploma Hardware Maintenance and Repairs')
                          {{-- <option value="First Semester">First Semester </option> --}}
                          <option value="Second Semester"> Second Semester</option>
                          <option value="Third Semester"> Third Semester</option>
                          {{-- @elseif ($costanalysis->course['course_programs'] == 'Diploma Hardware Maintenance and Repairs') --}}

                          @endif
                         
                          
  
                        </select><br>

                        <select class="form-control" name="level" id="">
                          <label for="">level</label>
                          @if ($costanalysis->course['course_programs'] == 'Diploma in Data Processing')
                          <option value="null">100L</option>
                          @elseif ($costanalysis->course['course_programs'] == 'Diploma Hardware Maintenance and Repairs')
                          <option value="null">100L</option>

                          @elseif($costanalysis->course['course_programs'] == 'Diploma Hardware Maintenance and Repairs')
                          {{-- <option value="First Semester">First Semester </option> --}}
                          <option value="Second Semester"> Second Semester</option>
                          <option value="Third Semester"> Third Semester</option>
                          @endif 
  
                        </select><br>


                          <input type="hidden" name="course_id" value="{{ $costanalysis->course['id'] }}" placeholder="" />
                          <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}" placeholder="" />
                          {{-- <input type="text" name="level" value="{{ $costanalysis->course['level'] }}" placeholder="Level" /> --}}
                          <input type="hidden" name="course_programs" value="{{ $costanalysis->course['course_programs'] }}" placeholder="course_Amount" />

                          <input type="hidden" name="course_period" value="{{ $costanalysis->course['course_period'] }}" placeholder="course_period" />
                          {{-- <input type="hidden" name="course_contents" value="{{ $costanalysis->course_contents }}" placeholder="course_period" /> --}}
                          <input type="hidden" name="course_code" value="{{ $costanalysis->course['course_code'] }}" placeholder="course_period" />
                          <input type="hidden" name="slug" value="{{ $costanalysis->course['slug'] }}" placeholder="course_period" />
                          <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_period" />
                          
                          <input type="hidden" name="courseimages" value="{{ $costanalysis->course['courseimages'] }}" placeholder="course_period" />
  
                          <input type="hidden" name="email" value="{{ Auth::guard('student')->user()->email }}"  type="email" placeholder="Your Email" />
                          <input type="hidden" name="phone" value="{{ Auth::guard('student')->user()->phone }}" type="tel" placeholder="Phone number" />
                          {{-- <input type="hidden" name="student_surname" value="{{ Auth::guard('student')->user()->surname }}" placeholder="course_Amount" /> --}}
                          
                          <input class="btn btn-success" type="submit" value="Pay Now!" />
                      </form>

                       </div>
                     </div>
                   </div>
                  
                   </div>
             


                    <div class="mt-4">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            View All
                        </button>
                     
                    </div>
                    
                </div>
                </div>
                <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                   
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {!! $costanalysis->course['course_contents'] !!}</div>
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
              <h4 class="modal-title">₦ {{ $costanalysis->course['course_amount'] }} {{ $costanalysis->course['course_programs'] }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form action="{{ url('student/registeranotherprograme') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                              <p>Course period</p>
                              <input type="text" class="form-control" value="{{ $costanalysis->course['course_period'] }}" name="course_period" id="" placeholder="Course Title">
                          </div>
                          
                          <div class="form-group">
                            <p>Course Program</p>
                            <input type="text" class="form-control" value="{{ $costanalysis->course['course_programs'] }}" name="course_programs" id="" placeholder="Course Title">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        
                      
                        <div class="form-group">
                          <p>Course course_Amount</p>
                          <input type="text" class="form-control" value="{{ $costanalysis->course['course_amount'] }}" name="course_amount" id="" placeholder="Course Title">
                      </div>
                        <div class="modal-footer justify-content-between">
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                      
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