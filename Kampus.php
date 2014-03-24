<?php
class Kampus{
	private $kode_pt;
	private $nama_pt;
	private $alamat;
	private $kota;
	private $kodepost;
	private $telepon;
	private $fax;
	private $email;
	private $website;
	private $nama_yayasan;
	private $ketua_yayasan;
	private $ketua_pt;
	private $latitude;
	private $longitude;
	private $jarak;
	
	function __construct(){
		include 'koneksi.php';
	}
	
	public function set_kode_pt($kode_pt){
		$this->kode_pt=$kode_pt;
	}
	
	public function get_kode_pt(){
		return $this->kode_pt;
	}
	
	public function set_nama_pt($nama_pt){
		$this->nama_pt=$nama_pt;
	}
	
	public function get_nama_pt(){
		return $this->nama_pt;
	}
	
	public function set_alamat($alamat){
		$this->alamat=$alamat;
	}
	
	public function get_alamat(){
		return $this->alamat;
	}
	
	public function set_kota($kota){
		$this->kota=$kota;
	}
	
	public function get_kota(){
		return $this->kota;
	}
	
	public function set_kodepost($kodepost){
		$this->kodepost=$kodepost;
	}
	
	public function get_kodepost(){
		return $this->kodepost;
	}
	
	public function set_telepon($telepon){
		$this->telepon=$telepon;
	}
	
	public function get_telepon(){
		return $this->telepon;
	}
	
	public function set_fax($fax){
		$this->fax=$fax;
	}
	
	public function get_fax(){
		return $this->fax;
	}
	
	public function set_email($email){
		$this->email=$email;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function set_website($website){
		$this->website=$website;
	}
	
	public function get_website(){
		return $this->website;
	}
	
	public function set_nama_yayasan($nama_yayasan){
		$this->nama_yayasan=$nama_yayasan;
	}
	
	public function get_nama_yayasan(){
		return $this->nama_yayasan;
	}
	
	public function set_ketua_yayasan($ketua_yayasan){
		$this->ketua_yayasan=$ketua_yayasan;
	}
	
	public function get_ketua_yayasan(){
		return $this->ketua_yayasan;
	}
	
	public function set_ketua_pt($ketua_pt){
		$this->ketua_pt=$ketua_pt;
	}
	
	public function get_ketua_pt(){
		return $this->ketua_pt;
	}
	
	public function set_latitude($latitude){
		$this->latitude=$latitude;
	}
	
	public function get_latitude(){
		return $this->latitude;
	}
	
	public function set_longitude($longitude){
		$this->longitude=$longitude;
	}
	
	public function get_longitude(){
		return $this->longitude;
	}
	
	public function set_jarak($jarak){
		$this->jarak=$jarak;
	}
	
	public function get_jarak(){
		return $this->jarak;
	}
	
	public function save(){
		$result=mysql_query("INSERT INTO kampus VALUES('{$this->kode_pt}', '{$this->nama_pt}', '{$this->alamat}', '{$this->kota}', '{$this->kodepost}', '{$this->telepon}', '{$this->fax}', '{$this->email}', '{$this->website}', '{$this->nama_yayasan}', '{$this->ketua_yayasan}', '{$this->ketua_pt}', {$this->latitude}, {$this->longitude})");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function update(){
		$result=mysql_query("UPDATE kampus SET nama_pt='{$this->nama_pt}', alamat='{$this->alamat}', kota='{$this->kota}', kodepost='{$this->kodepost}', telepon='{$this->telepon}', fax='{$this->fax}', email='{$this->email}', website='{$this->website}', nama_yayasan='{$this->nama_yayasan}', ketua_yayasan='{$this->ketua_yayasan}', ketua_pt='{$this->ketua_pt}', latitude={$this->latitude}, longitude={$this->longitude} WHERE kode_pt='{$this->kode_pt}'");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function delete(){
		$result=mysql_query("DELETE FROM kampus WHERE kode_pt='{$this->kode_pt}'");
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	public function select(){
		$daftar_kampus=array();
		
		$i=0;
		$result=mysql_query("SELECT * FROM kampus");
		while($row=mysql_fetch_array($result)){
			$k=new Kampus();
			$k->set_kode_pt($row['kode_pt']);
			$k->set_nama_pt($row['nama_pt']);
			$k->set_alamat($row['alamat']);
			$k->set_kota($row['kota']);
			$k->set_kodepost($row['kodepost']);
			$k->set_telepon($row['telepon']);
			$k->set_fax($row['fax']);
			$k->set_email($row['email']);
			$k->set_website($row['website']);
			$k->set_nama_yayasan($row['nama_yayasan']);
			$k->set_ketua_yayasan($row['ketua_yayasan']);
			$k->set_ketua_pt($row['ketua_pt']);
			$k->set_latitude($row['latitude']);
			$k->set_longitude($row['longitude']);
			
			$daftar_kampus[$i]=$k;
			$i++;
		}
		
		return $daftar_kampus;
	}
	
	public function select_by_kode_pt($kode_pt){
		$result=mysql_query("SELECT * FROM kampus WHERE kode_pt='$kode_pt'");
		$row=mysql_fetch_array($result);
		$k=new Kampus();
		$k->set_kode_pt($row['kode_pt']);
		$k->set_nama_pt($row['nama_pt']);
		$k->set_alamat($row['alamat']);
		$k->set_kota($row['kota']);
		$k->set_kodepost($row['kodepost']);
		$k->set_telepon($row['telepon']);
		$k->set_fax($row['fax']);
		$k->set_email($row['email']);
		$k->set_website($row['website']);
		$k->set_nama_yayasan($row['nama_yayasan']);
		$k->set_ketua_yayasan($row['ketua_yayasan']);
		$k->set_ketua_pt($row['ketua_pt']);
		$k->set_latitude($row['latitude']);
		$k->set_longitude($row['longitude']);
		
		return $k;
	}
}

?>