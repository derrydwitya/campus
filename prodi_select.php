<?php
include 'koneksi.php';

$bidang_ilmu=$_GET['bidang_ilmu'];

$result=mysql_query("SELECT p.kode_prodi, p.kode_jenjang, j.nama_jenjang,  p.nama_prodi, p.kode_bidang_ilmu FROM prodi p INNER JOIN jenjang j ON j.kode_jenjang=p.kode_jenjang WHERE p.kode_bidang_ilmu='$bidang_ilmu' ORDER BY p.nama_prodi");
$output='';
while($row=mysql_fetch_array($result)){
	$output=$output.$row['nama_prodi'].' '.$row['nama_jenjang'].':'.$row['kode_prodi'].';';
}

$output=substr($output, 0, strlen($output)-1);

echo $output;
?>