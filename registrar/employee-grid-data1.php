<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sti";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$a = $_POST['id'];

$columns = array( 
// datatable column index  => database column name
	0 =>'student_id', 
	1 => 'sub_code',
	2=> 'unit',
	3=> 'Letter_Grade',
	4=> 'Grade_Point',
	5=> 'year',
	6=> 'term',
	7=> 'session',
	
	
	
);




// getting total number records without any search
$sql = "SELECT *";
$sql.=" FROM result";
$query=mysqli_query($conn, $sql) or die("employee-grid-data1.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.




$sql = "SELECT *  ";
$sql.=" FROM result WHERE  student_id= '$a'";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) ){   //name
	$sql.=" AND student_id LIKE '".$requestData['columns'][0]['search']['value']."%' ";
}
if( !empty($requestData['columns'][1]['search']['value']) ){  //salary
	$sql.=" AND sub_code LIKE '".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){  //salary
	$sql.=" AND unit LIKE '".$requestData['columns'][2]['search']['value']."%' ";
}
if( !empty($requestData['columns'][3]['search']['value']) ){  //salary
	$sql.=" AND Letter_Grade = '".$requestData['columns'][3]['search']['value']."' ";
}
if( !empty($requestData['columns'][4]['search']['value']) ){  //salary
	$sql.=" AND Grade_Point = '".$requestData['columns'][4]['search']['value']."' ";
}
if( !empty($requestData['columns'][5]['search']['value']) ){  //salary
	$sql.=" AND year LIKE '".$requestData['columns'][5]['search']['value']."%' ";
}
if( !empty($requestData['columns'][6]['search']['value']) ){  //salary
	$sql.=" AND term LIKE '".$requestData['columns'][6]['search']['value']."%' ";
}
if( !empty($requestData['columns'][7]['search']['value']) ){  //salary
	$sql.=" AND session LIKE '".$requestData['columns'][7]['search']['value']."%' ";
}
$query=mysqli_query($conn, $sql) or die("employee-grid-data1.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
	
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql) or die("employee-grid-data1.php: get employees");

	


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	
	
	$nestedData[] = $row["sub_code"];
	$nestedData[] = $row["unit"];
	$nestedData[] = $row["Letter_Grade"];
	$nestedData[] = $row["Grade_Point"];
	$nestedData[] = $row["year"];
	$nestedData[] = $row["term"];
		$nestedData[] = $row["session"];
		
		
	$nestedData[] = " ";
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>

