<?php
	$nimhapus=$_GET['nim'];

	include 'koneksi.php';

	$sql="DELETE FROM `mhs` WHERE `nim`=$nimhapus";
	$delete=$db->query($sql);
	if (mysqli_affected_rows($db)>0) {
		header('Location:lihatdatamhs.php');
	}

?>