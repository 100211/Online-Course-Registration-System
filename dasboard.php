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
				
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
                
                
				<div class="span10">
                  <tr><div align="right"><a href="index.php" class="alert alert-danger">&nbsp;logout</a></div></tr>   
		
				         <table cellpadding="0" cellspacing="0" border="0"  >
                             
				<?php 
				
				$us=mysql_query("SELECT sum(unit)  FROM `result` WHERE  student_id='$session_id' AND `Grade_Point` > '0' ")or die(mysql_error());
				//$ert=mysql_fetch_array($us);
			 while ($ro = mysql_fetch_array($us)) {
			 $ewr= $ro['sum(unit)'];
			 $ewr=number_format($ewr, 2);
			 }
echo "<script type='text/javascript'>alert('Your Completed credits   $ewr');</script>"; ?> 
						
                         
								 
                                  <?php  $user_query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_no'];  ?>
                                    
                                     <tr width="60"><img src="registrar/<?php echo $row['photo']; ?>" width="150" height="150" ></tr> 
									
   
    <div align="right">                                    
                                      <tr >
<td  colspan="2"><legend>Your Profile Information</legend> </td>

<td><div align="right"><a href="add_student.php" class="btn btn-success">&nbsp;Edit Info</a></div></td>
</tr>

<tr>

<td width="100" height="30" valign="top" ><div align="left"><a>First Name:</a></div></td></br>
<td width="165" valign="top"><?php echo $row['firstname'];?></td>
</tr>
<tr>
<td valign="top" height="30"><div align="left"><a>Last Name:</a></div></td>
<td valign="top"><?php echo $row['lastname']; ?></td>
</tr>
<tr>
<td valign="top" height="30"><div align="left"><a>Gender:</a></div></td>
<td valign="top"><?php echo $row['gender'];?></td>
</tr>
<tr>
<td valign="top" height="30"><div align="left"><a>Address:</a></div></td>
<td valign="top"><?php echo  $row['address']; ?></td>
</tr>
<tr>
<td valign="top" height="30"><div align="left"><a>Contact No.: </a></div></td>
<td valign="top"><?php echo  $row['contact']; ?></td>
</tr>

<tr>
<td valign="top" height="30"><div align="left"><a>Mail Address.: </a></div></td>
<td valign="top"><?php echo  $row['mail_id']; ?></td>
</tr>

<tr>
<td valign="top" height="30"><div align="left"><a>Acc. Status.:</a></div></td>
<td valign="top"><?php echo  $row['status']; ?></td>
</tr>

<tr>
<td valign="top" height="30"><div align="left"><a>Gender.:</a></div></td>
<td valign="top"><?php echo  $row['gender']; ?></td>
</tr>

<tr>
<td valign="top" height="30"><div align="left"><a>Completed Credits.:</a></div></td>
<td valign="middle" class="red" style="font-size:16px"><?php echo  $ewr; ?></td>
</tr>


 





</div>
				
                
                					 <!-- <td><?php echo $row['student_no']; ?></td> 
                              <td><?php echo $row['password']; ?></td>                                 
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								
                                    <td width="80"><?php echo $row['course']; ?> </td> 
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              
                                  
									 <td width="80"><?php echo $row['contact']; ?></td> 
									 <td width="80"><?php echo $row['mail_id']; ?></td> 
									 <td width="80"><?php echo $row['status']; ?></td> 
                                      <td width="80"><?php echo $row['address']; ?></td> -->
								
									   </tbody>
                                       
                  </table>
                  </br>
                  <td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Get Last Registration Card" id="v<?php echo $session_id; ?>"  href="ex1.php<?php echo '?id='.$session_id; ?>"  class="btn btn-info"><i class="icon-download icon-large"></i>Get Last Registration Card</a></p></div></td>
									<?php  }  ?>
                           
                         
                            
							
							
				</div>
			
			
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>