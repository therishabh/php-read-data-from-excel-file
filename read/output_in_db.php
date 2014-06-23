<?php
include 'db.php';
?>
	
	<?php
	include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
	
	 
    $excel->read($_FILES['file']['tmp_name']);
	$no_of_rows = $excel->sheets[0]['numRows'];
	$no_of_columns = $excel->sheets[0]['numCols'];

	//for monday..
	if(isset($excel->sheets[0]['cells'][2][2]))
    $data_1_1 = $excel->sheets[0]['cells'][2][2];
	else
	$data_1_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][2][3]))
    $data_1_2 = $excel->sheets[0]['cells'][2][3];
	else
	$data_1_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][2][4]))
    $data_1_3 = $excel->sheets[0]['cells'][2][4];
	else
	$data_1_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][2][5]))
    $data_1_4 = $excel->sheets[0]['cells'][2][5];
	else
	$data_1_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][2][6]))
    $data_1_5 = $excel->sheets[0]['cells'][2][6];
	else
	$data_1_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][2][7]))
    $data_1_6 = $excel->sheets[0]['cells'][2][7];
	else
	$data_1_6 = "";
	
	//for tuesday..
	if(isset($excel->sheets[0]['cells'][3][2]))
    $data_2_1 = $excel->sheets[0]['cells'][3][2];
	else
	$data_2_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][3][3]))
    $data_2_2 = $excel->sheets[0]['cells'][3][3];
	else
	$data_2_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][3][4]))
    $data_2_3 = $excel->sheets[0]['cells'][3][4];
	else
	$data_2_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][3][5]))
    $data_2_4 = $excel->sheets[0]['cells'][3][5];
	else
	$data_2_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][3][6]))
    $data_2_5 = $excel->sheets[0]['cells'][3][6];
	else
	$data_2_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][3][7]))
    $data_2_6 = $excel->sheets[0]['cells'][3][7];
	else
	$data_2_6 = "";

	
	//for wednesday..
	if(isset($excel->sheets[0]['cells'][4][2]))
    $data_3_1 = $excel->sheets[0]['cells'][4][2];
	else
	$data_3_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][4][3]))
    $data_3_2 = $excel->sheets[0]['cells'][4][3];
	else
	$data_3_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][4][4]))
    $data_3_3 = $excel->sheets[0]['cells'][4][4];
	else
	$data_3_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][4][5]))
    $data_3_4 = $excel->sheets[0]['cells'][4][5];
	else
	$data_3_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][4][6]))
    $data_3_5 = $excel->sheets[0]['cells'][4][6];
	else
	$data_3_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][4][7]))
    $data_3_6 = $excel->sheets[0]['cells'][4][7];
	else
	$data_3_6 = "";
	
	//for thursday..
	if(isset($excel->sheets[0]['cells'][5][2]))
    $data_4_1 = $excel->sheets[0]['cells'][5][2];
	else
	$data_4_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][5][3]))
    $data_4_2 = $excel->sheets[0]['cells'][5][3];
	else
	$data_4_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][5][4]))
    $data_4_3 = $excel->sheets[0]['cells'][5][4];
	else
	$data_4_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][5][5]))
    $data_4_4 = $excel->sheets[0]['cells'][5][5];
	else
	$data_4_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][5][6]))
    $data_4_5 = $excel->sheets[0]['cells'][5][6];
	else
	$data_4_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][5][7]))
    $data_4_6 = $excel->sheets[0]['cells'][5][7];
	else
	$data_4_6 = "";
	
	//for friday..
	if(isset($excel->sheets[0]['cells'][6][2]))
    $data_5_1 = $excel->sheets[0]['cells'][6][2];
	else
	$data_5_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][6][3]))
    $data_5_2 = $excel->sheets[0]['cells'][6][3];
	else
	$data_5_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][6][4]))
    $data_5_3 = $excel->sheets[0]['cells'][6][4];
	else
	$data_5_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][6][5]))
    $data_5_4 = $excel->sheets[0]['cells'][6][5];
	else
	$data_5_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][6][6]))
    $data_5_5 = $excel->sheets[0]['cells'][6][6];
	else
	$data_5_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][6][7]))
    $data_5_6 = $excel->sheets[0]['cells'][6][7];
	else
	$data_5_6 = "";

	//for saturday..
	if(isset($excel->sheets[0]['cells'][7][2]))
    $data_6_1 = $excel->sheets[0]['cells'][7][2];
	else
	$data_6_1 = "";
	
	
	if(isset($excel->sheets[0]['cells'][7][3]))
    $data_6_2 = $excel->sheets[0]['cells'][7][3];
	else
	$data_6_2 = "";
	
	
	if(isset($excel->sheets[0]['cells'][7][4]))
    $data_6_3 = $excel->sheets[0]['cells'][7][4];
	else
	$data_6_3 = ""; 
	
	
	if(isset($excel->sheets[0]['cells'][7][5]))
    $data_6_4 = $excel->sheets[0]['cells'][7][5];
	else
	$data_6_4 = "";
	
	
	if(isset($excel->sheets[0]['cells'][7][6]))
    $data_6_5 = $excel->sheets[0]['cells'][7][6];
	else
	$data_6_5 = "";
	
	
	if(isset($excel->sheets[0]['cells'][7][7]))
    $data_6_6 = $excel->sheets[0]['cells'][7][7];
	else
	$data_6_6 = "";
	
	
	//insert values into database.. 

	//update Monday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_1_1' WHERE Day = 'Monday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_1_2' WHERE Day = 'Monday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_1_3' WHERE Day = 'Monday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_1_4' WHERE Day = 'Monday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_1_5' WHERE Day = 'Monday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_1_6' WHERE Day = 'Monday'");
	
	
	//update Tuesday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_2_1' WHERE Day = 'Tuesday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_2_2' WHERE Day = 'Tuesday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_2_3' WHERE Day = 'Tuesday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_2_4' WHERE Day = 'Tuesday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_2_5' WHERE Day = 'Tuesday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_2_6' WHERE Day = 'Tuesday'");


	//update Wednesday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_3_1' WHERE Day = 'Wednesday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_3_2' WHERE Day = 'Wednesday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_3_3' WHERE Day = 'Wednesday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_3_4' WHERE Day = 'Wednesday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_3_5' WHERE Day = 'Wednesday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_3_6' WHERE Day = 'Wednesday'");
	
	
	//update Thursday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_4_1' WHERE Day = 'Thursday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_4_2' WHERE Day = 'Thursday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_4_3' WHERE Day = 'Thursday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_4_4' WHERE Day = 'Thursday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_4_5' WHERE Day = 'Thursday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_4_6' WHERE Day = 'Thursday'");
	
	
	//update Friday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_5_1' WHERE Day = 'Friday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_5_2' WHERE Day = 'Friday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_5_3' WHERE Day = 'Friday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_5_4' WHERE Day = 'Friday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_5_5' WHERE Day = 'Friday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_5_6' WHERE Day = 'Friday'");


	//update Saturday row..
	$query = mysql_query("UPDATE timetable SET One = '$data_6_1' WHERE Day = 'Saturday'");
	$query = mysql_query("UPDATE timetable SET Two = '$data_6_2' WHERE Day = 'Saturday'");
	$query = mysql_query("UPDATE timetable SET Three = '$data_6_3' WHERE Day = 'Saturday'");
	$query = mysql_query("UPDATE timetable SET Four = '$data_6_4' WHERE Day = 'Saturday'");
	$query = mysql_query("UPDATE timetable SET Five = '$data_6_5' WHERE Day = 'Saturday'");
	$query = mysql_query("UPDATE timetable SET Six = '$data_6_6' WHERE Day = 'Saturday'");
	
	if($query)
	{
		echo "Successfully Inserted..";
	}
	
	?>
