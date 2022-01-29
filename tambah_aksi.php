<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nim = $_POST['tanggal'];
$alamat = $_POST['umur'];
 if (!empty($nama) || !empty($nim) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into anggota values('','$nama','$nim','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>