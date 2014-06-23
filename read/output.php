<html>
  <head>
    <style type="text/css">
    table {
    	border-collapse: collapse;
    }        
    td {
    	border: 1px solid black;
    	padding: 0 0.5em;
    }        
    </style>
  </head>
  <body>
	<?php
	include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
	?>
    
    <table>
    <?php
    $excel->read($_FILES['file']['tmp_name']);
    //$excel->read('sample.xls');
	echo "2nd row and 3rd colums : ";  
    echo $excel->sheets[0]['cells'][2][3];
	echo "<br>";
	echo "No of Rows : ";
	echo $excel->sheets[0]['numRows'];
	echo "<br>";
	echo "No of Colums : ";
	echo $excel->sheets[0]['numCols'];
	
	//echo $cell = isset($excel->sheets[0]['cells'][3][2]) ? $excel->sheets[0]['cells'][2][2] : '';

	
	$x=1;
    while($x<=$excel->sheets[0]['numRows']) 
	{
      echo "\t\t<tr>\n\n";
      $y=1;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        echo "\t\t<td>$cell</td>\n";  
        $y++;
      }  
      echo "\t</tr>\n";
      $x++;
    }
    ?>    
    </table><br/>
	Sheet 2:<br/><br/>
    <table>
    <?php
   // $excel->read('sample.xls');    
//    $x=1;
//    while($x<=$excel->sheets[1]['numRows']) {
//      echo "\t<tr>\n";
//      $y=1;
//      while($y<=$excel->sheets[1]['numCols']) {
//        $cell = isset($excel->sheets[1]['cells'][$x][$y]) ? $excel->sheets[1]['cells'][$x][$y] : '';
//        echo "\t\t<td>$cell</td>\n";  
//        $y++;
//      }  
//      echo "\t</tr>\n";
//      $x++;
//    }
    ?>    
    </table>
	
	
  </body>
</html>
