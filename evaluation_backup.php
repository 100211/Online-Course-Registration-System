<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$course  = $row['course'];
$year_level = $row['year_level'];

 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option_evaluation.php'); ?>
				
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
				           <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                               
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Subject Title</th>                                 
                                        <th>Unit</th>                                 
                                        <th>Year Level</th>                                 
                                        <th>Term</th>                                 
                                        <th>Pre-Requisites</th>                                 
                                        <th></th>                                 
                                                              
                                 
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

                                  	$courses = mysql_query("select * from course where code = '$course'  LIMIT 1 ")or die(mysql_error());
                                  	$course_id =mysql_fetch_array($courses)['course_id'];
									
                                  	$user_query=mysql_query("select * from subject where course_id = $course_id and year = '$year_level' ")or die(mysql_error());
									while($row1=mysql_fetch_array($user_query))
									{
										$id=$row1['subject_id']; 
										$course_id=$row1['course_id']; 
										
										$course_query = mysql_query("select * from course where course_id = $course_id ")or die(mysql_error());
										$course_row = mysql_fetch_array($course_query);
									
									?>
									

									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row1['code']; ?></td> 
                                    <td><?php echo $row1['title']; ?></td> 
                                    <td><?php echo $row1['unit']; ?></td> 
                                    <td><?php echo $row1['year']; ?></td> 
                                    <td><?php echo $row1['term']; ?></td> 
									
									 <td><?php echo $row1['pre_requisites']; ?>
											<?php $pre = $row1['pre_requisites']; ?>	
													
									 </td> 
									 
									 	<td width="150">
									<?php
									
									
									$t = mysql_query("select * from subject where code  = '$pre'")or die(mysql_error());
									$trow = mysql_fetch_array($t);
							
									$test_id = $trow['subject_id'];
									/* echo  $test_id;
									echo  $session_id; */
									
									$grade_query = mysql_query("select * from grade where subject_id = '$test_id' and student_id = '$session_id' and remarks = 'Failed' or 
									subject_id = '$test_id' and student_id = '$session_id' and remarks = 'DROP' or
									subject_id = '$test_id' and student_id = '$session_id' and remarks = 'INC'
									
									")or die(mysql_error());
									$grade_row = mysql_fetch_array($grade_query);
									$count = mysql_num_rows($grade_query);
								
									
									
									

							
								
								if ($count > 0){
									
									?>
									 	<strong class="red">Cannot Enroll in this Subject you   	<?php echo $grade_row['remarks']; ?> in <?php echo $pre; ?> </strong>
								<?php } ?>
									</td>
							
                                   
                         
							
                                
									
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
				</div>

				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>