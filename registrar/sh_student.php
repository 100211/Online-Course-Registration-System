<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from students where student_no='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Details Of Student</div>
             
               <?php  if ($user_type == 'Registrar'){ ?>
			<p><a class="btn btn-info" href="students.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
              <?php   } ?>
            
          <?php  if ($user_type == 'Encoder1' || $user_type == 'Encoder2' || $user_type == 'Encoder3' || $user_type == 'Encoder4'){ ?>
            
            <p><a class="btn btn-info" href="students1.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
         <?php   }
            ?>
	<div class="addstudent">
	<div class="details">Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_students.php" enctype="multipart/form-data">

		
		
		
				         <table cellpadding="5" cellspacing="0" border="0"   >
                             
				<?php 
				
				$us=mysql_query("SELECT sum(unit)  FROM `result` WHERE  student_id='$get_id' AND `Grade_Point` > '0' ")or die(mysql_error());
				//$ert=mysql_fetch_array($us);
			 while ($ro = mysql_fetch_array($us)) {
			 $ewr= $ro['sum(unit)'];
			 $ewr=number_format($ewr, 2);
			 }
echo "<script type='text/javascript'>alert('Your Completed credits   $ewr');</script>"; ?> 
						
                         
								 
                                  <?php  $user_query=mysql_query("select * from students where student_no='$get_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_no'];  ?>
                                    
                                     <tr width="60"><img src="<?php echo $row['photo']; ?>" width="150" height="150" ></tr> 
									
   
    <div align="justify">                                    
                                      <tr >
<td  colspan="0"><legend>Profile Information</legend> </td>


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

<td width="100" height="30" valign="top" ><div align="left"><a>Roll no:</a></div></td></br>
<td width="165" valign="top" style="color:#FF0000"><?php echo $row['student_no'];?></td>
</tr>
<tr>
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

<tr>

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
                          
									<?php  }  ?>
                           
                         
                            
				<br />			
							
		<tr>
        <td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Result View" id="v<?php echo $get_id; ?>"  href="search_res.php<?php echo '?id='.$get_id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Result View</a></p></div></td>
</tr>
<td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Subject View" id="v<?php echo $get_id; ?>"  href="subject_view.php<?php echo '?id='.$get_id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Subject View</a></p></div></td>



<tr>
<td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Pass/Fail View" id="v<?php echo $get_id; ?>"  href="subject_v.php<?php echo '?id='.$get_id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Pass/Fail View</a></p></div></td>

<td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Registration View" id="v<?php echo $get_id; ?>"  href="src_reg.php<?php echo '?id='.$get_id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Registration View</a></p></div></td>


 <td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Current Registration View" id="v<?php echo $get_id; ?>"  href="prev_reg.php<?php echo '?id='.$get_id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Current Registration View</a></p></div></td> 

</tr>
			
			
				
		
    </form>	
    	</div>
		</div>			
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>