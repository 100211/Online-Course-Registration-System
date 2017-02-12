<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>

 <?php 

/* $school_year = "";
$semester = "";	 */
$get_id = $_POST['student_id'];	

	$school_year = $_POST['school_year'];	



	$semester = $_POST['semester'];	

$status =  $_POST['status'];	
?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
			
				<div class="span12">
				<div class="grade">
					<?php include('subview_option.php'); ?>
				</div>
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
			
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">   ID:<?php  echo $get_id; ?></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php  echo $school_year; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a style="font-size:25px">   Term:<?php  echo $semester; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">   Status: <?php if($status==1)  echo "Completed";  if($status==3)  echo "Uncompleted";  if($status==2)  echo "Unable to take"; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					</br>
                    </br>
                    
           <!--         <?php     $total_credit = 0;
			 $earned_credits = 0;
				 $tgpa1=0;
			$tgpa=0;

			if($status==1){
			 $var = mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0' and rs.term like '%$semester%' and rs.year like '%$school_year%' ");
			 }
			 
			if($status==2){
			 $var = mysql_query("SELECT `code`,`title`,`unit`,`year`,`term`  from `subject`  where `code` not in ( SELECT DISTINCT `code`  FROM `subject` AS sb  JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0') and term like '%$semester%' and year like '%$school_year%' ");
			 } 
			 
			if($status==3){
			 $var = mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point` = '0' and rs.term like '%$semester%' and rs.year like '%$school_year%' ");
			 }
			 
			  
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["unit"]+$total_credit;
			   $total_credit=number_format($total_credit, 2);
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credits = $ary["unit"]+ $earned_credits;
				 }
				 $tgpa1 = $ary["unit"]*$ary["Grade_Point"]+$tgpa1;
				
				
				

				 
			
				if($earned_credits!=0||$earned_credits!=0.00)
				 {
				    $tgpa = $tgpa1/$earned_credits;
					}
					
					
			 }
			    ?>
            -->
            
           
		          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                        <thead>
                            <tr>
                                <th width="100">Course No.</th>
                                <th width="300">Course Title</th>
                                <th width="100">Credit Hours</th>                                 
                            <?php  if($status==1 || $status==3){ ?> <th>Letter Grade</th> 
                                 <th>Grade Point</th> <?php } ?>
								 
								<?php  if($status==2){?> <?php }
                                    ?>                                                                                                                                                        
                           <!--     <th>Term</th> 
                                <th>Year</th>      -->                                                                           
                            </tr>
                        </thead>
                        <tbody>
						 
                          	<?php  
if($status==1){
                          	$user_query = mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0' and rs.term like '%$semester%' and rs.year like '%$school_year%' ")or die(mysql_error());
							}
							
							
				if($status==2){
				$user_query = mysql_query("SELECT `code`,`title`,`unit`,`year`,`term`  from `subject`  where `code` not in ( SELECT DISTINCT `code`  FROM `subject` AS sb  JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0') and term like '%$semester%' and year like '%$school_year%' ");
			 } 			
	if($status==3){
			 $user_query = mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point` = '0' and rs.term like '%$semester%' and rs.year like '%$school_year%' ");
			 }
							while($row=mysql_fetch_array($user_query)){
									//$id=$row['Letter_Grade'];
									//$remarks = $row['remarks'];
									//$subject_id = $row['sub_code'];
									/* subject */
								
									?>
									<tr>
                                    <td><?php echo $row['code']; ?></td> 
                                    <td><?php echo $row['title']; ?></td> 
                                    <td><?php echo $row['unit']; ?></td>                                 
                            <?php   if($status==1 || $status==3){ ?>      <td><?php echo $row['Letter_Grade']; ?> </td>  <?php } ?> 
                                <?php   if($status==1 || $status==3){ ?>      <td><?php if($row['Grade_point']=="4") echo $row['Grade_point']="4.00"; elseif($row['Grade_point']=="0") echo $row['Grade_point']="0.00"; else echo  $row['Grade_point']   ; ?> </td>  <?php } ?>                                                                              
                                  <!--  <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    -->
										
									
								 	
                                                                                                      
								
                             
									
                                    </tr>
									<?php  }  ?>
                           
                   
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
					<div align="center">  <p ><span class="red" style="font-size:16px">Credit Hours  :<?php  $total_credit; echo "$total_credit";?></span></p>
              
			
			</div>		
				</div>
							<!--	<?php include('grading_system.php') ?> -->
			</div>
		</div>
    </div>

<?php include('footer.php') ?>