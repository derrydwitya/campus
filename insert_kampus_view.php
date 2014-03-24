<?php
include 'header.php';
?>
<form method='POST' action='Kampus_Controller.php?action=insert_process'>
	<table>
		<tr>
			<td>Kode PT</td>
			<td><input type='text' name='kode_pt'/></td>
		</tr>
		<tr>
			<td>Nama PT</td>
			<td><input type='text' name='nama_pt'/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type='text' name='alamat'/></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td><input type='text' name='kota'/></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td><input type='text' name='kodepost'/></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type='text' name='telepon'/></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input type='text' name='fax'/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email'/></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type='text' name='website'/></td>
		</tr>
		<tr>
			<td>Nama Yayasan</td>
			<td><input type='text' name='nama_yayasan'/></td>
		</tr>
		<tr>
			<td>Ketua Yayasan</td>
			<td><input type='text' name='ketua_yayasan'/></td>
		</tr>
		<tr>
			<td>Ketua PT</td>
			<td><input type='text' name='ketua_pt'/></td>
		</tr>
		<tr>
			<td>Latitude</td>
			<td><input type='text' name='latitude'/></td>
		</tr>
		<tr>
			<td>Longitude</td>
			<td><input type='text' name='longitude'/></td>
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