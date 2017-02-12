				<div id="add_grade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div id="add_grade" class="modal-body">
						<div class="alert alert-info">Add Subject for this Term</div>
				<form class="form-horizontal" method="post">
				<input type="hidden" name="student_id" value="<?php echo $get_id; ?>" /> 
			<?php
			$student_query = mysql_query("select * from students where student_id = '$get_id' ");
			$student_row = mysql_fetch_array($student_query);
			$student_course_id = $student_row['course'];
			$year = $student_row['year_level'];
			$term = $student_row['term'];
	
		
			$course_query = mysql_query("select * from course where code = '$student_course_id'")or die(mysql_error());
			$course_row = mysql_fetch_array($course_query);
			$course_id =  $course_row['course_id'];
			?>
			<div class="control-group">
				
				<div class="controls"> 
				<input type="hidden" name="year" value="<?php echo $year ?>">
				<input type="hidden" name="term" value="<?php echo $term ?>">
				
				<option></option>
				<?php
				$a=0;				
				$query = mysql_query("select * from subject where course_id = '$course_id' and year = '$year' and term = '$term'  ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){ 
				$a++;
				?>
				<input type="hidden" name="code<?php echo $a; ?>" value="<?php echo $row['subject_id']; ?>">
				SUBJECT:&nbsp;&nbsp;<input type="text" class="text1"  value="<?php echo $row['code']; ?>" disabled>
					
			GEN AVE:
				
				<select  class="span1" name="ave<?php echo $a; ?>" required>
		
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>5.00</option>
				<option>0</option>
				<option>DRP</option>
				<option>INC</option>
				<option>PASS</option>
				</select>

		
				<?php
				} 
				?>
				<input type="hidden" name="test" value="<?php echo $a; ?>">
				
				
				
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	
		$student_id=$_POST['student_id'];
		
	$test1 = "code".$b;
	$test2 = "ave".$b;
	$code=$_POST[$test1];
	$ave =$_POST[$test2];
	
	?>
	

	<?php
	$year=$_POST['year'];
	$term=$_POST['term'];
	
	
	$subject_query  = mysql_query("select * from subject where subject_id = '$code' ")or die(mysql_error());
	$subject_row = mysql_fetch_array($subject_query);
	
	$unit =  $subject_row['unit']; 
	
	
	$query = mysql_query("select * from  grade where  subject_id = '$code' and student_id = '$student_id'")or die(mysql_error());
	$count = mysql_num_rows($query);
	
	if ($count > 0){ ?>
	<script>
	alert('Subject Already Added');
	</script>
	<?php
	}else{
	
	
	 if ($ave  == '1.00'){ 
	 mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Excellent')")or die(mysql_error()); 
	 } else if($ave == '1.25'){
	 mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')")or die(mysql_error());
	 }else if($ave == '1.50'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')")or die(mysql_error());
	 }else if($ave == '1.75'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Very Good')")or die(mysql_error());
	 } else if($ave ==  '2.00'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')")or die(mysql_error());	 
	 } else if($ave == '2.25'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')")or die(mysql_error());
	 } else if($ave == '2.55'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Satisfactory')")or die(mysql_error());
	 } else if($ave == '2.75'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')")or die(mysql_error());
	 }else if($ave == '3.00'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Fair')")or die(mysql_error());
	 }else if($ave == '5.00'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')")or die(mysql_error());
	 }else if($ave == '0'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Failed')")or die(mysql_error());
	 }else if($ave == 'INC'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Incomplete')")or die(mysql_error());
	 }else if($ave == 'DRP'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','Officially Dropped')")or die(mysql_error());
	 }else if($ave == 'PASS'){
	mysql_query("insert into grade (subject_id,student_id,school_year,semester,unit,gen_ave,remarks) values('$code','$student_id','$year','$term','$unit','$ave','PASS')")or die(mysql_error());
	 } 
	
		 
		

	}
	
	
	}
	
	 
	}
	?>