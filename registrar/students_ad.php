<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
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
									Course 
									<select name="course" required>
									<option></option>
									<?php 
									$course_query = mysql_query("select * from course") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option><?php echo $course_row['code']; ?></option>
									<?php  } ?>
									</select>
									&nbsp;&nbsp;&nbsp;&nbsp;
									Year Level
									<select name="year_level" required>
									<option></option>
									<option value="1">First Year</option>
									<option value="2">Second Year</option>
									<option value="3">Third Year</option>
									<option value="4">Fourth Year</option>
									</select>
								
									<button type="submit" name="sort_students" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a "><i "></i>&nbsp </a></p>
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                   <!-- <th>Password</th>  -->                    
                                        <th>Course</th>                                 
                                        <th>Course Title</th> 
								<?php										
                                 /*        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>    
 */
									?>										
                                        <th>Credit</th>                                 
                                        <th>Year</th>                                 
                                        <th>Term</th>                                 
                                        <th>Session</th> 
                                        <th>Add/Drop</th>                                   
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from `add_drop`  where 	a_d='add' or a_d='drop'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_no'];  ?>
									<tr class="del<?php echo $id ?>">
									<td width="80"><?php echo $row['student_no']; ?></td> 
                              <td width="80"><?php echo $row['code']; ?></td>                             
                                  
								
                                    <td ><?php echo $row['title']; ?> </td> 
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              
                            
									 <td width="80"><?php echo $row['unit']; ?></td> 
									 <td width="80"><?php echo $row['year']; ?></td> 
									 <td width="80"><?php echo $row['term']; ?></td> 
                                      <td width="80"><?php echo $row['session']; ?></td> 
                                       <td width="80"><?php echo $row['a_d']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="100">
                                    
                                    <?php if($row['a_d']=="drop") {?>
                                        <a rel="tooltip"  title="Drop" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-success"><i class="icon-trash icon-large"></i></a> 
                                        <?php include('delete_student_ad.php'); ?> 
										
                                        
                                 
                                         <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#del_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                         <?php include('delete_student_adrop.php'); ?> 
                                        
                                        
										<?php }?>
                                        
                                        
                                         <?php if($row['a_d']=="add") {?>
									 
                                        <a rel="tooltip"  title="Add" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-success"><i class="icon-pencil icon-large"></i></a> 
                                        <?php include('add_student_ad.php'); ?>
                                        
                                        
                                         
                                         <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#de_student<?php echo $id;?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                         <?php include('student_adrop.php'); ?> 
                                        
                                        
                                        
                                         <?php }?>
                                        
							
                                        
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