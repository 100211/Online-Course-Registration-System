<?php


session_start();
require('mc_table.php');

require "dbcon.php";

$get_id = $_GET['id']; 
$_SESSION["roll"] = $get_id;

$rol=$_SESSION["roll"];

$quer=mysql_query("select * from `registration` where `student_no`='$rol'  ORDER BY `reg_id` DESC LIMIT 1")or die(mysql_error());
					$row11=mysql_fetch_array($quer);	



//$roll = $_SESSION['roll'];
//$session = $_SESSION['session'];

 //$data = $_SESSION['kustudents'];
/// $get_name = $_SESSION['name'];


$get_dis = "CSE";

$get_d="SET";


$st_query=mysql_query("select * from students where student_no = '$rol'")or die(mysql_error());
			$row1 = mysql_fetch_array($st_query);


$student_pic = $row1['photo'];
$_SESSION['pic']=$student_pic;
	$_SESSION['name1']=$row1['firstname'];
	$_SESSION['name2']=$row1['lastname'];

$_SESSION["session"] = $row11['session'];// $_POST["session"];
//$_SESSION["school"] = $_POST["school"];
//$_SESSION["discipline"] = $_POST["discipline"];
$_SESSION["term"] = $row11['term'];//$_POST["term"];
$_SESSION["year"] = $row11['year'];//$_POST["year"];

 $get_name = $_SESSION['name1'];
 $get_name1 = $_SESSION['name2'];

					$get_session = $_SESSION['session'];
					//$school = $_SESSION['school'];
					//$discipline = $_SESSION['discipline'];
					$get_term = $_SESSION['term'];
					$get_year = $_SESSION['year'];
					
					
					
					

$pic=$_SESSION['pic'];



  $total_credi = 0.00;
			 $earned_credi = 0.00;
				 $tgpa1=0.00;
			$tgpa=0.00;

			 
			 $var11 = mysql_query("select * from result where student_id ='$rol' and term ='1' and year ='1' ");
			 $rows11 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows11 ; $i++)
			 {
			   $ary = mysql_fetch_array($var11);
			  
             
            $total_credi = $ary["unit"]+$total_credi;
			  $total_credi=number_format($total_credi, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi = $ary["unit"]+ $earned_credi;
				   $earned_credi=number_format($earned_credi, 2);
				 }
				 $tgpa1 = $ary["unit"]*$ary["Grade_Point"]+$tgpa1;
				
				
				

				 
			
				if($earned_credi!=0||$earned_credi!=0.00)
				 {
				    $tgpa = $tgpa1/$earned_credi;
					$tgpa=round($tgpa,2);
					}
					
					
			 }




  $total_credi12 = 0.00;
			 $earned_credi12 = 0.00;
				 $tgpa112=0.00;
			$tgpa12=0.00;

			 
			 $var1112 = mysql_query("select * from result where student_id ='$rol' and term ='2' and year ='1' ");
			 $rows1112 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows1112 ; $i++)
			 {
			   $ary = mysql_fetch_array($var1112);
			  
             
            $total_credi12 = $ary["unit"]+$total_credi12;
			  $total_credi12=number_format($total_credi12, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi12 = $ary["unit"]+ $earned_credi12;
				   $earned_credi12=number_format($earned_credi12, 2);
				 }
				 $tgpa112 = $ary["unit"]*$ary["Grade_Point"]+$tgpa112;
				
				
				

				 
			
				if($earned_credi12!=0||$earned_credi12!=0.00)
				 {
				    $tgpa12 = $tgpa112/$earned_credi12;
					$tgpa12=round($tgpa12,2);
					}
					
					
			 }

 $total_credi21 = 0.00;
			 $earned_credi21 = 0.00;
				 $tgpa121=0.00;
			$tgpa21=0.00;

			 
			 $var1121 = mysql_query("select * from result where student_id ='$rol' and term ='1' and year ='2' ");
			 $rows1121 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows1121 ; $i++)
			 {
			   $ary = mysql_fetch_array($var1121);
			  
             
            $total_credi21 = $ary["unit"]+$total_credi21;
			  $total_credi=number_format($total_credi21, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi21 = $ary["unit"]+ $earned_credi21;
				   $earned_credi21=number_format($earned_credi21, 2);
				 }
				 $tgpa121 = $ary["unit"]*$ary["Grade_Point"]+$tgpa121;
				
				
				

				 
			
				if($earned_credi21!=0||$earned_credi21!=0.00)
				 {
				    $tgpa21 = $tgpa121/$earned_credi21;
					$tgpa21=round($tgpa21,2);
					}
					
					
			 }
			 
			$total_credi22 = 0.00;
			 $earned_credi22 = 0.00;
				 $tgpa122=0.00;
			$tgpa22=0.00; 
			
			$var1122 = mysql_query("select * from result where student_id ='$rol' and term ='2' and year ='2' ");
			 $rows1122 = mysql_num_rows($var1122);
			 for($i=0 ; $i<$rows1122 ; $i++)
			 {
			   $ary = mysql_fetch_array($var1122);
			  
             
            $total_credi22 = $ary["unit"]+$total_credi22;
			  $total_credi22=number_format($total_credi22, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi22 = $ary["unit"]+ $earned_credi22;
				   $earned_credi22=number_format($earned_credi22, 2);
				 }
				 $tgpa122 = $ary["unit"]*$ary["Grade_Point"]+$tgpa122;
				
				
				

				 
			
				if($earned_credi22!=0||$earned_credi22!=0.00)
				 {
				    $tgpa22 = $tgpa122/$earned_credi22;
					$tgpa22=round($tgpa22,2);
					}
					
					
			 } 
			 

$total_credi31 = 0.00; 
          $earned_credi31 = 0.00;
				  $tgpa131=0.00;
			$tgpa31=0.00;

			 
			 $var1131 = mysql_query("select * from result where student_id ='$rol' and term ='1' and year ='3' ");
			 $rows1131 = mysql_num_rows($var1131);
			 for($i=0 ; $i<$rows1131 ; $i++)
			 {
			   $ary = mysql_fetch_array($var1131);
			  
             
            $total_credi31 = $ary["unit"]+$total_credi31;
			  $total_credi31=number_format($total_credi31, 2); 
			   if($ary["Grade_Point"]!=0)
				 { 
				 $earned_credi31 = $ary["unit"]+ $earned_credi31; 
				 $earned_credi31=number_format($earned_credi31, 2);
				 }
				  $tgpa131 = $ary["unit"]*$ary["Grade_Point"]+ $tgpa131;
				
				
				

				 
			
				if($earned_credi!=0||$earned_credi!=0.00)
				 {
				    $tgpa31 =  $tgpa131/$earned_credi;
					$tgpa31=round($tgpa31,2);
					}
					
					
			 }
			 
			 
$total_credi32 = 0.00;
			 $earned_credi32 = 0.00;
				 $tgpa132=0.00;
			$tgpa32=0.00;

			 
			 $var11 = mysql_query("select * from result where student_id ='$rol' and term ='2' and year ='3' ");
			 $rows11 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows11 ; $i++)
			 {
			   $ary = mysql_fetch_array($var11); $total_credi32 = $ary["unit"]+$total_credi; $total_credi32=number_format($total_credi, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi32 = $ary["unit"]+ $earned_credi32;
				   $earned_credi32=number_format($earned_credi32, 2);
				 }
				 $tgpa132 = $ary["unit"]*$ary["Grade_Point"]+$tgpa132;
				
				
				

				 
			
				if($earned_credi32!=0||$earned_credi32!=0.00)
				 {
				    $tgpa32 = $tgpa132/$earned_credi32;
					$tgpa32=round($tgpa32,2);
					}
					
					
			 }



 $total_credi41 = 0.00;
			 $earned_credi41 = 0.00;
				 $tgpa141=0.00;
			$tgpa41=0.00;

			 
			 $var11 = mysql_query("select * from result where student_id ='$rol' and term ='1' and year ='4' ");
			 $rows11 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows11 ; $i++)
			 {
			   $ary = mysql_fetch_array($var11);
			  
             
            $total_credi41 = $ary["unit"]+$total_credi41;
			  $total_credi41=number_format($total_credi41, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi41 = $ary["unit"]+ $earned_credi41;
				   $earned_credi41=number_format($earned_credi41, 2);
				 }
				 $tgpa141 = $ary["unit"]*$ary["Grade_Point"]+$tgpa141;
				
				
				

				 
			
				if($earned_credi41!=0||$earned_credi41!=0.00)
				 {
				    $tgpa41 = $tgpa141/$earned_credi41;
					$tgpa41=round($tgpa41,2);
					}
					
					
			 }


 $total_credi42 = 0.00;
			 $earned_credi42 = 0.00;
				 $tgpa142=0.00;
			$tgpa42=0.00;

			 
			 $var11 = mysql_query("select * from result where student_id ='$rol' and term ='2' and year ='4' ");
			 $rows11 = mysql_num_rows($var11);
			 for($i=0 ; $i<$rows11 ; $i++)
			 {
			   $ary = mysql_fetch_array($var11);
			  
             
            $total_credi42 = $ary["unit"]+$total_credi42;
			  $total_credi42=number_format($total_credi42, 2); 
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credi42 = $ary["unit"]+ $earned_credi42;
				   $earned_credi42=number_format($earned_credi42, 2);
				 }
				 $tgpa142 = $ary["unit"]*$ary["Grade_Point"]+$tgpa142;
				
				
				

				 
			
				if($earned_credi42!=0||$earned_credi42!=0.00)
				 {
				    $tgpa42 = $tgpa42142/$earned_credi42;
					$tgpa42=round($tgpa42,2);
					}
					
					
			 }










$total_credit = 0;
			 $earned_credits = 0;
				
			

			 
			 $var = mysql_query("select * from registration where student_no = '$rol' and term = '$get_term' and year = '$get_year' and session = '$get_session'");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["credit_hours"]+$total_credit;
			   $total_credit=number_format($total_credit, 2);
			  
				 
				 }
			
			 



$result=mysql_query("select * from registration where student_no = '$rol' and term = '$get_term' and year = '$get_year' and session = '$get_session'");
$number_of_products = mysql_numrows($result);


$column_code = "";
$column_name = "";
$column_price = "";
$column_total = "";

//$total = 0;



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
   $subject_id = $row['subject_id'];
   	$subject_query = mysql_query("select * from subject where code = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
   
    $code = $row["subject_id"];
    $name = $row["course_title"];
    $real_price = $subject_row['unit'];;
	$total = $row["remarks"];
  

    $column_code = $column_code.$code."\n\n";
    $column_name = $column_name.$name."\n\n";
    $column_price = $column_price.$real_price."\n\n";
	 $column_total = $column_total.$total."\n\n";



    //Sum all the Prices (TOTAL)
   // $total = $total+$real_price;
}}
mysql_close();


$pdf=new PDF_MC_Table();
$pdf->AddPage();



 $files = glob("registrar/$pic");
for ($i=0; $i<count($files); $i++)
                                  {
	                                   $num = $files[$i]; 
									   
									   $pdf->Image("$num",10,12,30,0,'');
                                          $pdf->SetLeftMargin(45);
									   
									   
									// echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
                                  }

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(25,68,25,20));
srand(microtime()*1000000);

if($get_year=="1"){$get_year="1st";}
					if($get_year=="2"){$get_year="2nd";}
					if($get_year=="3"){$get_year="3rd";}
					if($get_year=="4"){$get_year="4th";}
					
					
if($get_term=="1"){$get_term="I";}
					if($get_term=="2"){$get_term="II";}					
					
//$pdf->SetTextColor(242, 154, 0);

$z='';

$pdf->SetFont('Arial','',10);
$pdf->write('10',"Name of Student:  ".$get_name1."   ".$get_name."    ");
$pdf->Ln(7);

$pdf->SetFont('Arial','',10);
$pdf->write('10',"Student No.       :  ".$rol."    ");
$pdf->Ln(7);

$pdf->write('10',"Discipline:  ".$get_dis."            ");
$pdf->write('10',"School:  ".$get_d."          ");
$pdf->Ln(7);

$pdf->SetFont('Arial','',10);
$pdf->write('10',"Term:  ".$get_term."                         ");
$pdf->write('10',"Year:  ".$get_year."           ");
$pdf->write('10',"Session:  ".$get_session."    ");



$pdf->Ln(5);





/*

$get_roll = $_SESSION['roll'];//"100211";
$get_session =  $_SESSION['session'];//"2015-2016";
$get_term = $_SESSION['term'];//"1";
$get_year =  $_SESSION['year'];//"1";


*/

$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->Row(array("COURSE NO.   ","COURSE TITLE","CREDIT HOURS   ","REMARKS"));


$pdf->SetFont('Arial','',8);

	$pdf->Row(array($column_code,$column_name ,$column_price, $column_total));
	$pdf->Ln(1);
	$pdf->SetWidths(array(30,30,30,30));
srand(microtime()*1000000);

$pdf->write('10',"                     ");
$pdf->Row(array("YEAR 1  ","YEAR 2  ","YEAR 3  ","YEAR 4  "));

	$pdf->SetWidths(array(15,15,15,15,15,15,15,15));
srand(microtime()*1000000);
	
$pdf->write('10',"                     ");
$pdf->Row(array("1st term   ","2nd term","1st term   ","2nd term","1st term   ","2nd term","1st term   ","2nd term"));
	
if($get_year=="1st" and $get_term =="I"){
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($z,$z,$z,$z,$z,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($z,$z,$z,$z,$z,$z,$z,$z));
	}
	
	
if ($get_year=="1st" and $get_term =="II")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$z,$z,$z,$z,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$z,$z,$z,$z,$z,$z,$z));
	}
	
	
	
if ($get_year=="2nd" and $get_term =="I")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$z,$z,$z,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$z,$z,$z,$z,$z,$z));
	}
		
	
if ($get_year=="2nd" and $get_term =="II")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$earned_credi21,$z,$z,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$tgpa21,$z,$z,$z,$z,$z));
	}
			
if ($get_year=="3rd" and $get_term =="I")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$earned_credi21,$earned_credi22,$z,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$tgpa21,$tgpa22,$z,$z,$z,$z));
	}
			
	if ($get_year=="3rd" and $get_term =="II")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$earned_credi21,$earned_credi22,$earned_credi31,$z,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$tgpa21,$tgpa22,$tgpa31,$z,$z,$z));
	}
	
	
	if ($get_year=="4th" and $get_term =="I")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$earned_credi21,$earned_credi22,$earned_credi31,$earned_credi32,$z,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$tgpa21,$tgpa22,$tgpa31,$tgpa32,$z,$z));
	}
	
	
		if ($get_year=="4th" and $get_term =="II")	{
$pdf->SetFont('Arial','',5);
$pdf->write('5',"Complete Credit        ");

$pdf->Row(array($earned_credi,$earned_credi12,$earned_credi21,$earned_credi22,$earned_credi31,$earned_credi32,$earned_credi41,$z));
$pdf->write('5',"GPA                          ");
		$pdf->Row(array($tgpa,$tgpa12,$tgpa21,$tgpa22,$tgpa31,$tgpa32,$earned_credi41,$z));
	}
	
	
	
	
	
	
	$pdf->Ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->write('10',"Credit hours taken in current term:  ". $total_credit."    ");
	
	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','I',10);
	
	$pdf->write('10',"Student's Signature: .................................                           ");
	$pdf->write('10',"Date: ................................ ");
	$pdf->Ln(8);
	
	$pdf->write('10',"Hall Name: ...........................................                            ");
	$pdf->Ln(8);
	
	
	$pdf->write('10',"Provost's Signature: .................................                            ");
	$pdf->write('10',"Date: ................................ ");
	$pdf->Ln(8);
	$pdf->write('10',"Course Co-ordinator: .................................                         ");
	$pdf->write('10',"Date: ................................ ");
	$pdf->Ln(8);
	$pdf->write('10',"Displine Head's Signature: ...........................                       ");
	$pdf->write('10',"Date: ................................ ");
	$pdf->Ln(8);
	$pdf->write('10',"Receiving Officer: .................................                              ");
	$pdf->write('10',"Date: ................................ ");
	
$pdf->Output( "Registration Card.pdf", "I" );

?>
