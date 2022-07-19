<?php
	include_once ("update.php");
	include_once ("koneksi.php");
	include_once ("email.php");
	$ok=true;
	$amr_id = $_GET["amr_id"];
	$Kwh=$_GET["Kwh"];
	$Arus=$_GET["Arus"];
	$Watt=$_GET["Watt"];
	$Tegangan=$_GET["Tegangan"];
	$Status=$_GET["Status"];
	$Biaya=$_GET["Biaya"];
	if ($Status == "200")
	{
	    $Status2 = "Semua Lampu Mati";
	}
	elseif ($Status == "402")
	{
	    $Status2 = "1 Lampu Mati";
	}
	elseif ($Status == "")
	{
	    $Status2 = "2 Lampu Nyala";
	}
	else
	{
	    $Status2 ="Indikasi Kemalingan";
	}
	
	ini_set('date.timezone', 'Asia/Jakarta');
    $now = new DateTime();
    $Tanggal = $now->format("Y-m-d H:i:s");
	$sql = "INSERT INTO `cngo` (`amr_id`,`Kwh`,`Arus`, `Watt`, `Tegangan`,`Status`, `Biaya`, `Tanggal`) VALUES ('$amr_id','$Kwh','$Arus','$Watt','$Tegangan','$Status2','$Biaya','$Tanggal')";
	
	$hasil = mysqli_query($koneksi,$sql);

?>
