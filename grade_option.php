<form method="POST" action="sort_grade.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<div class="span">
			<div class="sort"><i class="icon-filter icon-large"></i>&nbsp;FILTER Result</div>
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
					<label>Session</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select2"  name="session" required>
					<?php 
   for($i = 1998 ; $i < date('Y'); $i++){
   
  
 
							                  //  echo'<option value="'.substr( $i, -2 ).'">'.substr( $i, -2 ).'</option>'; 
							               
   
   $wi=$i . '-'  .substr( $i+1 , -2 );
   
      echo "<option>$wi</option>";
	  
	
   }
   
   
   
?>
				</select>
			</div>
              
			<div class="span">
			<div class="sort_button">
			<button rel="tooltip"  data-placement="bottom" title="Click here to submit" id="sort"  name="sort" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
			</div>
			</div>
			</form>