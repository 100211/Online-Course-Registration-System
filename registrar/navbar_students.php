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
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dasboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
						<?php if ($user_type == 'Registrar'){
					?>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
					<?php } ?>
					
					<li><a href="subject.php"><i class="icon-list-alt icon-large"></i>&nbsp;Subject</a></li>
					<li  class="active"><a href="students.php"><i class="icon-group icon-large"></i>&nbsp;Students</a></li>
					 
				
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: <?php echo $user_row['user_type']; ?></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
 
