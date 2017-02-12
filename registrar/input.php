<html>
<head>
	<style type="text/css">
	body
	{
		
		text-align:center;
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
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60962033-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
	
</div>
    <div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">
    
	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
	include ("connection.php");
	
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
    
    </div>
    
    
   
</body>
</html>