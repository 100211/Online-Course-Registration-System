<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
	
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
			<?php
			$student_query=mysql_query("select * from students where student_no ='$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
			$school_year = $row['year_level'];
			$term = $row['term'];
			$student_status = $row['student_status'];
		$student_id= $row['student_no'];
			?>
			<div class="name">
				<span>STUDENT ROLL:&nbsp;<strong><?php echo $row['student_no']; ?></strong></span>
				<span>STUDENT NAME:&nbsp;<strong><?php echo $row['firstname']." ".$row['lastname']; ?></strong></span>
				<span>COURSE:&nbsp;<strong><?php echo $row['course']; ?></strong></span>
				<span id="print_right">
				<span><?php echo $row['year_level']; ?> :<strong> <?php echo $row['term']; ?> &nbsp;term</strong></span>
				<span>Status:<strong><?php echo $row['status']; ?> </strong></span>
				</span>
			</div>
		
			
			<hr>
			<?php include('grade_option.php'); ?>
			<hr>
			</div>
			<div class="span2">
			<div id="add">
							
							<?php include('add_grade_button.php'); ?>
							
							
			</div>
			</div>
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Course No.</th>
                                        <th width="300">Course Title   </th>
                                        <th>Credit Hours</th>                                 
                                        <th>Letter Grade</th>   
                                        <th>Grade Point</th>       
                                        <th>Remarks</th>       
                                       <!--  <th class="act"></th>       
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>                                                                                 
                                      -->  <th>Action</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                 
                                 
  <?php  $user_query=mysql_query("select * from result where student_id ='$student_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id = $row['grade_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['sub_code'];
									/* subject */
									$subject_query = mysql_query("select * from subject where code = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>  
                                     <td><?php echo $row['Letter_Grade']; ?></td>                                   
                                    <td width="100">
										<?php if($row['Grade_Point']=="4") echo $row['Grade_Point']="4.00"; elseif($row['Grade_Point']=="0") echo $row['Grade_Point']="0.00"; else echo  $row['Grade_Point']   ; ?>
									</td>   
                                   
									<!--									
                                    <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    
									-->
								
									 <td><?php echo  $row['remarks']; ?></td>
									 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="act" width="100">
									
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_grade_modal.php'); ?>
										<a href="#edit_student<?php echo $id; ?>" data-toggle="modal"   rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										<?php include('edit_grade.php'); ?>
                                    </td>
									
                                    </tr>
									<?php  }}  ?>
									
									
								
                                </tbody>
								<tfoot>
							<!--	<?php include('units_table.php'); ?>
									<?php include('gwa_table.php'); ?>
									<?php include('cwa_table.php'); ?> -->
						
								</tfoot>
                            </table>
							
							
					
<hr>
							
							
							
							
					
							

              
						
							
					
							
									
					
                
			
			
			</div>		
		
							
							
							
							
		
			</div>
<?php include('grading.php'); ?>
		</div>
					
    </div>
	
<?php include('footer.php') ?>



	<div class="registrar">
	
			</div>