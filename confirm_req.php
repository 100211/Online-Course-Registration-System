<div id="confirm<?php echo @$session_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-body">
<div class="alert alert-info"><p>Are you sure you want to confirm this ?</p></div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="confirm.php<?php echo '?id='.@$session_id; ?>" class="btn btn-primary"><i class="icon-check icon-large"></i>&nbsp;Yes</a>
</div>
</div>