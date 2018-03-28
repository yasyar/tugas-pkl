<?php
include("../config/database.php");
include("../Classes/PHPExcel/IOFactory.php");

$file = $_FILES['import']['name'];
$extensionList = array("xls","xlsx","XLS","XLSX");
$pecah1 = explode(".", $file);
$dir = "../assets/";
$ekstensi1 = $pecah1[1];

if (in_array($ekstensi1,$extensionList)) {
	$tmp1 = $_FILES['import']['tmp_name'];
	$nama_baru1 = $file.'1'.".";
	$nama_baru1 = $nama_baru1.$ekstensi1;
	$upload = move_uploaded_file($tmp1,$dir.$nama_baru1);
		
	// Create new PHPExcel object
	$objPHPExcel = PHPExcel_IOFactory::load($dir.$nama_baru1);
	
	$dataArr = array();
	
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
		$worksheetTitle     = $worksheet->getTitle();
		$highestRow         = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		
		for ($row = 1; $row <= $highestRow; ++ $row) {
			for ($col = 0; $col < $highestColumnIndex; ++ $col) {
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$val = $cell->getValue();
				$dataArr[$row][$col] = $val;
			}
		}
	}
	unset($dataArr[1]); // since in our example the first row is the header and not the actual data
	foreach($dataArr as $val){
		$query = $db->query("INSERT INTO mahasiswa SET nrp = '" . $db->escape($val['1']) . "', nama = '" . $db->escape($val['2']) . "', alamat = '" . $db->escape($val['3']) . "', statusBelajar = '" . $db->escape($val['4']) . "', status = '" . $db->escape($val['5']) . "'");
	}
} else {
	echo "hanya diperbolehkan file ekstension jpeg,jpg,png "; 
} 
?>