<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];
$school_year = $row['year_level'];
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Course No.</th>
                                        <th  width="250">Course Title</th>
                                        <th  width="100">Credit Hours</th>                                 
                                        <th>Grade Point</th> 
                                        <th>Letter Grade</th>                                                                                  
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>                                                                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from result where student_id = '$session_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['Letter_Grade'];
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
                                    <td><?php  if($row['Grade_Point']=="4") echo $row['Grade_Point']="4.00"; elseif($row['Grade_Point']=="0") echo $row['Grade_Point']="0.00"; else echo  $row['Grade_Point']   ; ?></td>   
                                    <td><?php echo $row['Letter_Grade']; ?></td>                                                                             
                                    <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    
									<td><?php echo $row['remarks']; ?></td> 	
									
								 	
                                                                                                       
								
                             
									
                                    </tr>
									<?php  }}  ?>
                           
                                </tbody>
                            </table>
								<!--<?php include('units_table.php'); ?>
								<?php include('gwa_table.php'); ?>
								<?php include('cwa_table.php'); ?>-->
				</div>
			
				<?php include('grading_system.php') ?>
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>