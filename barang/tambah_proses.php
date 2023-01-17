<?php
    include "koneksi.php";

    $id         = $_POST['id_barang'];
    $kategori   = $_POST['kategori'];
    $nama_brg   = $_POST['nama_barang'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];
    $supplier   = $_POST['supplier'];

    $sql = "INSERT INTO tb_barang (id_barang, kategori, nama_barang, 
            harga, stok, supplier) VALUES ('$id', '$kategori', 
            '$nama_brg', '$harga', '$stok', '$supplier')";
    
    $query = mysqli_query($conn, $sql);

    header("location:data_barang.php");
?>