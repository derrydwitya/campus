<?php
include 'koneksi.php';
include 'mail.php';

$token=$_GET['token'];
$result=mysql_query("SELECT * FROM users WHERE concat(email, registration_date)='$token'");//unfinished

if($result){
	while($user_data=mysql_fetch_array($result)){
		$name=$user_data['name'];
		$email=$user_data['email'];
		$status='1';//4 means waiting
		//unfinished
		$success=mysql_query("UPDATE users SET status='$status' WHERE email='$email'");
		if($success){
			
			header('Location:login_view.php?error=-1');
			
		}else{ echo"salah 1";
		
		}
	}
}else{echo"salah 2";

}
?>