<div align="center">
	<table>
		<tr>
			<td><button><a href="inputmhs.php">Input Data</a></button></td>
			<td><form action="cari.php" method="POST">
					<input type="text" name="carinim" placeholder="masukkan nim">
					<input type="submit" name="cari" value="Cari">
				</form>
			</td>
		</tr>
	</table>	
</div>
<div align="center">
<?php 
include 'koneksi.php';
$sele="SELECT * FROM `mhs`";
$feed = $db->query($sele);
//$query = mysqli_query($connection,"SELECT * FROM rsh_admin ORDER BY id DESC");
if(mysqli_num_rows($feed)>0){
    $no = 1;
    echo "<table border=1>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Aksi</th></tr>";
    while($data = mysqli_fetch_array($feed)){
    	echo "<tr>";//nama
			echo "<td>";
			echo $data['nama'];
			echo "</td>";
			echo "<td>";
			echo $data['nim'];
			echo "</td>";
			echo "<td>";
			echo "<a href='delete.php?nim=".$data['nim']."'>Delete</a> || <a href='detail.php?nim=".$data['nim']."'>Lihat Detail</a>";
			echo "</td>";
    	echo "</tr>";
    	$no++; 
      }
      echo "</table>";
    }
?>
</div>
