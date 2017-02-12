	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Course</div>
	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Code</label>
						<div class="controls">
						<input type="hidden"  name="id"  value="<?php echo $row['course_id']; ?>">
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
	
	$course_id=$_POST['id'];
	$code=$_POST['code'];
	$title=$_POST['title'];

	mysql_query("update course set code='$code', title='$title' where course_id='$course_id'")or die(mysql_error()); ?>
	<script>
	window.location="course.php";
	</script>
	<?php
	}
	?>