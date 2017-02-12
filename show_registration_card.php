<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php   include('dbcon.php'); ?>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];
$school_year = $row['year_level'];

 $ui = $row['req'];

 ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			<form id="form1"  method="post" action="show_registration_card_link.php">
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="80">COURSE NO.</th>
                                        <th  width="300">COURSE TITLE</th>
                                        <th  width="70">CREDIT HOURS</th>                                 
                                                                                                                    
                                        <th width="150">REMARKS</th>                                                                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								                  </tr>
                <?php
              	
				//$name=@$_SESSION['$name'];
				$total_credit = 0;
				//echo "$name";
				$coount1=0;
			  $num=$_SESSION['num_rt'];
				 
				 $b=$_SESSION['se']+$num ;
				//$b =  $_POST['ro'];
				
			   for($i=0;$i<$b;$i++)
			   {   
			   
			       $v=chr(65+$i);
				   $_SESSION["$v".chr(65)]=@$_POST["$v".chr(65)]; 
				   $_SESSION["$v".chr(66)]=@$_POST["$v".chr(66)]; 
				   $_SESSION["$v".chr(67)]=@$_POST["$v".chr(67)]; 
				   $_SESSION["$v".chr(68)]=@$_POST["$v".chr(68)]; 
				  
				   
				   $course_no[$i]= $_SESSION["$v".chr(65)];
				   $course_title[$i]=$_SESSION["$v".chr(66)];
				   $credit_hours[$i]=$_SESSION["$v".chr(67)];
				   $remarks[$i]=$_SESSION["$v".chr(68)];
				   $course_no1[$i] = getCourseNoById($course_no[$i]);	    
				   echo "<tr>
				    <td> $course_no1[$i]</td>
			       <td>$course_title[$i]</td>
			       <td>$credit_hours[$i]</td>
			       <td>$remarks[$i]</td>
			           
				   </tr>";
				   if($remarks[$i]=="Retake" or $remarks[$i]=="Re-Retake"){
				   
				   $coount1=$coount1+1;
				   
				   }
				   
				   
			  $total_credit = $total_credit+$credit_hours[$i];
			  $total_credit=number_format($total_credit, 2);
			    }

function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}

      $var = mysql_query("select * from fees");
				$ary = mysql_fetch_array($var);
			    $total_course_fee = $ary[4]*$total_credit; 	
                $total_exam_fee = $ary[13]*$total_credit; 
                $total_fees = $total_course_fee+$total_exam_fee+$ary[0]+$ary[1]+$ary[2]+($ary[5]*$coount1)+$ary[3]+$ary[7]+$ary[8]+$ary[9]+$ary[10]+$ary[11]+$ary[12]+$ary[14]+$ary[15]+$ary[16]+$ary[17]+$ary[18]+$ary[19]+$ary[20]+$ary[21]+$ary[22]+$ary[23]+$ary[24]+$ary[25]+$ary[26]+$ary[27]+$ary[28];      
         
		 $total_fees=number_format($total_fees, 2);      
  ?>           
                 
                 
                 
                                 
                                </tbody>
                                
                            </table>
                         
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <td><p align="center" class="red" style="font-size:18px" >Total Credits:  <?php echo "$total_credit";?> </p></td>
                             
                             </br>
                            <td> <p align="left" class="red" style="font-size:18px" >You'll be charged tk <?php  $_SESSION['varname'] =$total_fees; echo "$total_fees";?>  (include   <?php echo  $coount1 ;?> Retake/Re-Retake fees) for this....</p></td>
                            
                  <input type="hidden" name="" id="roll" value="<?php echo @$session_id;?>" />
                  
                
                  </br>
        <?php if($total_credit<15 and $ui=="off"){?><a  href="#confirm<?php echo @$session_id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-check"></i>&nbsp;Send Request to Admin</a>
                                            
											<?php include('confirm_req.php') ?>   <?php }?>
                                            
                                            
              <?php if($total_credit>=15 or $ui=="on"){?> <input type="button" value="&lt;&lt; Back " class="button" onclick="javascript: history.back(); return false;"  />  <?php }?>
             
               <p align="right" style="color:#FF0000"><?php if($total_credit<15 and $ui=="off"){?>You Are Not Allowed to Take less than 15 Credits   <input  name="Submit" type="submit" id="Submit" value="  Confirm &gt;&gt;" disabled/></p> <?php }?>
               
                  <?php if($total_credit>=15 or $ui=="on"){?> <input  name="Submit" type="submit" id="Submit" value="Confirm &gt;&gt;" /></p> <?php }?>
                 
            </form>                  
								
				</div>
			
			
				
	


			</div>
		</div>
    </div>
   

<?php include('footer.php') ?>




 			 