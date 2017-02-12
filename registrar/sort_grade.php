<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php 
	$get_id = $_GET['id']; 
	$school_year = $_POST['school_year'];
	$semester = $_POST['semester'];
	$session =  $_POST['session'];	
$student_query=mysql_query("select * from students where student_no = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
	

	$student_id = $row['student_no'];
	$student_pic = $row['photo'];
	
	$_SESSION['roll_no']=$student_id;
	
	$_SESSION['pic']=$student_pic;
	$_SESSION['name1']=$row['firstname'];
	$_SESSION['name2']=$row['lastname'];
	
	//$get_id = $student_id;
?>
    <div class="container">
		
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
			<?php
			$student_query=mysql_query("select * from students where student_no = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
				//$school_year = $row['year_level'];
			$term = $row['term'];
			$student_status = $row['status'];
			?>
	
				<div class="name">
				<span>STUDENT ROLL:&nbsp;<strong><?php echo $row['student_no']; ?></strong></span>
				<span>STUDENT NAME:&nbsp;<strong><?php echo $row['firstname']." ".$row['lastname']; ?></strong></span>
				<span>COURSE:&nbsp;<strong><?php echo $row['course']; ?></strong></span>
				<span id="print_right">
				<span>Year &nbsp;<?php echo $row['year_level']; ?> :<strong> <?php echo $row['term']; ?> &nbsp; term</strong></span>
				<span>Status:<strong><?php echo $row['status']; ?> </strong></span>
				</span>
			</div>
			<hr>
			<?php include('grade_option.php'); ?>	
			<hr>
            
            
            
			</div>
            
			<div class="span2">
			<div id="add">
						<hr>Year:<strong><?php $_SESSION['year1']=$school_year; echo $school_year; ?></strong></hr>
            <hr>Term:<strong><?php $_SESSION['term1']=$semester; echo $semester; ?></strong></hr>	
            
            
            <hr>Session:<strong><?php $user_query = mysql_query("select * from result where student_id = '$student_id' and term like '%$semester%' and year like '%$school_year%' and session like '%$session%'  ")or die(mysql_error()); $row = mysql_fetch_array($user_query); $_SESSION['session1']=$row['session']; echo $row['session']; ?></strong></hr>	
           
           
            <?php     $total_credit = 0.00;
			 $earned_credits = 0.00;
				 $tgpa1=0.00;
			$tgpa=0.00;

			 
			 $var = mysql_query("select * from result where student_id = '$student_id' and term = '$semester' and year = '$school_year' and session like '%$session%' ");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["unit"]+$total_credit;
			   $total_credit=number_format($total_credit, 2);
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credits = $ary["unit"]+ $earned_credits;
				    $earned_credits=number_format($earned_credits, 2);
				 }
				 $tgpa1 = $ary["unit"]*$ary["Grade_Point"]+$tgpa1;
				
				//sprintf ("%.2f", $final );
				

				 
			
				if($earned_credits!=0||$earned_credits!=0.00)
				 {
				    $tgpa = $tgpa1/$earned_credits;
					$tgpa=round($tgpa,2);
					}
					
					
			 }
			    ?>
                
                
             <hr> <input onclick="window.location.href='ex_result_admin.php'" type="button" value="Get PDF  "/> </hr>    
            
							<?php include('add_grade_button.php'); ?>
			</div>
			</div>
			<div class="span10">
            
            
            
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th>Course No.</th>
                                        <th>Course Title   </th>
                                        <th>Credit Hours</th>                                 
                                        <th>Letter Grade</th>                                           
                                         <th>Grade Point</th>                                                                                                                        
                                        <th>Remarks</th>                                                                                                                                                                    
                                        <th class="act">Action</th>                                                                                                                                                                    
                                                                                                          
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                          <?php  $user_query=mysql_query("select * from result where student_id = '$student_id' and year = '$school_year' and term = '$semester' and session like '%$session%' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['grade_id'];
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
									
									
									
								 <td><?php echo $remarks; ?></td> 
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
								<!--	<?php include('sort_unit_table.php'); ?>
									<?php include('sort_gwa_table.php'); ?>
									<?php include('cwa_table.php'); ?> -->
						
								</tfoot>
                            </table>
							<div align="center">  <p><span class="red">Credit Hours Taken :<?php   echo "$total_credit";?></span></p>
               <p><span class="red">Earned Credit Hours In This Term :<?php $earned_credits; echo "$earned_credits";?></span></p>
                <p><span class="red">TGPA :<?php $tgpa; echo " $tgpa";?></span></p>		</div>
			
			</div>		
			</div>
            <?php include('grading.php'); ?>
		</div>
    </div>
<?php include('footer.php') ?>


			<div class="registrar">
			<p>Maelyn Tabujara</p>
			<p>Associate Registrar</p>
			</div>