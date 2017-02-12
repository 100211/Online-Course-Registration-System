	<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$student_no=$_POST['student_no'];
		
		
		
		$Firstname=$_POST['Firstname'];
		$Lastname=$_POST['Lastname'];
		$year_level=$_POST['year_level'];
		$term=$_POST['term'];
		$Gender=$_POST['Gender'];
		$Address=$_POST['Address'];
		$Contact=$_POST['Contact'];
		$mail_id=$_POST['mail_id'];
		
		
		
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
		
	
			$query=mysql_query("select * from students where student_no='$student_no'")or die(mysql_error());
$count=mysql_num_rows($query);

if ($count  > 0){
$exist = 'ID Number Exist!';
}else{
$exist ="";
mysql_query("insert into students (student_no)
 values('$student_no')")or die(mysql_error());
}
								
			if($cpassword!=$password){
		$a="Password do not Match";
		}else{
		$a = "";
		}
	}
	?>
<form method="post" enctype="multipart/form-data">	
	<div class="span5">
	<div class="form-horizontal">
				<div class="control-group">
			<label class="control-label" for="inputEmail">Student No:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="student_no" onchange="valid(this)" maxlength="6" value="<?php if (isset($_POST['submit'])){echo $student_no;} ?>" placeholder="Student No" required>
				&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
	<?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $exist; ?></span><?php }?>
			</div>
		</div>
		
        <div class="control-group">
			<label class="control-label" for="inputPassword"> Firstname:</label>
			<div class="controls">
			<input type="text" name="Firstname"  onchange="va(this)" value="<?php if (isset($_POST['submit'])){echo $Firstname;} ?>" placeholder="Firstname" >
			</div>
		</div>
          <div class="control-group">
			<label class="control-label" for="inputPassword"> Lastname:</label>
			<div class="controls">
			<input type="text" name="Lastname" onchange="va(this)" value="<?php if (isset($_POST['submit'])){echo $Lastname;} ?>" placeholder="Lastname">
			</div>
		</div>
        
        
        
        
        <div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
			  <select name="year_level" value="<?php if (isset($_POST['submit'])){echo $year_level;} ?>" required>
              
                <option value="1" selected="selected" readonly>First Year</option>
               
              </select>
			</div>
	  </div>
        
        
        
        <div class="control-group">
			<label class="control-label" for="inputPassword">Term:</label>
			<div class="controls">
			  <select name="term"  value="<?php if (isset($_POST['submit'])){echo $term;} ?>" required>
               
                <option value="1" selected="selected" readonly>1st</option>
                
              </select>
			</div>
	  </div>
        
        
        <div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
					<select name="Gender"  value="<?php if (isset($_POST['submit'])){echo $Gender;} ?>" required>
									<option></option>
									<option>Male</option>
									<option>Female</option>
					</select>
			</div>
		</div>
        
         <div class="control-group">
			<label class="control-label" for="inputEmail">Address :</label>
			<div class="controls">
            <textarea rows="4" cols="50" placeholder="Enter Your Address..." id="Address" name="Address" value="<?php if (isset($_POST['submit'])){echo $Address;} ?>" required></textarea>
			
			</div>
		</div>
        
        
        <div class="control-group">
			<label class="control-label" for="inputEmail">Contact no:</label>
			<div class="controls">
			<input type="text" id="Contact" name="Contact" onchange="valid11(this)" placeholder="Contact no" maxlength="11" value="<?php if (isset($_POST['submit'])){echo $Contact;} ?>" required>
			</div>
		</div>
        
         <div class="control-group">
			<label class="control-label" for="inputPassword">Mail id:</label>
			<div class="controls">
			<input type="text" id="mail_id" name="mail_id" onchange="v(this)" placeholder="mail id" maxlength="50" value="<?php if (isset($_POST['submit'])){echo $mail_id;} ?>" required>
			</div>
		</div>
        
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
			<input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" placeholder="Password">
			</div>
		</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Confirm Password</label>
			<div class="controls">
			<input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" placeholder="Confirm Password" required>
					<?php if (isset($_POST['submit'])){?> 	<span class="label label-important"><?php echo $a; ?></span><?php }?>
			</div>

		</div>

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Signup(Confirm)</button>
			</div>
		</div>
    </div>
</div>
	
	
	<div class="span6">
	
	
	<div class="form-horizontal">

	
	<!--	
	<div class="control-group">
				<label class="control-label" for="inputEmail"></label>
				<div class="controls">
			<script type="text/javascript">
				jQuery(document).ready(function() {
					$('#refresh').tooltip('show');
					$('#refresh').tooltip('hide');
				})
			</script>
				<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > 
				<a href='javascript: refreshCaptcha();'><i data-placement="right" id="refresh"  title="Click to Refresh Code" class="icon-refresh icon-large icon-spin"></i></a> 
				<script language='JavaScript' type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
			</script>
				
				</div>
    </div>
	
	-->
	
		<!--
	
		    <div class="control-group">
    <label class="control-label" for="inputPassword">Enter the Code Above</label>
    <div class="controls">
    <input id="code" name="code" type="text" placeholder="Enter the Code Above" required></td>
	
	
	-->
	<?php 

if(isset($_POST['submit']))
{

		$student_no=$_POST['student_no'];
		
		$Firstname=$_POST['Firstname'];
		$Lastname=$_POST['Lastname'];
		$year_level=$_POST['year_level'];
		$term=$_POST['term'];
		$Gender=$_POST['Gender'];
		$Address=$_POST['Address'];
		$Contact=$_POST['Contact'];
		$mail_id=$_POST['mail_id'];

		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
	
		      $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "registrar/upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
								

if($password == $cpassword && $count == 0){ ?>
<?php  
mysql_query("update students set password = '$password' , photo = '$location' , status = '',firstname = '$Firstname',lastname = '$Lastname',gender = '$Gender',address = '$Address',contact = '$Contact',mail_id= '$mail_id',year_level = '$year_level',term = '$term',course='CSE' where student_no = '$student_no' ")or die(mysql_error());
?>
<script type="text/javascript">
 window.location='success.php'; 
</script>
<?php
}else{
echo " ";
}}
?>
  
	
		  <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" class="font" required> 
                                    </div>
                                </div>
	
	

		
		
	</div>
		
		</div>	
<script type="text/javaScript">
function valid(f) {
var re = /^[\d]*$/;


if (!re.test(f.value)) {
alert("only numbers are allowed");
f.value = f.value.replace(/[^\d]/g,"");

}

else {




var re1 = /^[1-9]\d{5}$/;

if (!re1.test(f.value)) {
alert("Roll should be 6 digit or Not start with zero");
f.value = f.value.replace(/^[\d]*$/,"");
}


var re2 = /^\d{2}(02\d{2})?$/;




if (!re2.test(f.value)) {
alert("Roll Should Be Contain Discipline code");
f.value = f.value.replace(/^[\d]*$/,"");
}

if ((f.value%100)>40) {
alert("Roll Not in Range");
f.value = f.value.replace(/^[\d]*$/,"");
}


}




} 
</script>

<script type="text/javaScript">
function valid11(f) {

var re = /^[\d]*$/;
if (!re.test(f.value)) {
alert("only numbers are allowed");
f.value = f.value.replace(/[^\d]/g,"");

}





} 
</script>

<script type="text/javaScript">
function v(f) {

 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
if (!re.test(f.value)) {
alert("Format should be like -->example123@domain.com");
f.value = f.value.replace(/[^\c]/g,"");
}
} 
</script>



<script type="text/javaScript">
function va(f) {
var re = /^[\d]*$/;
if (re.test(f.value)) {
alert("only character are allowed in Start");
f.value = f.value.replace(/[\d]/g,"");
}
} 
</script>

	
</form>