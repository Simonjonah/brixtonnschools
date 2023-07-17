
   @include('dashboard.student.header')

   @include('dashboard.student.sidebar')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0 text-dark">Dashboard</h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard </li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
    <section class="content">
      <h2>Dear {{ Auth::guard('student')->user()->fname }} continue your registration</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                
                    </div>
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal" action="{{ url('student/updatestudentstudent3rdreg/'.Auth::guard('student')->user()->ref_no) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
                        
                        
                       
                        <h4>Additional Qualification (OND, HND, B.sc, NCE etc )</h4>
                       <div class="form-group col-12">
                        <label for="">Study area (Optional)</label>
                        <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->studyarea }}" name="studyarea" id="contact-phone" placeholder="study area ">
                      </div>
                      <div class="form-group col-12">
                        <label for="">Institution Name</label>
                        <input class="form-control" type="text" value="{{  Auth::guard('student')->user()->institname }}" name="institname" id="contact-phone" placeholder="institution Name">
                    </div>
                    <div class="form-group col-12">
                      <label for="">Grade Pass</label>
                      <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->gradepass }}" name="gradepass" id="contact-phone" placeholder="Grade Pass">
                    </div>
                   
                        
                    <div class="form-group col-12">
                        <label for="">Study year</label>
                        <input class="form-control" type="text" value="{{ Auth::guard('student')->user()->studyear }}" name="studyear" id="contact-phone" placeholder="Study Year">
                    </div>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                  
                      </div>
                      <div class="tab-pane" id="settings">
    
                        <div class="form-group col-12">
                            <label for="">Sponsor Name</label>
                            <input class="form-control" required type="text" value="{{ Auth::guard('student')->user()->sponsorname }}" name="sponsorname" id="contact-phone" placeholder="sponsorname">
                          </div>
                          <div class="form-group col-12">
                              <label for="">Sponsor Address</label>
                              <input class="form-control" required type="text" value="{{ Auth::guard('student')->user()->sponsoraddress }}" name="sponsoraddress" id="contact-phone" placeholder="Sponsor Address">
                          </div>


                        <img class="image rounded-circle" src="{{ asset('/public/../'.Auth::guard('student')->user()->additionalquali)}}" alt="additional_qualification" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
        
                        <div class="form-group row">
                          <label for="inputName2"  class="col-sm-2 col-form-label">Additional Qualification</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="additionalquali" id="inputName2" placeholder="profileimage">
                          </div>
                        </div>
                           

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
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
 

    
    <!-- /.content -->
  </div>
  @include('dashboard.student.footer')