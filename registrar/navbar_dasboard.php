<?php
$user_query  = mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
$user_row =mysql_fetch_array($user_query);
$user_type  = $user_row['user_type'];
?>  

  <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                    
                    
                   
              
					<ul class="nav">
					<li class="active"><a href="dasboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                    
					<?php if ($user_type == 'Registrar'){
					?>
                   
                    <li class="active">
						<a href="dasboard.php"  data-toggle="dropdown" ><i class="icon-cog icon-large"></i></a>

					<ul class="dropdown-menu">
                     <li><a href="credis_req.php"  style="color:#CC3333"><i class="icon-check icon-large"></i>&nbsp;Approve Registration Request less than 15 credits</a></li>
                    <li><a href="date_ad.php"><i class="icon-pencil icon-large"></i>&nbsp;Set Deadline of Add/Drop course</a></li>
                    <li><a href="date.php"  style="color:#CC3333"><i class="icon-pencil icon-large"></i>&nbsp;Set Deadline of Registration</a></li>
                    <li><a href="reg_view.php"><i class="icon-pencil icon-large"></i>Registration Subject Wise</a></li>
                     <li><a href="Fail_view.php"><i class="icon-ok icon-large"></i>Check Fail Subject Wise</a></li>
                    <li><a href="prerequisites.php"><i class="icon-paste icon-large"></i>&nbsp;Set Prerequisites</a></li>
                     <li><a href="test.php"  style="color:#0000FF"><i class="icon-eraser icon-large"></i>&nbsp;Input Results</a></li>
                    <li><a href="user_view.php"><i style="color:#990000" class="icon-user icon-large"></i>&nbsp;User Update</a></li>
                    <li><a href="upload.php"><i class="icon-upload icon-large"></i>&nbsp;Upload File</a></li> 
                    <li><a href="mailto.php"><i style="color:#00CC33" class="icon-envelope icon-large"></i>&nbsp;Sent mail  </a></li>
                    <li><a href="fees.php"><i class="icon-pencil icon-large"></i>&nbsp;Set Fees  </a></li>
                    <li><a href="conn.php"><i class="icon-minus icon-large"></i>&nbsp;Backup</a></li>
                     <li><a href="search.php" style="color:#FF0000"><i class="icon-search icon-large"></i>&nbsp;Search</a></li>
                    <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
   

					</li>	
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
                    <li><a href="unstudents.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove</a></li>
                    <li><a href="students_ad.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove Add/Drop</a></li>
                    <li><a href="students.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
                    
                    
					<?php } ?>
                    
                    <?php if ($user_type == 'Encoder1'){
					?>
                   
                    
					
                    <li><a href="unstudents1-1.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove</a></li>
                    <li><a href="students1.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
                     <li><a href="mailto11.php"><i class="icon-envelope icon-large"></i>&nbsp;Send Mail</a></li>
                    
					<?php } ?>
                     <?php if ($user_type == 'Encoder2'){
					?>
                   
                    
				
                    <li><a href="unstudents2.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove</a></li>
                     <li><a href="students1.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
                     <li><a href="mailto11.php"><i class="icon-envelope icon-large"></i>&nbsp;Send Mail</a></li>
					<?php } ?>
                    
                     <?php if ($user_type == 'Encoder3'){
					?>
                   
                   
                    <li><a href="unstudents3.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove</a></li>
                     <li><a href="students1.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
                     <li><a href="mailto11.php"><i class="icon-envelope icon-large"></i>&nbsp;Send Mail</a></li>
					<?php } ?>
                    
                     <?php if ($user_type == 'Encoder4'){
					?>
                   
                    
					
                    <li><a href="unstudents4.php"><i class="icon-group icon-large"></i>&nbsp;Aprrove</a></li>
                     <li><a href="students1.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
                     <li><a href="mailto11.php"><i class="icon-envelope icon-large"></i>&nbsp;Send Mail</a></li>
					<?php } ?>
                    
					
					<li><a href="subject.php"><i class="icon-list-alt icon-large"></i>&nbsp;Subject</a></li>
					
                    <li><a href="prerequisites-show.php"><i class="icon-file icon-large"></i>&nbsp;Prerequisites</a></li>
                    
					
				
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: <?php echo $user_row['user_type']; ?></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
