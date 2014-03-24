<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$result=mysql_query("select * from pengguna where username='$username' and password='$password'");
$jumlah=mysql_num_rows($result);
if($jumlah==1){
	$_SESSION['username']=$username;
	header('Location:home.php');
}else{
	$result=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	$jumlah=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	if($jumlah==1){
		$_SESSION['username']=$username;
		$_SESSION['kode_pt']=$row['kode_pt'];
		header('Location:home.php');
	}else{
		header('Location:login_view.php?error=1');
	}
}
?>