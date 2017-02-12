<?php   include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="STI_grade_inquiry/js/jquery-1.11.2.min.js"></script> 

<style type="text/css">
	body
	{
		
		
	}
	.top-bar
		{
			width: 100%;
			height: auto;
			text-align: center;
			background-color:#FFF;
			border-bottom: 1px solid #000;
			margin-bottom: 20px;
		}
	.inside-top-bar
		{
			margin-top: 5px;
			margin-bottom: 5px;
		}
	.link
		{
			font-size: 18px;
			text-decoration: none;
			background-color: #000;
			color: #FFF;
			padding: 5px;
		}
	.link:hover
		{
			background-color: #9688B2;
		}
	</style>
</head>

<body>



<div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
				
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
			
				    <div align="left" style="border:1px dashed #333333; width:300px;padding:10px;"> 
                          
                            <h2>Input Results(.cvs)</h2>
                <hr/>
               <form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
         <ul>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><input type="submit" name="submit" value="Submit" />
       </ul>
    </form>
                
         </div>      
        
 <?php
	include ("connection.php");
	error_reporting(0);
	if(isset($_POST["submit"]))
	{
		
		if($_FILES['file']['tmp_name']!=null){
		
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
		
		//student_id sub_code Letter_Grade Grade_Point year term session remarks 


		
			$student_id = $filesop[0];
			$sub_code = $filesop[1];
			$Letter_Grade = $filesop[2];
			$Grade_Point = $filesop[3];
			$year = $filesop[4];
			$term = $filesop[5];
			$session = $filesop[6];
			$remarks  = $filesop[7];
			
			
			$sql = mysql_query("INSERT INTO `result`(`student_id`,`sub_code`, `Letter_Grade`,`Grade_Point`,`year`,`term`,`session`,`remarks`) VALUES ('$student_id','$sub_code','$Letter_Grade','$Grade_Point','$year','$term','$session','$remarks')")or die(mysql_error());
			$c = $c + 1;
		}
		
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}
			
			}
			
			else{
				echo "Sorry! No File Selected.";
			}
			

	}
	
	
	
	
	
?>

                
						<p align="justify"></p>			
		
			<p align="justify"><a href="prev_result.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Alter way of Result Publish</a></p>		
            
            <p align="justify"><a href="res_students.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Alter way of Result Publish Table view</a></p>		
			</div>
            
            
		</div>
        
    </div>



<script>



  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60962033-1', 'auto');
	  ga('send', 'pageview');


</script>

</body>
</html>
