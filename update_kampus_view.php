<?php
include 'header.php';
include 'Kampus.php';
$k=new Kampus();
$kampus=$k->select_by_kode_pt($_GET['kode_pt']);
?>

<form method='POST' action='Kampus_Controller.php?action=update_process'>
	<table>
		<tr>
			<td>Kode PT</td>
			<td><input type='text' name='kode_pt' readonly='true' value='<?php echo $kampus->get_kode_pt(); ?>'/></td>
		</tr>
		<tr>
			<td>Nama PT</td>
			<td><input type='text' name='nama_pt' value='<?php echo $kampus->get_nama_pt(); ?>'/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type='text' name='alamat' value='<?php echo $kampus->get_alamat(); ?>'/></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td><input type='text' name='kota' value='<?php echo $kampus->get_kota(); ?>'/></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td><input type='text' name='kodepost' value='<?php echo $kampus->get_kodepost(); ?>'/></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type='text' name='telepon' value='<?php echo $kampus->get_telepon(); ?>'/></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input type='text' name='fax' value='<?php echo $kampus->get_fax(); ?>'/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email' value='<?php echo $kampus->get_email(); ?>'/></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type='text' name='website' value='<?php echo $kampus->get_website(); ?>'/></td>
		</tr>
		<tr>
			<td>Nama Yayasan</td>
			<td><input type='text' name='nama_yayasan' value='<?php echo $kampus->get_nama_yayasan(); ?>'/></td>
		</tr>
		<tr>
			<td>Ketua Yayasan</td>
			<td><input type='text' name='ketua_yayasan' value='<?php echo $kampus->get_ketua_yayasan(); ?>'/></td>
		</tr>
		<tr>
			<td>Ketua PT</td>
			<td><input type='text' name='ketua_pt' value='<?php echo $kampus->get_ketua_pt(); ?>'/></td>
		</tr>
		<tr>
			<td>Latitude</td>
			<td><input type='text' name='latitude' value='<?php echo $kampus->get_latitude(); ?>'/></td>
		</tr>
		<tr>
			<td>Longitude</td>
			<td><input type='text' name='longitude' value='<?php echo $kampus->get_longitude(); ?>'/></td>
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