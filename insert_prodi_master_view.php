<?php
include 'header.php';
$kode_pt=$_GET['kode_pt'];
?>
<form method='POST' action='Prodi_Controller.php?action=insert_process'>
	<table>
		<tr>
			<td>Kode PT</td>
			<td><input type='text' name='kode_pt' value='<?php echo $kode_pt; ?>' readonly='true'/></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>
				<select name='kode_prodi'/>
					<?php
						include 'koneksi.php';
						$result=mysql_query("SELECT * FROM prodi");
						while($row=mysql_fetch_array($result)){
							echo "<option value=$row[kode_prodi]>$row[nama_prodi]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenjang</td>
			<td>
				<select name='kode_jenjang'/>
					<?php
						include 'koneksi.php';
						$result=mysql_query("SELECT * FROM jenjang");
						while($row=mysql_fetch_array($result)){
							echo "<option value=$row[kode_jenjang]>$row[nama_jenjang]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' /></td>
		</tr>
	</table>
</form>
<?php
include 'footer.php';
?>