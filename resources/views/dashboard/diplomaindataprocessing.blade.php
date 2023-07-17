<div class="col-sm-4">
    <label>Course Title</label>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <input type="checkbox" value="{{ $view_diplomacourse->id }}" name="course_ids[]">
              
            </span>
          </div>
           <label for="">{{ $view_diplomacourse->course_title1 }}</label>
           <label for="">{{ $view_diplomacourse->course_programs }}</label>
           <label for="">{{ $view_diplomacourse->programname }}</label>


        </div>
      </div>
  </div> 
  <div class="col-sm-4">
    <label>Course Code</label>
    <div class="form-group">
      <label>{{ $view_diplomacourse->course_code1 }}</label>
    </div>
  </div>

  <div class="col-sm-4">
    <label>Credit Unit</label>
    <div class="form-group">
      <label>{{ $view_diplomacourse->credit_unit1 }}</label>
    </div>
  </div>