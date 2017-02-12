<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
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
			 <table width="80%" border="1" cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
   
    <tr>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>View</th>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="registrar/upload/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
				 
				</div>
			
		


			
			
			</div>
		</div>
  
<?php include('footer.php') ?>
  </div>