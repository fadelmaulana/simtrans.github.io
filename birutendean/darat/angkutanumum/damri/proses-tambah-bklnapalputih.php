<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$a = $_POST['no'];
	$b = $_POST['dari'];
	$c = $_POST['tujuan'];
	$d = $_POST['jamkeberangkatan'];
	$e = $_POST['tarifekonomi'];
	
	// buat query
	$sql = "INSERT INTO damribklnapalrinci (`no`,`dari`,`tujuan`,`jamkeberangkatan`,`tarifekonomi`) VALUE ('$a','$b','$c','$d','$e')";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil munculkan pesan berhasil dan dialihkan ke index.php
		echo "<script>
        alert('Data berhasil disimpan!');
        window.location.href='index.php';  
        </script>";
	} else {
		// kalau gagal munculkan pesan gagal dan dialihkan ke index.php
		echo "<script>
        alert('Data gagal disimpan!');
        window.location.href='index.php';  
        </script>";
	}
	
	
} else {
	die("Akses dilarang...");
}

?>