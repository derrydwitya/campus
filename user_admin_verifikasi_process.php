<?php
include 'koneksi.php';

include 'mail.php';

$id=$_GET['id'];
$result=$_GET['result'];
$result_query=mysql_query("UPDATE users SET status=$result WHERE id=$id");
$rs=mysql_query("SELECT * FROM users WHERE id=$id");
$r=mysql_fetch_array($rs);
if($result_query){
	if($result==-1){
		send_verification_mail_rejected($r['nama'], $r['email']);
	}else{
		send_verification_mail_accepted($r['nama'], $r['email']);
	}
	header('Location:user_admin_verifikasi_view.php');
}
?>