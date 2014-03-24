<?php
include "Prodi.php";
$action=$_GET['action'];

if($action=='insert_view'){
    $kode_pt=$_GET['kode_pt'];
	header("Location:insert_prodi_view.php?kode_pt=$kode_pt");
}else if($action=='update_view'){
	$kode_pt=$_GET['kode_pt'];
	$kode_prodi=$_GET['kode_prodi'];
	$kode_jenjang=$_GET['kode_jenjang'];
	header("Location:update_prodi_view.php?kode_pt=$kode_pt&kode_prodi=$kode_prodi");
}else if($action=='insert_process'){
	$kode_pt=$_POST['kode_pt'];
	$kode_prodi=$_POST['kode_prodi'];
	$nomor_sk=$_POST['nomor_sk'];
	$tahun_sk=$_POST['tahun_sk'];
	$email=$_POST['email'];
	$grade=$_POST['grade'];
	$akhir_grade=$_POST['akhir_grade'];
	$keterangan=$_POST['keterangan'];
	// echo $kode_pt.';'.$kode_prodi;
	$k=new Prodi();
	$k->set_kode_pt($kode_pt);
	$k->set_kode_prodi($kode_prodi);
	$k->set_nomor_sk($nomor_sk);
	$k->set_tahun_sk($tahun_sk);
	$k->set_email($email);
	$k->set_grade($grade);
	$k->set_akhir_grade($akhir_grade);
	$k->set_keterangan($keterangan);
	if($k->save()){
		header("Location:Prodi_Controller.php?action=select&kode_pt=$kode_pt");
	}
}else if($action=='update_process'){
	$kode_pt=$_POST['kode_pt'];
	$kode_prodi=$_POST['kode_prodi'];
	$kode_prodi_old=$_POST['kode_prodi_old'];
	$nomor_sk=$_POST['nomor_sk'];
	$tahun_sk=$_POST['tahun_sk'];
	$email=$_POST['email'];
	$grade=$_POST['grade'];
	$akhir_grade=$_POST['akhir_grade'];
	$keterangan=$_POST['keterangan'];
	
	$k=new Prodi();
	$k->set_kode_pt($kode_pt);
	$k->set_kode_prodi($kode_prodi);
	$k->set_nomor_sk($nomor_sk);
	$k->set_tahun_sk($tahun_sk);
	$k->set_email($email);
	$k->set_grade($grade);
	$k->set_akhir_grade($akhir_grade);
	$k->set_keterangan($keterangan);
	
	if($k->update($kode_prodi_old)){
		header("Location:Prodi_Controller.php?action=select&kode_pt=$kode_pt");
	}
}else if($action=='delete_process'){
	$kode_pt=$_GET['kode_pt'];
	$kode_prodi=$_GET['kode_prodi'];
	$k=new Prodi();
	$k->set_kode_pt($kode_pt);
	$k->set_kode_prodi($kode_prodi);
	if($k->delete()){
		header("Location:Prodi_Controller.php?action=select&kode_pt=$kode_pt");
	}
}else if($action=='select'){
	$kode_pt=$_GET['kode_pt'];
	$k=new Prodi();
	$daftar_prodi=$k->select($kode_pt);
	
	include 'header.php';
	echo "<table border=1 cellspacing=0>
			<tr>
				<th>Kode PT</th><th>Kode Prodi</th><th>Nama Prodi</th><th>Action</th>
			</tr>";
	for($i=0; $i<count($daftar_prodi); $i++){
		$prodi=$daftar_prodi[$i];
		echo "
			<tr>
				<td>{$prodi->get_kode_pt()}</td><td>{$prodi->get_kode_prodi()}</td><td>{$prodi->get_nama_prodi()}</td><td><a href=Prodi_Controller.php?action=update_view&kode_pt={$prodi->get_kode_pt()}&kode_prodi={$prodi->get_kode_prodi()}>Ubah</a> <a href=Prodi_Controller.php?action=delete_process&kode_pt={$prodi->get_kode_pt()}&kode_prodi={$prodi->get_kode_prodi()} onClick=\" return confirm('Yakin akan menghapus?'); \">Hapus</a></td>
			</tr>
		";
	}
	
	echo "<tr><td><a href=Prodi_Controller.php?action=insert_view&kode_pt=$kode_pt>Tambah</a></td></tr>";
	echo "<tr><td><a href=Kampus_Controller.php?action=select>Kembali ke Kampus</a></td></tr>";
	echo "</table>";
	include 'footer.php';
}
?>