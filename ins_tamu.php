<?php
	include "koneksi.php";
	$nama=$_POST['nama'];
	$nama=$_POST['email'];
	$nama=$_POST['pesan'];
	
	$sql="insert into tamu(nama,email,pesan) values('$name','$email','$pesan')";
	$hasil=mysqli_query($conn, $sql);
	if(!$hasil){
		echo("Query Error");
	}
	else
	{
		header('location:bukutamu.php');
	}
?>