<?php
include 'header.php';
?>
<table border=1 cellspacing=0>
	<tr>
		<th>Nama</th><th>Username</th><th>Password</th><th>Email User</th><th>Email Kampus</th><th>Telepon</th><th>Perguruan Tinggi</th><th>Action</th>
	</tr>
	<?php
		include "koneksi.php";
		echo "";
		$result=mysql_query("SELECT u.id, u.nama, u.username, u.password, u.email, u.no_tlp, u.kode_pt, nama_pt, k.email AS email_pt FROM users u INNER JOIN kampus k ON k.kode_pt=u.kode_pt WHERE status=1");
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
				echo "<td>$row[nama]</td>";
				echo "<td>$row[username]</td>";
				echo "<td>$row[password]</td>";
				echo "<td>$row[email]</td>";
				echo "<td>$row[email_pt]</td>";
				echo "<td>$row[no_tlp]</td>";
				echo "<td>$row[nama_pt]</td>";
				echo "<td><a href='user_admin_verifikasi_process.php?id=$row[id]&result=-1'>Tolak</a> <a href='user_admin_verifikasi_process.php?id=$row[id]&result=2'>Setujui</td>";
			echo "</tr>";
		}
	?>
</table>
<?php
include 'footer.php';
?>