<?php
	if (isset($_POST['cari'])) {
		$nimCari=$_POST['carinim'];

		include 'koneksi.php';
		$sele="SELECT * FROM `mhs` WHERE `nim`='$nimCari'";
		$feed = $db->query($sele);
		$data = mysqli_fetch_array($feed);

	    echo "<table>";	    
	    	echo "<tr>";//nama
	    		echo "<td>Nama</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['nama'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>NIM</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['nim'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>Jenis Kelamin</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['jk'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>Program Studi</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['prodi'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>Fakultas</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['fakultas'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>Asal</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['asal'];
				echo "</td>";
	      	echo "</tr>";
	      	echo "<tr>";
	      		echo "<td>Motto Hidup</td>";
	    		echo "<td>:</td>";
				echo "<td>";
				echo $data['mottohidup'];
				echo "</td>";
	      	echo "</tr>";
	    echo "</table>";  		
	}
?>