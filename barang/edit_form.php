<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Barang</title>

        <style>
            fieldset {
                width: 300px;
                margin: auto;
                
            }
        </style>
    </head>
    <body>
        <fieldset>
             <legend>Edit Data Barang</legend> 
<?php
    include "koneksi.php";

    $id = $_GET['id_barang'];
    $edit = mysqli_query($conn,"SELECT * FROM tb_barang WHERE id_barang='$id'");
    while ($row = mysqli_fetch_array($edit)) {
?>


<form method="post" action="edit_proses.php">
    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
                <input type="text" name="kategori" value="<?php echo $row['kategori']; ?>">
            </td>
        </tr>

        <tr>
            <td>Nama Barang</td>
            <td>                
                <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
            </td>
        </tr> 

        <tr>
            <td>Harga</td>
            <td>
               <input type="text" name="harga" value="<?php echo $row['harga']; ?>">
            </td>
        </tr>

        <tr>
            <td>Stok</td>
            <td>
               <input type="text" name="stok" value="<?php echo $row['stok']; ?>">
            </td>
        </tr>

        <tr>
            <td>Supplier</td>
            <td>
               <input type="text" name="supplier" value="<?php echo $row['supplier']; ?>">
            </td>
        </tr>

        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>

</form>
<?php
    }
?>

        </fieldset>
    </body>
</html>