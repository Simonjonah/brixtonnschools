@include('dashboard.header')
@include('dashboard.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>Subjects </h1> --}}
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
                        {{-- <small class="float-right">{{ $view_student->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <img style="width: 250px; height: 50px;" src="{{ asset('images/sch14.jpg') }}" alt=""> <br>

                  {{-- <address>
                    <strong>BRIXTONN SCHOOLS</strong><br>
                    @if ($view_student->centername == 'Uyo')
                    13 F-Line Ewet Housing Estate, Uyo <br>
                    Akwa Ibom State, Nigeria <br>
                    Website: brixtonnschools.com.ng
                    @else
                    No. 4 Julius Nyerere Crescent, <br>  Abuja 
                    Nigeria 
                    @endif
                    <br>
                  </address> --}}
                </div> 
                <!-- /.col -->
               <div class="col-sm-4 invoice-col">
                   {{-- To --}}
                   {{-- <address>
                    Name: <strong>{{ $view_student->surname }}, {{ $view_student->fname }} {{ $view_student->middlename }}</strong><br>
                    Gender: {{ $view_student->gender }}<br>
                    Phone: {{ $view_student->phone }}<br>
                    Email: {{ $view_student->email }}<br>
                    Admission ID: {{ $view_student->regnumber }}<br>
                    Session: {{ $view_student->academic_session }}<br>
                    Entry Level: {{ $view_student->entrylevel }}<br>
                    Center Name: {{ $view_student->centername }}<br> --}}

                  </address>
                </div>
                <!-- /.col -->
                {{-- <div class="col-sm-4 invoice-col">
                    <img style="width: 70%; height: 150px;" src="{{ URL::asset("/public/../$view_student->images")}}" alt="">
                </div> --}}
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
              
                  <table class="table table-striped">
                      <thead>
                      <tr>
                        {{-- <th>S/N</th> --}}
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Surname</th>
                        <th>Subjects</th>
                        <th>Ca 1</th>
                        <th>Ca 2</th>
                        <th>Ca 3</th>
                        <th>Exams</th>
                        <th>Total</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($view_myresult_results as $view_myresult_result)
                          <tr>
                              <td>{{ $view_myresult_result->user['fname'] }}</td>
                              <td>{{ $view_myresult_result->user['middlename'] }}</td>
                              <td>{{ $view_myresult_result->user['surname'] }}</td>
                              <td>{{ $view_myresult_result->subjectname }}</td>
                              <td>{{ $view_myresult_result->test_1 }}</td>
                              <td>{{ $view_myresult_result->test_2 }}</td>
                              <td>{{ $view_myresult_result->test_3 }}</td>
                              <td>{{ $view_myresult_result->exams }}</td>
                              <td>{{ $view_myresult_result->test_1  + $view_myresult_result->test_2  + $view_myresult_result->test_3  + $view_myresult_result->exams }}</td>
                              <td>@if ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 69)
                                <p>A</p>
                               
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 59)
                                <p>B</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 49)
                                <p>C</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 44)
                                <p>D</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 40)
                                <p>E</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 39)
                                <p>F</p>
                                @else
                                <p>F</p>
                              @endif</td>
        
                              <td>@if ($view_myresult_result->test + $view_myresult_result->exams > 69)
                                <p>An Excellent Performance </p>
                               
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 59)
                                <p>A good Performance</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 49)
                                <p>A fair performance</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 44)
                                <p>A Poor performance.</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 40)
                                <p>A Poor performance.</p>
                                @elseif ($view_myresult_result->test_1 + $view_myresult_result->test_2 + $view_myresult_result->test_3 + $view_myresult_result->exams > 39)
                                <p>A Poor performance.</p>
                                @else
                                <p>A Poor performance.</p>
                              @endif</td>
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
          
        
          {{-- @endif --}}
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  {{-- <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
                    Submit 
                  </button>
                 --}}
                  {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button> --}}

                </form>
                  {{-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> --}}
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



















    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <div class="table-responsive">
              {{-- <p class="lead">Behaviour</p> --}}

              {{-- <form action="{{ url('web/createpsychomotor/'.$view_student->ref_no) }}" method="post">
                @csrf --}}
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:50%">BEHAVIOUR:</th>
                      <th style="width:50%">A</th>
                      <th style="width:50%">B</th>
                      <th style="width:50%">C</th>
                      <th style="width:50%">D</th>
                      <th style="width:50%">E</th>
                    </tr>
                    {{-- <td><input type="hidden" name="user_id" value="{{ $view_student->id }}" id=""></td> --}}

                    <tr>
                      <th>Punctuality</th>
                      {{-- @if ($psycomotor) --}}
                      <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                      <h5><i class="icon fas fa-check"></i> Alert!</h5> 
                      {{-- @else
                        
                      @endif --}}
                      {{-- <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                      <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                      <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                      <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                       --}}
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
                      <th>Neatness</th>
                
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