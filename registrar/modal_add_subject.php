	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
		<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level</label>
				<div class="controls">
				<select name="year" required>
				<option></option>
				<option value="1">First Year</option>
				<option value="2">Second Year</option>
				<option value="3">Third Year</option>
				<option value="4">Fourth Year</option>
				</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Term</label>
				<div class="controls">
				<select name="term" required>
					<option></option>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<!-- <option>Third</option>
					<option>Fourth</option> -->
				</select>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="inputEmail">Course No.</label>
				<div class="controls">
				<input type="text"  name="code" placeholder="Course No" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Subject Title</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Subject Title" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Credit Hours</label>
				<div class="controls">
                
                <select name="unit" id="inputPassword" required>
					<option></option>
          <option value="4.00">4.00</option>
          <option value="3.00">3.00</option>
          <option value="2.00">2.00</option>
          <option value="1.50">1.50</option>
          <option value="0.75">0.75</option>
					<!-- <option>Third</option>
					<option>Fourth</option> -->
				</select>
				
				</div>
			</div>
		
				<div class="control-group">
				<label class="control-label" for="inputPassword">PRE-REQUISITE(S)</label>
				<div class="controls">
                
                
                <select name="pre_requisites" id="inputPassword" >
									<option></option>
									<?php 
									$course_query = mysql_query("select * from subject") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option value="<?php echo $course_row['subject_id']; ?>"><?php echo $course_row['code']; ?></option>
									<?php  } ?>
									</select>
                
				</div>
			</div>
            
			<div class="control-group">
				<label class="control-label" for="inputPassword">Department</label>
				<div class="controls">
						<select name="course" required>
									<option></option>
									<?php 
									$course_query = mysql_query("select * from course") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option value="<?php echo $course_row['course_id']; ?>"><?php echo $course_row['code']; ?></option>
									<?php  } ?>
									</select>
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
	$code=$_POST['code'];
	$title=$_POST['title'];
	$unit=$_POST['unit'];
	$year=$_POST['year'];
	$term=$_POST['term'];
	$course=$_POST['course'];
	$pre_requisites=$_POST['pre_requisites'];
	
	mysql_query("insert into pre_req (select_sub,req_sub) 
	values('$code','$pre_requisites')")or die(mysql_error());
	
	mysql_query("insert into subject (code,title,unit,year,term,pre_requisites,course_id) 
	values('$code','$title','$unit','$year','$term','$pre_requisites','$course')")or die(mysql_error());
	}
	?>