<?php
include 'koneksi.php';
include 'mail.php';

$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$no_tlp=$_POST['no_tlp'];
$kode_pt=$_POST['kode_pt'];
$date=date('Y').'-'.date('m').'-'.date('d');

$result=mysql_query("INSERT INTO users VALUES(NULL, '$nama', '$username', '$password', '$email', '$no_tlp', '$kode_pt', 0, '$date')");
if($result){
	$token=md5($email.$date);
    send_verification_mail($name, $email, $token);
	header("Location:login_view.php?error=0");
}else{

}
?>