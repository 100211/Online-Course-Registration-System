	<div id="delete_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Are you Sure you want to Confirm this Data?</div>
			<form method="post" action="confirm_reg.php">
			<input type="hidden" name="get" value="<?php echo $get_id; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
		
			
		</div>
		<div class="modal-footer">
			<button name="delete" class="btn btn-primary"><i class="icon-check icon-large"></i>&nbsp;Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
			</form>
    </div>
	
