<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['status'];
$st_query=mysql_query("select * from students where student_no = '$session_id'")or die(mysql_error());
			$row1 = mysql_fetch_array($st_query);
	

	$student_id = $row1['student_no'];
	$student_pic = $row1['photo'];
	
	$_SESSION['roll_no']=$student_id;
	
	$_SESSION['pic']=$student_pic;
	$_SESSION['name1']=$row1['firstname'];
	$_SESSION['name2']=$row1['lastname'];
 ?>
 <?php 

/* $school_year = "";
$semester = "";	 */


	$school_year = $_POST['school_year'];	



	$semester = $_POST['semester'];	
$session =  $_POST['session'];	

?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option1.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
                
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php $_SESSION['year1']=$school_year;  echo $school_year; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php $_SESSION['term1']=$semester; echo $semester; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">   Session:
			
					<?php  
					
					$user_query = mysql_query("select * from registration where student_no = '$session_id' and term like '%$semester%' and year like '%$school_year%' and session like '%$session%' ")or die(mysql_error()); $row = mysql_fetch_array($user_query); $_SESSION['session1']=$row['session']; echo $row['session']; ?></a> 
                 
			
		
                 
                    
                    	 <?php     $total_credit = 0.00;
			

			 
			 $var = mysql_query("select * from registration where student_no = '$session_id' and term = '$semester' and year = '$school_year' and session = '$session' ");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["credit_hours"]+$total_credit;
			$total_credit=number_format($total_credit, 2);
			   
	}
			    ?>
                    	
					
		          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                        <thead>
                            <tr>
                                <th width="100">Course No. </th>
                                <th width="250">Course Title</th>
                                <th width="50">Credit Hours</th>                                 
                               
                                                                                                                   
                                                                                                                                                      
                                <th width="80">Remarks</th>                                                                                 
                            </tr>
                        </thead>
                        <tbody>
						 
                          	<?php  

                          	$user_query = mysql_query("select * from registration where student_no = '$session_id' and term like '%$semester%' and year like '%$school_year%' and session like '$session' ")or die(mysql_error());

							while($row = mysql_fetch_array($user_query))
							{
								$id = $row['student_no'];
								$remarks = $row['remarks'];
								$subject_id = $row['subject_id'];
								$subject_query = mysql_query("select * from subject where code = '$subject_id' ")or die(mysql_error());
								
								while($subject_row = mysql_fetch_array($subject_query))
								{

							?>
									<tr>
                                    
                                     <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>                                 
                                   <!--   <td><?php echo $row['session']; ?></td>   
                                                                                                               
                                  <!--  <td><?php echo $row['term']; ?></td>    -->                                                                          
                                    <!--   <td><?php echo $row['year']; ?></td>     -->  
									<td><?php echo $row['remarks']; ?></td> 	
									
                                    
                                    
                                    
                                    
                                    
		                               
									
									
	                                </tr>
							<?php 

								}
							}  

							?>
                   
                        </tbody>
                    </table>
				
							<div align="center">  <p><span class="red" style="font-size:16px">Credit Hours Taken :<?php  $total_credit; echo "$total_credit";?></span></p>
            
               
			
			</div>				
							
							
						
									  
										
										</th>       
                                        <th></th>       
                                        <th class="act"></th>       
									           
								
											   
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>
								
					
				</div>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p align="right"><input onclick="window.location.href='ex.php'" type="button" value="Get PDF  " rel="tooltip"  data-placement="center" title="Click here to get" class="btn btn-info"/></p>	<!-- <?php include('grading_system.php') ?>-->
			</div>
		</div>
    </div>

<?php include('footer.php') ?>