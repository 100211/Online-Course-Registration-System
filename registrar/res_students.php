<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<meta http-equiv="refresh" content="20" > 
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
             <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="res_sort.php">
									Term 
									<select name="course" required>
									<option></option>
									<option value="1">1st</option>
									<option value="2">2nd</option>
									
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
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Unpublished Result Students Table</strong>
                                </div>
						
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
                                      <!--  <th>Password</th>     -->                            
                                        <th>Name</th>                                 
                                        <th>Course</th>                                 
                                        <th>Gender</th>                                 
                                        <th>Mail Id</th>                                 
                                        <th>Contact No</th>                                 
                                        <th>Photo</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from students where `result`='start' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['student_no'];  ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['student_no']; ?></td> 
                                  <!--  <td><?php echo $row['password']; ?></td> -->                                 
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>                                                                              
                                    <td><?php echo $row['course']; ?> </td> 
                                    <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['mail_id']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td> 
                                    <td width="60"><img src="<?php echo $row['photo']; ?>" width="60" height="60"></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="80">
                                    
                                    
                                    
                                    <a  rel="tooltip"  title="Publish Result" id="v<?php echo $id; ?>"  href="prev_result_link.php<?php echo '?id='.$id; ?>" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i></a>
										
                                            
                                            
                                          
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