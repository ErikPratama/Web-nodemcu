<?php
	include_once ("koneksi.php");
	$ok=true;
	$data_sensor = $_GET["data_sensor"];
	ini_set('date.timezone', 'Asia/Jakarta');
    $now = new DateTime();
    $Tanggal = $now->format("Y-m-d H:i:s");
	$sql = "INSERT INTO `sensor` (`data_sensor`,`Tanggal`) VALUES ('$data_sensor','$Tanggal')";
	
	$hasil = mysqli_query($koneksi,$sql);

?>
