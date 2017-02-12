<form method="POST" action="sort_s.php">

			<input type="hidden" name="student_id" value="<?php echo $get_id; ?>">
			<div class="span">
			<div class="sort"><i class="icon-filter icon-large"></i>&nbsp;FILTER Subjects</div>
			</div>
			<div  class="span">
				<label>Year Level</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select" name="school_year" required>
					<option></option>
					<option value="1">First Year</option>
					<option value="2">Second  Year</option>
					<option value="3">Third Year</option>
					<option value="4">Fourth Year</option>
				</select>
			</div>
				<div class="span">
					<label>Term</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select1"  name="semester" required>
					<option></option>
					<option value="1">1st</option>
					<option value="2">2nd</option>
				</select>
			</div>
            
       <div class="span">
					<label>Status</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select1"  name="status" required>
					<option></option>
					<option value="1">Completed</option>
					<option value="3">Uncompleted</option>
                    <option value="2">Unable to take</option>
				</select>
			</div>
               
              
			<div class="span">
			<div class="sort_button">
			<button rel="tooltip"  data-placement="bottom" title="Click here to submit" id="sort"  name="sort" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
			</div>
			</div>
			</form>