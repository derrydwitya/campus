<?php
class Prodi{
	private $kode_pt;
	private $kode_prodi;
	private $nama_prodi;
	private $nomor_sk;
	private $tahun_sk;
	private $email;
	private $grade;
	private $akhir_grade;
	private $keterangan;
	
	function __construct(){
		include 'koneksi.php';
	}
	
	public function set_kode_pt($kode_pt){
		$this->kode_pt=$kode_pt;
	}
	
	public function get_kode_pt(){
		return $this->kode_pt;
	}
	
	public function set_kode_prodi($kode_prodi){
		$this->kode_prodi=$kode_prodi;
	}
	
	public function get_kode_prodi(){
		return $this->kode_prodi;
	}
	
	public function set_nama_prodi($nama_prodi){
		$this->nama_prodi=$nama_prodi;
	}
	
	public function get_nama_prodi(){
		return $this->nama_prodi;
	}
	
	public function set_nomor_sk($nomor_sk){
		$this->nomor_sk=$nomor_sk;
	}
	
	public function get_nomor_sk(){
		return $this->nomor_sk;
	}
	
	public function set_tahun_sk($tahun_sk){
		$this->tahun_sk=$tahun_sk;
	}
	
	public function get_tahun_sk(){
		return $this->tahun_sk;
	}
	
	public function set_email($email){
		$this->email=$email;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function set_grade($grade){
		$this->grade=$grade;
	}
	
	public function get_grade(){
		return $this->grade;
	}
	
	public function set_akhir_grade($akhir_grade){
		$this->akhir_grade=$akhir_grade;
	}
	
	public function get_akhir_grade(){
		return $this->akhir_grade;
	}
	
	public function set_keterangan($keterangan){
		$this->keterangan=$keterangan;
	}
	
	public function get_keterangan(){
		return $this->keterangan;
	}
	
	public function save(){
		$result=mysql_query("INSERT INTO prodi_kampus VALUES('{$this->kode_pt}', '{$this->kode_prodi}', '{$this->nomor_sk}', '{$this->tahun_sk}', '{$this->email}', '{$this->grade}', '{$this->akhir_grade}', '{$this->keterangan}')");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($kode_prodi){
		$result=mysql_query("UPDATE prodi_kampus SET kode_prodi='{$this->kode_prodi}', nomor_sk='{$this->nomor_sk}',tahun_sk='{$this->tahun_sk}',email='{$this->email}',grade='{$this->grade}',akhir_grade='{$this->akhir_grade}',keterangan='{$this->keterangan}' WHERE kode_pt='{$this->kode_pt}' AND kode_prodi='$kode_prodi'");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function delete(){
		$result=mysql_query("DELETE FROM prodi_kampus WHERE kode_pt='{$this->kode_pt}' AND kode_prodi='{$this->kode_prodi}'");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function select($kode_pt){
		$daftar_prodi=array();
		$i=0;
		$result=mysql_query("SELECT kode_pt, prodi_kampus.kode_prodi, prodi.nama_prodi FROM prodi_kampus inner join prodi on prodi.kode_prodi=prodi_kampus.kode_prodi WHERE kode_pt='$kode_pt'");
		while($row=mysql_fetch_array($result)){
			$p=new Prodi();
			$p->set_kode_pt($row['kode_pt']);
			$p->set_kode_prodi($row['kode_prodi']);
			$p->set_nama_prodi($row['nama_prodi']);
			$daftar_prodi[$i]=$p;
			$i++;
		}
		
		return $daftar_prodi;
	}
}

?>