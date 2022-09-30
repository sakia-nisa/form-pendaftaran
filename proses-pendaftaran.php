<?php
include("koneksi.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama= $_POST['agama'];

    $sql = "INSERT INTO tb_daftar (nama, tempat, tanggal, alamat, jk, agama) VALUES ('$nama', '$tempat', '$tanggal', '$alamat', '$jk', '$agama')";
	$query = mysqli_query($db, $sql);

    if( $query ) {
		header('Location: tabel-daftar.php?status=sukses');
	}
}
?>