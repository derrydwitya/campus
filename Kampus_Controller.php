<?php
include "Kampus.php";
$action=$_GET['action'];

if($action=='insert_view'){
	header('Location:insert_kampus_view.php');
}else if($action=='update_view'){
	$kode_pt=$_GET['kode_pt'];
	header("Location:update_kampus_view.php?kode_pt=$kode_pt");
}else if($action=='insert_process'){
	$kode_pt=$_POST['kode_pt'];
	$nama_pt=$_POST['nama_pt'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$kodepost=$_POST['kodepost'];
	$telepon=$_POST['telepon'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$nama_yayasan=$_POST['nama_yayasan'];
	$ketua_yayasan=$_POST['ketua_yayasan'];
	$ketua_pt=$_POST['ketua_pt'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	
	$k=new Kampus();
	$k->set_kode_pt($kode_pt);
	$k->set_nama_pt($nama_pt);
	$k->set_alamat($alamat);
	$k->set_kota($kota);
	$k->set_kodepost($kodepost);
	$k->set_telepon($telepon);
	$k->set_fax($fax);
	$k->set_email($email);
	$k->set_website($website);
	$k->set_nama_yayasan($nama_yayasan);
	$k->set_ketua_yayasan($ketua_yayasan);
	$k->set_ketua_pt($ketua_pt);
	$k->set_latitude($latitude);
	$k->set_longitude($longitude);
	if($k->save()){
		header('Location:Kampus_Controller.php?action=select');
	}
}else if($action=='update_process'){
	$kode_pt=$_POST['kode_pt'];
	$nama_pt=$_POST['nama_pt'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$kodepost=$_POST['kodepost'];
	$telepon=$_POST['telepon'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$nama_yayasan=$_POST['nama_yayasan'];
	$ketua_yayasan=$_POST['ketua_yayasan'];
	$ketua_pt=$_POST['ketua_pt'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	
	$k=new Kampus();
	$k->set_kode_pt($kode_pt);
	$k->set_nama_pt($nama_pt);
	$k->set_alamat($alamat);
	$k->set_kota($kota);
	$k->set_kodepost($kodepost);
	$k->set_telepon($telepon);
	$k->set_fax($fax);
	$k->set_email($email);
	$k->set_website($website);
	$k->set_nama_yayasan($nama_yayasan);
	$k->set_ketua_yayasan($ketua_yayasan);
	$k->set_ketua_pt($ketua_pt);
	$k->set_latitude($latitude);
	$k->set_longitude($longitude);
	if($k->update()){
		header('Location:Kampus_Controller.php?action=select');
	}
}else if($action=='delete_process'){
	$kode_pt=$_GET['kode_pt'];
	$k=new Kampus();
	$k->set_kode_pt($kode_pt);
	if($k->delete()){
		header('Location:Kampus_Controller.php?action=select');
	}
}else if($action=='select'){
	$k=new Kampus();
	$daftar_kampus=$k->select();
	include 'header.php';

echo "<b>Perguruan Tinggi</b>";

	echo "<table border=1 cellspacing=0>
			<tr>
				<th>Action</th><th>Kode PT</th><th>Nama PT</th><th>Alamat</th><th>Kota</th><th>Kode Pos</th><th>Telepon</th><th>Fax</th><th>Email</th><th>Website</th><th>Nama Yayaysan</th><th>Ketua Yayasan</th><th>Ketua Perguruan Tinggi</th><th>Latitude</th><th>Longitude</th><th>Prodi</th>
			</tr>";
	for($i=0; $i<count($daftar_kampus); $i++){
		$kampus=$daftar_kampus[$i];
		echo "
			<tr>";
			
			if($_SESSION['username']=='admin' || $_SESSION['kode_pt']==$kampus->get_kode_pt()){
				echo "<td><a href=Kampus_Controller.php?action=update_view&kode_pt={$kampus->get_kode_pt()}>Ubah</a> <a href=Kampus_Controller.php?action=delete_process&kode_pt={$kampus->get_kode_pt()} onClick=\" return confirm('Yakin akan menghapus?'); \">Hapus</a></td>";
			}else{
				echo "<td></td>";
			}
			
			echo "	<td>{$kampus->get_kode_pt()}</td><td>{$kampus->get_nama_pt()}</td><td>{$kampus->get_alamat()}</td><td>{$kampus->get_kota()}</td><td>{$kampus->get_kodepost()}</td><td>{$kampus->get_telepon()}</td><td>{$kampus->get_fax()}</td><td>{$kampus->get_email()}</td><td>{$kampus->get_website()}</td><td>{$kampus->get_nama_yayasan()}</td><td>{$kampus->get_ketua_yayasan()}</td><td>{$kampus->get_ketua_pt()}</td><td>{$kampus->get_latitude()}</td><td>{$kampus->get_longitude()}</td><td><a href=Prodi_Controller.php?action=select&kode_pt={$kampus->get_kode_pt()}>Detail Prodi</a></td>";
		
		
		
		
		echo "</tr>";
	}
	
	if($_SESSION['username']=='admin'){
		echo "<br><a href=Kampus_Controller.php?action=insert_view>Tambah Pergruan Tinggi</a>";
	}
	echo "</table>";
	include 'footer.php';
}
?>