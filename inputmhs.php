<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="gender" value="Laki laki"> Laki-laki<br>
  				<input type="radio" name="gender" value="Perempuan"> Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
					<option value="D3 Sistem Informasi"> D3 Sistem Informasi</option>
					<option value="D3 Teknik Telekomunikasi"> D3 Teknik Telekomunikasi</option>
					<option value="S1 MBTI"> S1 MBTI</option>
					<option value="S1 Akutansi"> S1 Akutansi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fak">
					<option value="FIT"> FIT</option>
					<option value="FEB"> FEB</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td><textarea name="motto"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
<?php  
	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$gender=$_POST['gender'];
		$prodi=$_POST['prodi'];
		$fak=$_POST['fak'];
		$asal=$_POST['asal'];
		$motto=$_POST['motto'];

		include 'koneksi.php';
		$sql="INSERT INTO `mhs`(`nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `mottohidup`) VALUES ('$nama','$nim','$gender','$prodi','$fak','$asal','$motto')";
		$simpan = $db->query($sql);
	    if ($simpan) {
	      header('Location:lihatdatamhs.php');
	    }else{
	      echo "<p>INPUT ERROR</p>";
	    }
	}
?>