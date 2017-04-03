<?php 
	include 'koneksi.php';

				$id 					= $_POST['1'];
				$username			 	= $_POST['2'];
				$password 				= $_POST['3'];
				$privilage 				= $_POST['4'];
				$nama					= $_POST['5'];
				$alamat 				= $_POST['6'];
				$pekerjaan				= $_POST['7'];
				$telepon				= $_POST['8'];
				$jenis_kelamin			= $_POST['9'];
				$hobi					= $_POST['10'];

	$sql = mysql_query("INSERT INTO user (id, username, password, privilage, nama, alamat, pekerjaan, telepon, jenis_kelamin, hobi) VALUES ( '$id' ,'$username', '$password', '$privilage', '$nama', '$alamat', '$pekerjaan', '$telepon', '$jenis_kelamin', '$hobi')") or die(mysql_error());

	if ($sql) {
		header('location:login.php');
	}

?>