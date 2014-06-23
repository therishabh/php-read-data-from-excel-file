<?php $xls = new Spreadsheet_Excel_Reader('test1.xls'); 
	$xls = new DOMDocument();
	$xls->load('test1.xls');
?>


<?php
 $rows = $xls->rowcount();
 $cols = $xls->colcount();
 $csv = "";

 for($r = 0; $r < $rows; $r++) {
    for($c = 0; $c < $cols; $c++) {
       $csv .= $xls->raw($r, $c);
       if($c == $cols - 1) {
          $csv .= "\n";
       } else {
          $csv .= ",";
       }   
    }
 }
?>


<?php
   $handler = fopen("test.csv", "w");
   fwrite($csv, $handler);
   fclose($handler);
?>