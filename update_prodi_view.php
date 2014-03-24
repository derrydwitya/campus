<?php
include 'header.php';
include 'koneksi.php';
$result=mysql_query("SELECT * FROM prodi_kampus WHERE kode_prodi='{$_GET['kode_prodi']}' AND kode_pt='{$_GET['kode_pt']}'");
$row_prodi=mysql_fetch_array($result);
?>

<form method='POST' action='Prodi_Controller.php?action=update_process'>
<input type='hidden' name='kode_prodi_old' value='<?php echo $_GET['kode_prodi']; ?>'/>
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
								echo "<option value=$row[kode_prodi] selected>$row[nama_prodi]</option>";
							}else{
								echo "<option value=$row[kode_prodi]>$row[nama_prodi]</option>";
							}
							
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nomor SK</td>
			<td><input type='text' name='nomor_sk' value='<?php echo $row_prodi['nomor_sk']; ?>' /></td>
		</tr>
		<tr>
			<td>Tahun SK</td>
			<td><input type='text' name='tahun_sk' value='<?php echo $row_prodi['tahun_sk']; ?>' /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email' value='<?php echo $row_prodi['email']; ?>' /></td>
		</tr>
		<tr>
			<td>Grade</td>
			<td><input type='text' name='grade' value='<?php echo $row_prodi['grade']; ?>' /></td>
		</tr>
		<tr>
			<td>Akhir Grade</td>
			<td><input type='text' name='akhir_grade' value='<?php echo $row_prodi['akhir_grade']; ?>' /></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><input type='text' name='keterangan' value='<?php echo $row_prodi['keterangan']; ?>' /></td>
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