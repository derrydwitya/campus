<?php
include "koneksi.php";

$records=mysql_query("select * from kampus");
$object=array();
while ($record=mysql_fetch_array($records)){
	$object[]=$record;
}

echo json_encode($object);
?>