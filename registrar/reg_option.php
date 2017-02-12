<div class="test123">
	<form method="POST" action="sort_reg.php<?php echo '?id='.$get_id ?>">
			<input type="hidden" name="student_id" value="<?php echo $get_id; ?>">
			<div class="span1">
			<h4>FILTER </h4>
			</div>
				<div  class="span">
				<label>Year Level</label>
				<select id="select" name="school_year" required>
					<option></option>
					<option value="1">First Year</option>
					<option value="2">Second  Year</option>
					<option value="3">Third Year</option>
					<option value="4">Fourth Year</option>
				</select>
			</div>
			<div class="span">
					<label>Term</label>
				<select id="select1" name="semester" required>
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
			<button id="sort" name="sort" class="btn btn-info"><i class="icon-check"></i>Submit</button>
			<a name="sort" href="view_reg.php<?php echo '?id='.$get_id; ?>" class="btn btn-info" ><i class="icon-search"></i>&nbsp;View All</a>
				<button name="sort" onClick="window.print()";   class="btn btn-info" ><i class="icon-print"></i>&nbsp;Print</button>
			</div>
			</form>
			</div>
	
	