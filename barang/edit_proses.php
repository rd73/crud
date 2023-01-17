<?php 
// koneksi database
include 'koneksi.php'; 

// menangkap data yang di kirim dari form
$id             = $_POST['id_barang'];
$kategori       = $_POST['kategori'];
$nama_barang    = $_POST['nama_barang'];
$harga          = $_POST['harga'];
$stok           = $_POST['stok'];
$supplier       = $_POST['supplier'];
// update data ke database
mysqli_query($conn,"UPDATE tb_barang SET kategori='$kategori', nama_barang='$nama_barang', harga='$harga', stok='$stok', supplier='$supplier' WHERE id_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_barang.php");
 
?>
