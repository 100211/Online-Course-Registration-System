							<?php include('add_grade_modal.php') ?>
							<?php if ($student_status == 'Irregular'){?>
							<p><a href="#add_grade_advance" data-toggle="modal"  class="btn"><i class="icon-plus"></i>&nbsp;Subject with  Pre Requisites</a></p>
							<?php include('add_grade_advance_modal.php') ?>
							<?php }else if ($student_status == 'Regular'){ ?>
							<p><a href="#add_grade" data-toggle="modal"  class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Subject for Regular Students</a></p>
					
							
							<?php }

							if($student_status == 'Irregular'){							?>
							
							<p><a href="#add_grade_advance1" data-toggle="modal"  class="btn btn-warning"><i class="icon-plus"></i>&nbsp;Subject with no Pre Requisites</a></p>
								<?php include('add_grade_advance_modal1.php') ?>
							<?php } ?>