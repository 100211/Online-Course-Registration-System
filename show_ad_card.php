<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
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
				
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			<form id="form1"  method="post" action="show_ad_card_link.php">
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Code</th>
                                        <th  width="300">Subject Title</th>
                                        <th  width="50">Units</th>                                 
                                                                                                                    
                                        <th>Remarks</th>                                                                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								                  </tr>
                <?php
              	
				//$name=@$_SESSION['$name'];
				$total_credit = 0;
				//echo "$name";
			   for($i=0;$i<1;$i++)
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
			  //   $total_credit = $total_credit+$credit_hours[$i];
			    }

function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}

        
               
  ?>           
                 <tr>
                 
                 
                                 
                                </tbody>
                            </table>
                             <td><label>
                  <input type="hidden" name="" id="roll" value="<?php echo @$session_id;?>" />
                    <input type="button" value="&lt;&lt; Back " class="button" onclick="javascript: history.back(); return false;"  />
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input name="Submit" type="submit" id="Submit" value="Confirm &gt;&gt;" />
                  </label>&nbsp;</td>
                  
                 
            </form>                  
								
				</div>
			
				<?php include('grading_system.php') ?>
				
				
			</div>
		</div>
    </div>
   
<?php include('footer.php') ?>