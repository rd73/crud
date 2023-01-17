<?php
    include "koneksi.php";
    $id = $_GET['id_barang'];

    $query = "DELETE FROM tb_barang WHERE id_barang='$id'";
    mysqli_query($conn, $query);

    header("location:data_barang.php");

?>