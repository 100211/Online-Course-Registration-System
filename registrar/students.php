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
									<form  method = "POST" class="form-inline" action="sort_students.php">
									Term 
									<select name="course" >
									<option></option>
									<option value="1">1st</option>
									<option value="2">2nd</option>
									
									</select>
									&nbsp;&nbsp;&nbsp;&nbsp;
									Year Level
									<select name="year_level" >
									<option></option>
									<option value="1">First Year</option>
									<option value="2">Second Year</option>
									<option value="3">Third Year</option>
									<option value="4">Fourth Year</option>
									</select>
								
									<button type="submit" name="sort_students" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_student.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Student</a></p>
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                   <!-- <th>Password</th>  -->                    
                                        <th>Name</th>                                 
                                        <th>Discipline</th> 
								<?php										
                                 /*        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>    
 */
									?>										
                                        <th>Photo</th>                                 
                                        <th>Contact No</th>                                 
                                        <th>Mail id</th>                                 
                                        <th>Student Status</th> 
                                        <th>Address</th>  
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from students where status='active'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_no'];  ?>
									<tr class="del<?php echo $id ?>">
									<td><?php echo $row['student_no']; ?></td> 
                              <!--  <td><?php echo $row['password']; ?></td>  -->                               
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								
                                    <td width="80"><?php echo $row['course']; ?> </td> 
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              	
                                    <td width="60"><img src="<?php echo $row['photo']; ?>" width="60" height="60" class="img-circle"></td> 
									 <td width="80"><?php echo $row['contact']; ?></td> 
									 <td width="80"><?php echo $row['mail_id']; ?></td> 
									 <td width="80"><?php echo $row['status']; ?></td> 
                                      <td width="80"><?php echo $row['address']; ?></td> 
                                   
                                      
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
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>