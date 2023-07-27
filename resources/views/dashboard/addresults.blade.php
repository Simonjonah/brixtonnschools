@include('dashboard.header')
@include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <small class="float-right">{{ $view_studentsubject->created_at->format('D d, M Y, H:i')}}</small>
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <img style="width: 250px; height: 50px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                  <address>
                    <strong>BRIXTONN SCHOOLS</strong><br>
                    @if ($view_studentsubject->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo <br>
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address>
                </div> 
                <!-- /.col -->
               <div class="col-sm-4 invoice-col">
                   To
                   <address>
                    Name: <strong>{{ $view_studentsubject->surname }}, {{ $view_studentsubject->fname }} {{ $view_studentsubject->middlename }}</strong><br>
                    Gender: {{ $view_studentsubject->gender }}<br>
                    Phone: {{ $view_studentsubject->phone }}<br>
                    Email: {{ $view_studentsubject->email }}<br>
                    Admission ID: {{ $view_studentsubject->regnumber }}<br>
                    Session: {{ $view_studentsubject->academicsession }}<br>
                    Entry Level: {{ $view_studentsubject->entrylevel }}<br>
                    Entry Level: {{ $view_studentsubject->centername }}<br>

                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <img style="width: 70%; height: 150px;" src="{{ URL::asset("/public/../$view_studentsubject->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  @if ($view_studentsubject->section === 'Primary' || $view_studentsubject->section === 'Creche' || $view_studentsubject->section === 'Pre-School' || $view_studentsubject->section === 'Preparatory' || $view_studentsubject->section === 'Nursery' || $view_studentsubject->section === 'Primary')
                      <form action="" method="post">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              {{-- <th>S/N</th> --}}
                              <th>Subjects</th>
                              <th>Ca 1</th>
                              <th>Ca 2</th>
                              <th>Ca 3</th>
                              <th>Exams</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($view_subjects as $view_subject)
                                <tr>
                                    <td><input type="text" name="subjectname" value="{{ $view_subject->subject['subjectname'] }}" placeholder="Subjects"></td>
                                    <td><input type="number" class="form-control" name="test_1" placeholder="Test 1"></td>
                                    <td><input type="number" class="form-control" name="test_2" placeholder="Test 2"></td>
                                    <td><input type="number" class="form-control" name="test_3" placeholder="Test 3"></td>
                                    <td><input type="number" class="form-control" name="exams" placeholder="Exams"></td>
                                  </tr>
                                @endforeach
                            

                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <div class="table-responsive">
                    {{-- <p class="lead">Behaviour</p> --}}
                    <table class="table table-bordered">
                      <tr>
                        <th style="width:50%">BEHAVIOUR:</th>
                        <th style="width:50%">A</th>
                        <th style="width:50%">B</th>
                        <th style="width:50%">C</th>
                        <th style="width:50%">D</th>
                        <th style="width:50%">E</th>
                      </tr>
                      <tr>
                        <th>Punctuality</th>
                        <td><input type="number" value="{{ $view_studentsubject->id }}" class="form-control" name="user_id" placeholder="Exams"></td>

                        <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                        <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                        <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                        <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                        <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                        
                      </tr>

                      <tr>
                        <th>Mental Alertness</th>
                       
                        <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>Respect</th>
                       
                        <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>neatness</th>
                  
                        <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>Politeness</th>
                 
                        <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                        
                      </tr>

                      <tr>
                        <th>Honesty</th>
                        
                        <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>Relationship with peers</th>
                 
                        <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>Willingness to learn</th>
                    
                        <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                        
                      </tr>
                      <tr>
                        <th>Team Spirit</th>
                        
                        <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                        
                      </tr>
                    </table>
                    <div class="form-group">
                        <textarea class="form-control" name="teacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  {{-- <p class="lead">PSYCHOMOTOR SKILLS</p> --}}

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">PSYCHOMOTOR SKILLS:</th>
                        <th style="width:50%">A</th>
                        <th style="width:50%">B</th>
                        <th style="width:50%">C</th>
                        <th style="width:50%">D</th>
                        <th style="width:50%">E</th>
                      </tr>
                      <tr>
                        <th>Verbal Skills</th>
                        <td><input type="checkbox" value="Yes" name="verbal1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="verbal2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="verbal3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="verbal4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="verbal5" id=""></td>
                      </tr>
                      <tr>
                        <th>Games and Sports</th>
                        <td><input type="checkbox" value="Yes" name="sports1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="sports2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="sports3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="sports4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="sports5" id=""></td>
                      </tr>

                      <tr>
                        <th>Arts and Craft</th>
                        <td><input type="checkbox" value="Yes" name="arts1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="arts2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="arts3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="arts4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="arts5" id=""></td>
                      </tr>
                      <tr>
                        <th>Creativity</th>
                        <td><input type="checkbox" value="Yes" name="creativity1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="creativity2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="creativity3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="creativity4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="creativity5" id=""></td>
                      </tr>

                      <tr>
                        <th>Music Skills</th>
                        <td><input type="checkbox" value="Yes" name="music1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="music2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="music3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="music4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="music5" id=""></td>
                      </tr>

                      <tr>
                        <th>Dance Skills</th>
                        <td><input type="checkbox" value="Yes" name="dance1" id=""></td>
                        <td><input type="checkbox" value="Yes" name="dance2" id=""></td>
                        <td><input type="checkbox" value="Yes" name="dance3" id=""></td>
                        <td><input type="checkbox" value="Yes" name="dance4" id=""></td>
                        <td><input type="checkbox" value="Yes" name="dance5" id=""></td>
                      </tr>
                     
                    </table>


                 
                  </div>



                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tr>
                        <th style="width:50%"></th>
                        <th style="width:50%">KEY</th>
                        
                      </tr>
                      <tr>
                        <th>A</th>
                        <td>Excellence</td>
                      </tr>
                      <tr>
                        <th>B</th>
                        <td>Very Good</td>
                      </tr>

                      <tr>
                        <th>C</th>
                        <td>Good</td>
                      </tr>
                      <tr>
                        <th>D</th>
                        <td>Needs Improvement</td>
                      </tr>

                      <tr>
                        <th>E</th>
                        <td>Unsatisfactory</td>
                      </tr>
                      
                     
                     
                    </table>


                  </div>
                </div>
                <button type="button" class="btn btn-success"><i class="far fa-bell"></i> Submit
                  Submit 
                </button>
                
                @else
                <form action="{{ url('web/createresults/'.$view_studentsubject->ref_no) }}" method="post">
                  @csrf

                  <table class="table table-striped">
                      <thead>
                      <tr>
                        {{-- <th>S/N</th> --}}
                        <th>Subjects</th>
                        <th>Ca 1</th>
                        <th>Ca 2</th>
                        <th>Ca 3</th>
                        <th>Exams</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($view_subjects as $view_subject)
                          <tr>
                              <td><input type="text" value="{{ $view_subject->subject['subjectname'] }}" name="subjectname[]" id=""></td>
                              <td><input type="number" class="form-control" name="test_1[]" placeholder="Test 1"></td>
                              <td><input type="number" class="form-control" name="test_2" placeholder="Test 2"></td>
                              <td><input type="number" class="form-control" name="test_3" placeholder="Test 3"></td>
                              <td><input type="number" class="form-control" name="exams" placeholder="Exams"></td>
                              
                            </tr>
                          @endforeach
                      

                      </tbody>
                    </table>
                
                  {{-- @else
                      
                @endif --}}
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <div class="table-responsive">
              {{-- <p class="lead">Behaviour</p> --}}
              <table class="table table-bordered">
                <tr>
                  <th style="width:50%">BEHAVIOUR:</th>
                  <th style="width:50%">A</th>
                  <th style="width:50%">B</th>
                  <th style="width:50%">C</th>
                  <th style="width:50%">D</th>
                  <th style="width:50%">E</th>
                </tr>
                <tr>
                  <th>Punctuality</th>
                  <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                  <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                  <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                  <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                  <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                  
                </tr>

                <tr>
                  <th>Mental Alertness</th>
                 
                  <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                  
                </tr>
                <tr>
                  <th>Respect</th>
                 
                  <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                  
                </tr>
                <tr>
                  <th>neatness</th>
            
                  <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                  
                </tr>
                <tr>
                  <th>Politeness</th>
           
                  <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                  
                </tr>

                <tr>
                  <th>Honesty</th>
                  
                  <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                  
                </tr>
                <tr>
                  <th>Relationship with peers</th>
           
                  <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                  
                </tr>
                <tr>
                  <th>Willingness to learn</th>
              
                  <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                  
                </tr>
                <tr>
                  <th>Team Spirit</th>
                  
                  <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                  
                </tr>
              </table>
              <div class="form-group">
                  <textarea class="form-control" name="teacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            {{-- <p class="lead">PSYCHOMOTOR SKILLS</p> --}}

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">PSYCHOMOTOR SKILLS:</th>
                  <th style="width:50%">A</th>
                  <th style="width:50%">B</th>
                  <th style="width:50%">C</th>
                  <th style="width:50%">D</th>
                  <th style="width:50%">E</th>
                </tr>
                <tr>
                  <th>Verbal Skills</th>
                  <td><input type="checkbox" value="Yes" name="verbal1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="verbal2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="verbal3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="verbal4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="verbal5" id=""></td>
                </tr>
                <tr>
                  <th>Games and Sports</th>
                  <td><input type="checkbox" value="Yes" name="sports1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="sports2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="sports3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="sports4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="sports5" id=""></td>
                </tr>

                <tr>
                  <th>Arts and Craft</th>
                  <td><input type="checkbox" value="Yes" name="arts1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="arts2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="arts3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="arts4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="arts5" id=""></td>
                </tr>
                <tr>
                  <th>Creativity</th>
                  <td><input type="checkbox" value="Yes" name="creativity1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="creativity2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="creativity3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="creativity4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="creativity5" id=""></td>
                </tr>

                <tr>
                  <th>Music Skills</th>
                  <td><input type="checkbox" value="Yes" name="music1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="music2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="music3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="music4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="music5" id=""></td>
                </tr>

                <tr>
                  <th>Dance Skills</th>
                  <td><input type="checkbox" value="Yes" name="dance1" id=""></td>
                  <td><input type="checkbox" value="Yes" name="dance2" id=""></td>
                  <td><input type="checkbox" value="Yes" name="dance3" id=""></td>
                  <td><input type="checkbox" value="Yes" name="dance4" id=""></td>
                  <td><input type="checkbox" value="Yes" name="dance5" id=""></td>
                </tr>
               
              </table>


           
            </div>



            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th style="width:50%"></th>
                  <th style="width:50%">KEY</th>
                  
                </tr>
                <tr>
                  <th>A</th>
                  <td>Excellence</td>
                </tr>
                <tr>
                  <th>B</th>
                  <td>Very Good</td>
                </tr>

                <tr>
                  <th>C</th>
                  <td>Good</td>
                </tr>
                <tr>
                  <th>D</th>
                  <td>Needs Improvement</td>
                </tr>

                <tr>
                  <th>E</th>
                  <td>Unsatisfactory</td>
                </tr>
                
               
               
              </table>

             
            </div>

      
          </div>
          <!-- /.col -->         
          @endif
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
                    Submit 
                  </button>
                
                  {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button> --}}

                </form>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.footer')