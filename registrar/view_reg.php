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
			<?php include('reg_option.php'); ?>
			<hr>
			</div>
			<div class="span2">
			<div id="add">
							
						
							
							
			</div>
			</div>
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Course No.</th>
                                        <th width="300">Course Title   </th>
                                        <th>Credit Hours</th>                                 
                                        <!--  <th>Letter Grade</th>   
                                        <th>Grade Point</th>       
                                        
                                       <th class="act"></th>       
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>   
                                                                                                                      
                                      --> 
                                       <th>Term</th>                                                                                 
                                        <th>Year Level</th>   
                                       <th>Session</th>   
                                       <th>Remarks</th>       
                                      <th>Action</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                 
                                 
  <?php  $user_query=mysql_query("select * from registration where student_no ='$student_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id = $row['reg_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = mysql_query("select * from subject where code = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>  
                                                                
                                 
																
                                    <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    
							 <td><?php echo $row['session']; ?></td>    
								
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
								
						
								</tfoot>
                            </table>
							
							
					
<hr>
							
							
							
							
					
							

              
						
							
					
							
									
					
                
			
			
			</div>		
		
							
							
							
							
		
			</div>

		</div>
					
    </div>
	
<?php include('footer.php') ?>



	<div class="registrar">
	
			</div>