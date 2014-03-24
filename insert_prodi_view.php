<?php
include 'header.php';
$kode_pt=$_GET['kode_pt'];
?>

<script type='text/javascript'>

function update(source){
	var str=source.value;
	// alert(str);
	var xmlhttp;
	if (str=="")
	  {
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var s=xmlhttp.responseText;
			var prodi=s.split(';');
			var prodiSelect=document.getElementById('kode_prodi');
			
			var length=prodiSelect.length;
			for(var i=0; i<length; i++){
				prodiSelect.remove(0);
			}
			
			for(var i=0; i<prodi.length; i++){
				var e=prodi[i].split(':');
				var option = document.createElement('option');
				option.text = e[0];
				option.value = e[1];
				prodiSelect.add(option, i);
			}
			
		}
	  }
	xmlhttp.open('GET','prodi_select.php?bidang_ilmu='+str,true);
	xmlhttp.send();
}

</script>

<form method='POST' action='Prodi_Controller.php?action=insert_process'>
	<table>
		<tr>
			<td>Kode PT</td>
			<td><input type='text' name='kode_pt' value='<?php echo $kode_pt; ?>' readonly='true'/></td>
		</tr>
		<tr>
			<td>Bidang Ilmu</td>
			<td>
				<select name='kode_bidang_ilmu' onChange="update(this);" />
					<?php
						include 'koneksi.php';
						$result=mysql_query("SELECT * FROM bidang_ilmu");
						while($row=mysql_fetch_array($result)){
							echo "<option value=$row[kode_bidang_ilmu]>$row[nama_bidang_ilmu]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>
				<select name='kode_prodi' id='kode_prodi' />
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
			<td>Nomor SK</td>
			<td><input type='text' name='nomor_sk' /></td>
		</tr>
		<tr>
			<td>Tahun SK</td>
			<td><input type='text' name='tahun_sk' /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email' /></td>
		</tr>
		<tr>
			<td>Grade</td>
			<td><input type='text' name='grade' /></td>
		</tr>
		<tr>
			<td>Akhir Grade</td>
			<td><input type='text' name='akhir_grade' /></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><input type='text' name='keterangan' /></td>
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