<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_students.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="sort_fail.php">
								<div class="span">	Subject 
									
									<?php
									$result = mysql_query("select `code`,`subject_id` from subject");
									 echo  "<td><label><select class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"course\"  >
      						<option ></option>";
				  while($row=mysql_fetch_array( $result))
				  {
				
				  			echo "<option >".$row['code']."</option>";
						
				  }
				   echo("</label></td>");
									
									?>
									
									</select>
                                    </div>
								
                                <div class="span">	&nbsp;&nbsp;&nbsp;&nbsp;
									Session
									<select name="year_level" >
                                     <option value="">(Select Session)</option>
									<?php 
   for($i = 1998 ; $i < date('Y'); $i++){
   
  
 
							                  //  echo'<option value="'.substr( $i, -2 ).'">'.substr( $i, -2 ).'</option>'; 
							               
   
   $wi=$i . '-'  .substr( $i+1 , -2 );
   
      echo "<option>$wi</option>";
	  
	
   }
   
   
   
?>
									</select>
				</div>				
									<button type="submit" name="sort_fail" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
							
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                   <!-- <th>Password</th>  -->                    
                                        <th>Name</th>                                 
                                        <th>Course</th> 
								<?php										
                                 /*        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>    
 */
									?>										
                                        <th>Photo</th>                                 
                                        <th>Year</th>                                 
                                        <th>Term</th>                                 
                                        <th>Session</th> 
                                      
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select  * from result where `Grade_Point` ='0' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_id']; 
									
									$subject_query = mysql_query("select * from students where student_no ='$id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									
									
									<tr class="del<?php echo $id ?>">
									<td><?php echo $row['student_id']; ?></td> 
                              <!--  <td><?php echo $row['password']; ?></td>  -->  
                              
                              
                              
                                                           
                                    <td><?php echo $subject_row['firstname']." ".$subject_row['lastname']; ?></td>
								
                                    <td width="80"><?php echo $subject_row['course']; ?> </td> 
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              	
                                    <td width="60"><img src="<?php echo $subject_row['photo']; ?>" width="60" height="60" class="img-circle"></td> 
									 <td width="80"><?php echo $row['year']; ?></td> 
									 <td width="80"><?php echo $row['term']; ?></td> 
									 <td width="80"><?php echo $row['session']; ?></td> 
                                    
                                   
                                      
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="240">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"  target="_blank"   class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" target="_blank" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                   
                                        
                                        <a  rel="tooltip"  title="Show Details" id="e<?php echo $id; ?>" href="sh_student.php<?php echo '?id='.$id; ?>" target="_blank" class="btn btn-success"><i class="icon-user icon-large"></i></a>
                                        
                                        
										<a  rel="tooltip"  title="View Grade" id="v<?php echo $id; ?>"  href="view_grade.php<?php echo '?id='.$id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i></a>
                                        <a  rel="tooltip"  title="View Registration" id="v<?php echo $id; ?>"  href="view_reg.php<?php echo '?id='.$id; ?>" target="_blank" class="btn btn-success"><i class="icon-list icon-large"></i></a>
                                        
                                    </td>
									
                                    </tr>
									<?php  } } ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>