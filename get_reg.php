<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php include "dbcon.php";?>

<?php
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

<?php
$user_query=mysql_query("select * from  registration where student_no = '$session_id'")or die(mysql_error());

$ro=mysql_fetch_array($user_query);

$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
					$row=mysql_fetch_array($query);								
									
									
if($ro['year']==1 && $ro['term']==1 && $row['year_level']==1 && $row['term']==1 )
{
$year_level = 1;

$term = 2;
}

elseif($row['year_level']==1 && $row['term']==2)
{
$year_level = 2;

$term = 1;
}

elseif($row['year_level']==2 && $row['term']==1)
{
$year_level = 2;

$term = 2;
}

elseif($row['year_level']==2 && $row['term']==2)
{
$year_level = 3;

$term = 1;
}


elseif($row['year_level']==3 && $row['term']==1)
{
$year_level = 3;

$term = 2;
}

elseif($row['year_level']==3 && $row['term']==2)
{
$year_level = 4;

$term = 1;
}

elseif($row['year_level']==4 && $row['term']==1)
{
$year_level = 4;

$term = 2;
}

elseif($row['year_level']==4 && $row['term']==2)
{
$year_level = "4";

$term = "1";
}

	else
{
$year_level = 1;

$term = 1;
}			
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
			<form id="form1"  method="post" action="reg.php">
				          
							
                
				 
				 <li><a><?php $_SESSION['year_level']=$year_level;  echo $year_level; ?>   Year</a></li>
							<li><a><?php  $_SESSION['term']=$term;  echo $term; ?>   Term</a></li>
				 
		
            
            
			      <div class="control-group">
			<label class="control-label" for="inputPassword">Session:</label>
			<div class="controls">
            
           
            
            <select name="select" value="<?php  if (isset($_POST['submit'])){ echo $select;} ?>" required>
<?php 
   for($i = 1998 ; $i < date('Y'); $i++){
   
  
 
							                  //  echo'<option value="'.substr( $i, -2 ).'">'.substr( $i, -2 ).'</option>'; 
							               
   
   $wi=$i . '-'  .substr( $i+1 , -2 );
   
      echo "<option>$wi</option>";
	  
	
   }
   
   
   
?>
</select>
            
            
            
            
            
            
				
			</div>
		</div>
			 
			   
			   
			 
                                 
                                </tbody>
                            </table>
                            
                  <input type="hidden" name="" id="roll" value="<?php echo @$session_id;?>" />
                    <input type="button" value="&lt;&lt; Back " class="button" onclick="javascript: history.go(-1)" />
             <p align="right">  <input type="submit" name="submit" id="submit" class="button" value="Next &gt;&gt;"/> </p>
               
                  
                 
                 </form>           
								
				</div>
			
				

				
			</div>
		</div>
  
    


<?php include('footer.php') ?>

  </div>
   <?php }}?>
   
  