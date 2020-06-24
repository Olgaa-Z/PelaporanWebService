<?php
include_once "connect.php"; 

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$towerlamp = $_POST['towerlamp'];
		$shift = $_POST['shift'];
		$status = $_POST['status'];
		$hm = $_POST['hm'];
		$fuel = $_POST['fuel'];

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tower_lamp (towerlamp,shift,status,hm,fuel) VALUES ('$towerlamp','$shift','$status','$hm','$fuel')";

		//Import File Koneksi database
		require_once('connect.php');

		//Eksekusi Query database
		if(mysqli_query($connect,$sql)){
			echo 'Berhasil Menambahkan Data TL ';
		}else{
			echo 'Gagal Menambahkan Data TL !';
		}

		mysqli_close($connect);
	}
?>
