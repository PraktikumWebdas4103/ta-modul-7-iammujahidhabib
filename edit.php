<?php
	include 'koneksi.php';
	$id=$_GET['nim'];
	$sele="SELECT * FROM `mhs` WHERE `nim`='$id'";
		$feed = $db->query($sele);
		$data = mysqli_fetch_array($feed);
?>
<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" required></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $data['nim'];?>" readonly></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="gender" value="Laki laki" required> Laki-laki<br>
  				<input type="radio" name="gender" value="Perempuan" required> Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi" required>
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
			<td><select name="fak" required>
					<option value="FIT"> FIT</option>
					<option value="FEB"> FEB</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" value="<?php echo $data['asal'];?>"></td>
		</tr>
		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td><textarea name="motto" required><?php echo $data['mottohidup'];?></textarea></td>
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
		$sql="UPDATE `mhs` SET `nama`= '$nama', `jk`='$gender', `prodi`='$prodi', `fakultas`='$fak', `asal`='$asal', `mottohidup`='$motto' WHERE nim='$id'";
		$simpan = $db->query($sql);
	    if ($simpan) {
	      header('Location:lihatdatamhs.php');
	    }else{
	      echo "<p>INPUT ERROR</p>";
	    }
	}
?>