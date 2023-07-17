<div class="col-sm-4">
    <label>Course Title</label>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
          
              <input type="checkbox" value="{{ $disall_subject->id }}" name="course_ids[]">
            </span>
          </div>
           <label for="">{{ $disall_subject->course_title1 }}</label>

        </div>
      </div>
  </div> 
  <div class="col-sm-4">
    <label>Course Code</label>
    <div class="form-group">
      <label>{{ $disall_subject->course_code1 }}</label>
      
    </div>
  </div>

  <div class="col-sm-4">
    <label>Credit Unit</label>
    <div class="form-group">
      <label>{{ $disall_subject->credit_unit1 }}</label>
    </div>
  </div>