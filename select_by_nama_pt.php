<?php
include "koneksi.php";
include "Kampus.php";

$latitude=$_GET['latitude'];
$longitude=$_GET['longitude'];
$nama_pt=$_GET['nama_pt'];

$records=mysql_query("select * from kampus where nama_pt like '%$nama_pt%'");
$daftar_kamus=array();
$index_kampus=0;
$object=array();
while ($record=mysql_fetch_array($records)){
	$kampus=new Kampus();
	$kampus->set_kode_pt($record['kode_pt']);
	$kampus->set_nama_pt($record['nama_pt']);
	$kampus->set_alamat($record['alamat']);
	$kampus->set_kota($record['kota']);
	$kampus->set_kodepost($record['kodepost']);
	$kampus->set_telepon($record['telepon']);
	$kampus->set_fax($record['fax']);
	$kampus->set_email($record['email']);
	$kampus->set_website($record['website']);
	$kampus->set_nama_yayasan($record['nama_yayasan']);
	$kampus->set_ketua_yayasan($record['ketua_yayasan']);
	$kampus->set_ketua_pt($record['ketua_pt']);
	$kampus->set_latitude($record['latitude']);
	$kampus->set_longitude($record['longitude']);
	
	$x1=$kampus->get_latitude();
	$y1=$kampus->get_longitude();
	
	$x2=$latitude;
	$y2=$longitude;
	$jarak=sqrt(pow($x1-$x2, 2)+pow($y1-$y2, 2))*100;
	
	$kampus->set_jarak(round($jarak, 2));
	$daftar_kampus[$index_kampus]=$kampus;
	$index_kampus++;
}


for($i=0; $i<count($daftar_kampus); $i++){
	$kampus=$daftar_kampus[$i];
	$object[]=Array(
		'kode_pt'=>$kampus->get_kode_pt(),
		'nama_pt'=>$kampus->get_nama_pt(),
		'alamat'=>$kampus->get_alamat(),
		'kota'=>$kampus->get_kota(),
		'kodepost'=>$kampus->get_kodepost(),
		'telepon'=>$kampus->get_telepon(),
		'fax'=>$kampus->get_fax(),
		'email'=>$kampus->get_email(),
		'website'=>$kampus->get_website(),
		'nama_yayasan'=>$kampus->get_nama_yayasan(),
		'ketua_yayasan'=>$kampus->get_ketua_yayasan(),
		'ketua_pt'=>$kampus->get_ketua_pt(),
		'latitude'=>$kampus->get_latitude(),
		'longitude'=>$kampus->get_longitude(),
		'jarak'=>$kampus->get_jarak()
		);
}

echo "{kampus:".json_encode($object)."}";
?>