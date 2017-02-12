<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['status'];

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
					<?php include('grade_option.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php  echo $school_year; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php  echo $semester; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">   Session:
					
					
					<?php  
					
					$user_query = mysql_query("select * from registration where student_no = '$session_id' and term like '%$semester%' and year like '%$school_year%' and session like '%$session%' ")or die(mysql_error()); $row = mysql_fetch_array($user_query); echo $row['session']; ?></a> 
                    
                    
                    <?php     $total_credit = 0.00;
			 $earned_credits = 0.00;
				 $tgpa1=0.00;
			$tgpa=0.00;

			 
			 $var = mysql_query("select * from result where student_id = '$session_id' and term = '$semester' and year = '$school_year' and session like '%$session%'");
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
				
				
				

				 
			
				if($earned_credits!=0||$earned_credits!=0.00)
				 {
				    $tgpa = $tgpa1/$earned_credits;
					$tgpa=round($tgpa,2);
					}
					
					
			 }
			    ?>
            
		          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                        <thead>
                            <tr>
                                <th width="100">Course No. </th>
                                <th width="300">Course Title</th>
                                <th width="100">Credit Hours</th>                                 
                                <th>Letter Grade</th> 
                                 <th>Grade Point</th>
                                                                                                                                                                                            
                                <th>Remarks</th>                                                                                 
                            </tr>
                        </thead>
                        <tbody>
						 
                          	<?php  

                          	$user_query = mysql_query("select * from result where student_id = '$session_id' and term like '%$semester%' and year like '%$school_year%'  and session like '%$session%'")or die(mysql_error());

							while($row = mysql_fetch_array($user_query))
							{
								$id = $row['student_id'];
								$remarks = $row['remarks'];
								$subject_id = $row['sub_code'];
								$subject_query = mysql_query("select * from subject where code = '$subject_id' ")or die(mysql_error());
								
								while($subject_row = mysql_fetch_array($subject_query))
								{

							?>
									<tr>
		                                <td><?php echo $subject_row['code']; ?></td> 
		                                <td><?php echo $subject_row['title']; ?></td> 
		                                <td><?php echo $subject_row['unit']; ?></td>                                 
		                                <td><?php echo $row['Letter_Grade']; ?></td>   
                                        <td><?php  if($row['Grade_Point']=="4") echo $row['Grade_Point']="4.00"; elseif($row['Grade_Point']=="0") echo $row['Grade_Point']="0.00"; else echo  $row['Grade_Point']   ; ?></td>                                                                             
		                              <!--  <td><?php echo $row['term']; ?></td>                                                                              
		                                <td><?php echo $row['year']; ?></td> -->
                                         <td><?php echo $remarks; ?></td>
									
									
	                                </tr>
							<?php 

								}
							}  

							?>
                   
                        </tbody>
                    </table>
				
									
							
							<!--	<?php include('sort_unit_table.php'); ?> -->
						
									    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100"></th>
                                        <th class="numberu" width="300"></th>
                                        <th width="50">
									<!--	GWA: -->
										</th>                                 
                                        <th>
										
													<!--		<?php
							
                            $result = mysql_query("SELECT sum(Grade_Point) FROM result  where student_id = '$session_id' and year like '%$school_year%' and term like '%$semester%'") or die(mysql_error());
                            
							
							
							
							$test_count=mysql_query("select * from result where Grade_Point <> '' and student_id = '$session_id' and year like '%$school_year%' and term like '%$semester%' ")or die(mysql_error());
							$count_gen = mysql_num_rows($test_count);
							
							while ($rows = mysql_fetch_array($result)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(Grade_Point)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>-->
										
										</th>       
                                        <th></th>       
                                        <th class="act"></th>       
									           
								
											   
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>
							<!--	<?php include('cwa_table.php'); ?> -->
					<div align="center">  <p><span class="red">Credit Hours Taken :<?php  $total_credit; echo "$total_credit";?></span></p>
               <p><span class="red">Earned Credit Hours In This Term :<?php $earned_credits; echo "$earned_credits";?></span></p>
                <p><span class="red">TGPA :<?php $tgpa; echo " $tgpa";?></span></p>		</div>
			
			</div>		
				</div>
							<!--	<?php include('grading_system.php') ?> -->
			</div>
		</div>
    </div>

<?php include('footer.php') ?>