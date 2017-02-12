


<?php


session_start();
require('mc_ad.php');

require "dbcon.php";




//$roll = $_SESSION['roll'];
//$session = $_SESSION['session'];


 //$data = $_SESSION['kustudents'];
 $get_name = $_SESSION['name1'];
 $get_name1 = $_SESSION['name2'];

$get_dis = "CSE";




$get_roll = $_SESSION['roll_no'];
					$get_session = $_SESSION['session1'];
					//$school = $_SESSION['school'];
					//$discipline = $_SESSION['discipline'];
					$get_term = $_SESSION['term1'];
					$get_year = $_SESSION['year1'];
					
					
					
					

$pic=$_SESSION['pic'];




 $total_credit = 0.00;
			 $earned_credits = 0.00;
				 $tgpa1=0.00;
			
	 $tgpa=0.00;
			 
			 $var = mysql_query("select * from result where student_id = '$get_roll' and term = '$get_term' and year = '$get_year' and session = '$get_session'");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["unit"]+$total_credit;
			$total_credit=number_format($total_credit, 2);
			   
			   if($ary["Grade_Point"]!=0)
				 {
				   $earned_credits = $ary["unit"]+ $earned_credits;
				   $earned_credits=number_format($earned_credits, 2);
				 }
				 $tgpa1 = $ary["unit"]*$ary["Grade_Point"]+$tgpa1;
				
				
				
                    
				 
			
				if($earned_credits!=0||$earned_credits!=0.00)
				 {
				    $tgpa = $tgpa1/$earned_credits; 
					$tgpa=round($tgpa,2);
					}
			 }
			 
	




$result=mysql_query("select * from result where student_id = '$get_roll' and term = '$get_term' and year = '$get_year' and session = '$get_session'");
$number_of_products = mysql_numrows($result);
 
			 

$column_code = "";
$column_name = "";
$column_price = "";
$column_total = "";
$column_lg  ="";
 $column_gp="";
//$total = 0;



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
$subject_id = $row['sub_code'];
									/* subject */
									$subject_query = mysql_query("select * from subject where code = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){

    $code = $row["sub_code"];
    $name = $subject_row['title'];
    $real_price = $row["unit"];
	$total = $row["remarks"];
	$l_g=$row["Letter_Grade"];
	if($l_g=="0")
	$l_g="F";
   $g_p = $row["Grade_Point"];
if($g_p=="0")
	$g_p="0.00";
	
	if($g_p=="4")
	$g_p="4.00";
	
	
	if($real_price=="2")
	$real_price="2.00";
	if($real_price=="3")
	$real_price="3.00";
	if($real_price=="4")
	$real_price="4.00";
	
	if($real_price=="1.5")
	$real_price="1.50";
	
	
	
	
	
	
    $column_code = $column_code.$code."\n\n";
   $column_name = $column_name.$name."\n\n";
    $column_price = $column_price.$real_price."\n\n";
	 $column_total = $column_total.$total."\n\n";
     $column_lg=$column_lg.$l_g."\n\n";
       $column_gp=$column_gp.$g_p."\n\n";

    //Sum all the Prices (TOTAL)
   // $total = $total+$real_price;
}}
mysql_close();


$pdf=new PDF_MC_Table();
$pdf->AddPage();




 //$imageid = $data;
$files = glob("$pic");
for ($i=0; $i<count($files); $i++)
                                  {
	                                   $num = $files[$i]; 
									   
									   $pdf->Image("$num",10,12,30,0,'');
                                          $pdf->SetLeftMargin(30);
									   
									   
									// echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
                                  }

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(22,60,20,20,20,20));
srand(microtime()*1000000);


//$pdf->SetTextColor(242, 154, 0);

if($get_year=="1"){$get_year="1st";}
					if($get_year=="2"){$get_year="2nd";}
					if($get_year=="3"){$get_year="3rd";}
					if($get_year=="4"){$get_year="4th";}
					
					
if($get_term=="1"){$get_term="I";}
					if($get_term=="2"){$get_term="II";}					
					

$pdf->SetFont('Arial','',14);
$pdf->write('10',"          Student Roll:  ".$get_roll. "                ");
$pdf->Ln(10);

$pdf->SetFont('Arial','',14);
$pdf->write('10',"          Year:  ".$get_year."                                                 ");


$pdf->write('10',"Term:  ".$get_term."             ");
$pdf->Ln(10);


$pdf->write('10',"          Discipline:  ".$get_dis."                                       ");
$pdf->write('10',"Session:  ".$get_session."    ");
$pdf->Ln(15);


/*

$get_roll = $_SESSION['roll'];//"100211";
$get_session =  $_SESSION['session'];//"2015-2016";
$get_term = $_SESSION['term'];//"1";
$get_year =  $_SESSION['year'];//"1";


*/

$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Row(array("Course No.   ","Course Title     ","Credit Hours","Letter Grade","Grade Point"/*,"Remarks"*/));


$pdf->SetFont('Arial','',8);

	$pdf->Row(array($column_code,$column_name,$column_price, $column_lg,$column_gp/*, $column_total*/));
	$pdf->Ln(1);
		$pdf->SetFont('Arial','B',10);
	$pdf->write('10'," Total Credit:  ".$total_credit."    ");
	$pdf->Ln(8);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->write('10'," Earned Credit Hours In This Term :  ".$earned_credits."    ");
	$pdf->Ln(8);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->write('10'," TGPA :  ".$tgpa."    ");
	$pdf->Ln(8);
	
	
	$pdf->SetFont('Arial','B',10);
	
	
	
	
$pdf->Output( "Result Card.pdf", "I" );

?>
