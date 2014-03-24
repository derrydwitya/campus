<?php
include 'header.php';
?>

<form method='POST' action='Prodi_Controller.php?action=update_process'>
<input type='hidden' name='nama_prodi_old' value='<?php echo $_GET['nama_prodi']; ?>'/>
	<table>
		<tr>
			<td>Kode PT</td>
			<td><input type='text' name='kode_pt' readonly='true' value='<?php echo $_GET['kode_pt']; ?>'/></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>
				<select name='kode_prodi'/>
					<?php
						include 'koneksi.php';
						$result=mysql_query("SELECT * FROM prodi");
						while($row=mysql_fetch_array($result)){
							if($_GET['kode_prodi']==$row['kode_prodi']){
								echo "<option value=$result[kode_prodi] selected=selected>$nama_prodi</option>";
							}else{
								echo "<option value=$row[kode_prodi]>$row[nama_prodi]</option>";
							}							
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
							if($_GET['kode_jenjang']==$row['kode_jenjang']){
								echo "<option value=$row[kode_jenjang] selected=selected>$row[nama_jenjang]</option>";
							}else{
								echo "<option value=$row[kode_jenjang]>$row[nama_jenjang]</option>";
							}
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' value='Ubah'/></td>
		</tr>
	</table>
</form>
<?php
include 'footer.php';
?>