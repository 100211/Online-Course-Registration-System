			<div class="life-side-bar">
			<div class="hero-container">                  
					<ul class="nav nav-tabs nav-stacked">
						<li class="active">
                   
                       <?php 
					   include('dbcon.php');
					   
					   $query=mysql_query("SELECT `to`, `from` FROM `date`")or die(mysql_error());
$row=mysql_fetch_array($query);

 

  $qu=mysql_query("SELECT `student_no`,`reg_status`,`reg_stat` FROM `students`")or die(mysql_error());
//$ro=mysql_fetch_array($qu);
					     while($ro=mysql_fetch_array($qu)){
					   $start = $row['from'];
					   $end = $row['to'];
					   
					  
					   
					   $stat=$ro['reg_status'];
					   $roll=$ro['student_no'];
					   $reg_stat=$ro['reg_stat'];
					   
                        $Today = date("Y-m-d H:i:s");
								$new = date('l, F d, Y', strtotime($Today));
								
								//$date = "2016-09-01";
								
								if ($Today >= $start && $Today <= $end &&  $stat == "start" && $reg_stat == "start" && $roll == $_SESSION['id']) {?>
								
                                
                           
								
							<a href="get_reg.php" class="yellow_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Registration</a>
                           
						
						</li>
                    <?php }} ?>
                    
                    
						<li class="">
                        <a href="dasboard1.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Registration File</a>
                        <a href="result.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Results</a>
                         <a href="subject_view.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Subject view</a>
					<!--	<a href="evaluation.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Subject Evaluation</a> -->
                        <a href="view.php" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;View Files</a>
						
						</li>
							
			
			
           
						<li class="active">
            
        <?php 
					   include('dbcon.php');
					   
					  $query=mysql_query("SELECT `to`, `from` FROM `date_ad`")or die(mysql_error());
$row=mysql_fetch_array($query);


 
//$ro=mysql_fetch_array($qu);
					  
					   $qu=mysql_query("SELECT `student_no`,`a_a`,`reg_stat`,`reg_status` FROM `students`")or die(mysql_error());
//$ro=mysql_fetch_array($qu);
					     while($ro=mysql_fetch_array($qu)){
					   
					   $s = $row['from'];
					   $e = $row['to'];
					$aa=$ro['a_a'];
					$rs=$ro['reg_stat'];
					$rso=$ro['reg_status'];
					    $roll=$ro['student_no'];
                        $Today = date("Y-m-d H:i:s");
								$new = date('l, F d, Y', strtotime($Today));
								
								//$date = "2016-09-01";
								
								if ($Today >= $s && $Today <= $e && $aa== "start" && $rs== "start" && $rso== "end" && $roll == $_SESSION['id']) {?>
                            <a href="reg_add.php" class="yellow_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Add course</a>
					
							
						
						</li>
                    <?php } } ?>
        <li class="active">
            
        <?php 
					   include('dbcon.php');
					   
					  $qo=mysql_query("SELECT `to`, `from` FROM `date_ad`")or die(mysql_error());
$ra=mysql_fetch_array($qo);


 
//$ro=mysql_fetch_array($qu);
					  
					  
					   $qu=mysql_query("SELECT `student_no`,`a_d`,`reg_stat`,`reg_status` FROM `students`")or die(mysql_error());
//$ro=mysql_fetch_array($qu);
					     while($ro=mysql_fetch_array($qu)){
					   $st = $ra['from'];
					   $ed = $ra['to'];
					$aa=$ro['a_d'];
					$rsd=$ro['reg_stat'];
					$rsd1=$ro['reg_status'];
					  $roll=$ro['student_no'];  
                        $Today = date("Y-m-d H:i:s");
								$new = date('l, F d, Y', strtotime($Today));
								
								//$date = "2016-09-01";
								
								if ($Today >= $st && $Today <= $ed && $aa== "start" && $rsd== "start" && $rsd1== "end"  && $roll == $_SESSION['id']) {?>
                            <a href="reg_drop.php" class="yellow_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Drop course</a>
					
							
						
						</li>
                    <?php } } ?>
            		</ul>
                    
			</div>
            
       
            
 <?php 
					   include('dbcon.php');
					   
					   $query=mysql_query("SELECT `to`, `from` FROM `date`")or die(mysql_error());
$row=mysql_fetch_array($query);

  $qu=mysql_query("SELECT `student_no`,`reg_status`,`reg_stat` FROM `students`")or die(mysql_error());
//$ro=mysql_fetch_array($qu);
					  
					  while($ro=mysql_fetch_array($qu)){
					   
					   $start = $row['from'];
					   $end = $row['to'];
					   
					   $stat=$ro['reg_status'];
					   $roll=$ro['student_no'];
					   $reg_stat=$ro['reg_stat'];
					   
                        $Today = date("Y-m-d H:i:s");
								$new = date('l, F d, Y', strtotime($Today));
								
								//$date = "2016-09-01";
								
								if ($Today >= $start && $Today <= $end &&  $stat == "start"  and $roll == $_SESSION['id']  ) {?>
								
                                </br><p class="largetxt" style="background-color:#FF0000"><b><marquee behavior="slide">Registration date</marquee></b></p>

<?php 

$uery = mysql_query("SELECT `to`, `from` FROM `date`") or die(mysql_error()); 

$row = mysql_fetch_array($uery);
 
 echo "(".$row['from'].")   TO  (".$row['to'].")";
 

 
 ?>

                           
								
							
						
						</li>
                    <?php } } ?>

			</div>
	