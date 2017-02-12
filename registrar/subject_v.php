<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
			 <div class="alert alert-info"><p style="font-size:24px"><i class="icon-pencil">&nbsp;Student No.     <?php echo $get_id; ?></i></p></div>
				<div class="span12">
                
				<div class="grade">
					<?php include('subv_option.php'); ?>
				</div>
				</div>
		<div class="span2">
			<div id="add">
				
			</div>
			</div>
				<div class="span10">
			  <!--         <?php     $total_credit = 0;
			 $earned_credits = 0;
				 $tgpa1=0;
			$tgpa=0;

			 
				 $var = mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0' ");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["unit"]+$total_credit;
			   
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
                                        <th  width="300">Course Title</th>
                                        <th  width="100">Credit Hours</th>                                 
                                        <th>Grade Point</th> 
                                        <th>Letter Grade</th>                                                                                  
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                                                                                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("SELECT DISTINCT `code`,`title`,sb.`unit`,rs.`Grade_point`,rs.`Letter_Grade`,rs.`term`,rs.`year` FROM `subject` AS sb JOIN `result` AS rs ON sb.`code` = rs.`sub_code` WHERE `student_id` = '$get_id' and rs.`Grade_Point`> '0' ")or die(mysql_error());
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
                                    <td><?php  if($row['Grade_point']=="4") echo $row['Grade_point']="4.00"; elseif($row['Grade_point']=="0") echo $row['Grade_point']="0.00"; else echo  $row['Grade_point']   ; ?></td>   
                                    <td><?php echo $row['Letter_Grade']; ?></td>                                                                             
                                    <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    
										
									
								 	
                                                                                                       
								
                             
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
                            
                            <div align="center">  <p><span class="red" style="font-size:16px">Earned Credit Hours  :<?php  $total_credit; echo "$total_credit";?></span></p>
								<!--<?php include('units_table.php'); ?>
								<?php include('gwa_table.php'); ?>
								<?php include('cwa_table.php'); ?>-->
				</div>
			
				<!-- <?php include('grading_system.php') ?> -->
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>