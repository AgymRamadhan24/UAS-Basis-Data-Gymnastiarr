<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['tanggal'];
$alamat = $_POST['umur'];
 
// update data ke database
mysqli_query($koneksi,"update anggota set nama='$nama', tanggal='$nim', umur='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>