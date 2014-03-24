<?php
include 'header.php';
?>
<form action='user_campus_registration_process.php' method='POST'>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type='text' name='nama'></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type='text' name='username'></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password' name='password'></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email'></td>
		</tr>
		<tr>
			<td>No. Tlp</td>
			<td><input type='text' name='no_tlp'></td>
		</tr>
		<tr>
			<td>Nama Kampus</td>
			<td>
				<select name='kode_pt'>
					<?php
						include 'koneksi.php';
						$result=mysql_query("SELECT distinct nama_pt FROM kampus ORDER BY nama_pt");
						while($row=mysql_fetch_array($result)){
							echo "<option $row[kode_pt]>$row[nama_pt]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type='reset' value='Batal' /></td>
			<td><input type='submit' value='Daftar' /></td>
		</tr>
	</table>
</form>
<?php
include 'footer.php';
?>