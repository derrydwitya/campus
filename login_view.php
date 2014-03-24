<?php
include 'header.php';
if(isset($_GET['error'])){
	if($_GET['error']==1){
		echo "Username atau password salah<BR>";
	}else if($_GET['error']==0){
		echo "Silahkan verifikasi melalui email yang terdaftar<BR>";
	}else if($_GET['error']==-1){
		echo "Anda telah terdaftar, selamat datang";
	}
}
?>
<form action='login_process.php' method='POST'>
	<table>
		<tr>
			<td>Username</td>
			<td><input type='text' name='username'/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password' name='password'/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit'/></td>
		</tr>
	</table>
</form>
<a href='user_campus_registration_view.php'>Daftar</a>
<?php
include 'footer.php';
?>