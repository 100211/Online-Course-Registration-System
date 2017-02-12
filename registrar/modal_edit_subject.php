	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Code</label>
						<div class="controls">
						<input type="hidden"  name="id"  value="<?php echo $row['subject_id']; ?>">
						<input type="text"  name="code" placeholder="Code" required value="<?php echo $row['code']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Couse Title</label>
						<div class="controls">
						<input type="text" name="title"  placeholder="Couse Title" required value="<?php echo $row['title']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Unit</label>
						<div class="controls">
						<input type="text" name="unit" id="inputPassword" placeholder="Unit" required value="<?php echo $row['unit']; ?>">
						</div>
					</div>
					
						<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level</label>
				<div class="controls">
				<select name="year" required>
				<option><?php echo $row['year'] ?></option>
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
					<option><?php echo $row['term']; ?></option>
					<option value="1">1st</option>
					<option value="2">2nd</option>
				
				
				</select>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputPassword">PRE-REQUISITE(S)</label>
				<div class="controls">
				<input type="text" name="pre_requisites" value="<?php echo $row['pre_requisites']; ?>" id="inputPassword" placeholder="PRE-REQUISITE(S)">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Course</label>
				<div class="controls">
						<select name="course" required>
									<?php 
									$course_id = $row['course_id'];
									$course_query = mysql_query("select * from course  ") or die(mysql_error());
					
									?>
									<option value="<?php echo $course_row['code']; ?>"><?php echo $course_row['code']; ?></option>
									<?php   ?>
						
						
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
						<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
						</div>
					</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$subject_id=$_POST['id'];
	$code=$_POST['code'];
	$title=$_POST['title'];
	$unit=$_POST['unit'];
	
	$year = $_POST['year'];
	$term=$_POST['term'];
	$course=$_POST['course'];
	$pre_requisites=$_POST['pre_requisites'];
	
	
	mysql_query("update pre_req set select_sub='$code',req_sub='$pre_requisites'")or die(mysql_error());
	
	mysql_query("update subject set code='$code', title='$title', unit='$unit', term = '$term' , year = '$year' ,  course_id = '$course' , pre_requisites = '$pre_requisites'  where subject_id='$subject_id'")or die(mysql_error()); ?>
	<script>
	window.location="subject.php";
	</script>
	<?php
	}
	?>