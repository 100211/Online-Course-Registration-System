<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$course  = $row['course'];


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
								<th>Pre-Requisites</th> 										
                                        <th>Unit</th>                                 
                                        <th>Year Level</th>                                 
                                        <th>Term</th>                                 
                                                              
                                        <th></th>                                 
                                                              
                                 
                                    </tr>
                                </thead>
                                <tbody>
								<?php 

								if (isset($_POST['sort']))
								{
									$year = $_POST['year'];
									$term = $_POST['term'];
								
									$courses = mysql_query("select * from course where code = '$course' LIMIT 1 ")or die(mysql_error());
                                  	$course_id =mysql_fetch_array($courses)['course_id'];
		
								  	$user_query = mysql_query("select * from subject where course_id = '$course_id' and term = '$term' and year = '$year' ")or die(mysql_error());
									
									while($row1 = mysql_fetch_array($user_query))
									{
										$id=$row1['subject_id']; 
										$course_id=$row1['course_id']; 
										
										$course_query = mysql_query("select * from course where course_id = '$course_id' ")or die(mysql_error());
										$course_row = mysql_fetch_array($course_query);
									?>
									

									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row1['code']; ?></td> 
                                    <td><?php echo $row1['title']; ?></td> 
									     
								<td><?php echo $row1['pre_requisites']; ?>
											<?php $pre = $row1['pre_requisites']; ?>	
											<?php $code = $row1['code']; 	?>	
											
                                    <td><?php echo $row1['unit']; ?></td> 
                                    <td><?php echo $row1['year']; ?></td> 
                                    <td><?php echo $row1['term']; ?></td> 
                 
                         
                           
											
											
											
								
									
										
													
									 </td> 
									 
									 	<td width="150">
									<?php
												
									$code1 = mysql_query("select * from subject where code  = '$code'")or die(mysql_error());
									$code_row = mysql_fetch_array($code1);
									$code_count = mysql_num_rows($code1); 
									
									$test_id1 = $code_row['subject_id'];
									
								$code = $code_row['code'];
								
									
			
			
									
									$t = mysql_query("select * from subject where code  = '$pre'")or die(mysql_error());
									$trow = mysql_fetch_array($t);
							
									$test_id = $trow['subject_id'];
									
												
		$grade_query2 = mysql_query("select * from grade where subject_id = '$test_id' and student_id = '$session_id' and remarks <> 'Failed'  ")or die(mysql_error());
									$count2 = mysql_num_rows($grade_query2);

									
									
									$grade_query = mysql_query("select * from grade where subject_id = '$test_id' and student_id = '$session_id' and remarks = 'Failed' ")or die(mysql_error());
									$grade_row = mysql_fetch_array($grade_query);
									$count = mysql_num_rows($grade_query);
								
								
								
									$grade_query1 = mysql_query("select * from grade where subject_id = '$test_id' and student_id = '$session_id' and remarks <> ''  ")or die(mysql_error());
									$count1 = mysql_num_rows($grade_query1);
								
							
									$grade_query3 = mysql_query("select * from grade where subject_id = '$test_id1' and student_id = '$session_id' and remarks <> 'Failed'  ")or die(mysql_error());
									$count3 = mysql_num_rows($grade_query3); 
									
									$grade_query4 = mysql_query("select * from grade where subject_id = '$test_id1' and student_id = '$session_id' and remarks = 'Failed'  ")or die(mysql_error());
									$count4 = mysql_num_rows($grade_query4); 
									$r4 = mysql_fetch_array($grade_query4);
									
									
	
								if ($count1 > 0){
									echo $code." ".'Not Taken'; 
									?>
									 
								<?php }else if ($count > 0){ ?>
									
								<strong class="red">Cannot Enroll in this Subject you   	<?php echo $grade_row['remarks']; ?> in <?php echo $pre; ?> </strong>
									</td>
									
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php }else if ($count4 > 0){
									echo $r4['remarks'];	
									?>
									
									
									<?php 
									}else if($count3 >0 ){
									
									?>
								PASS
									<?php
								
									 }else{
										echo $code." ".'Not Taken'; 
									
									} ?>
									<?php } }?>
                           
                           
                                </tbody>
                            </table>
				</div>
			
	
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>