<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang</title>

        <style>
            fieldset {
                width: 510px;
                margin: auto;
                
            }
        </style>
    </head>
    <body>
        <fieldset>
             <legend>Data Barang</legend>
            
      
    <!--Fungsi Mencari Data-->    
    <form method="GET" action="data_gudang.php" style="text-align: right;">
		<label>Cari Data : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>
  
         <!--menampilkan tombol tambah data dan logout-->
        <a href="../index.html"><input type="button" value="Keluar" ></a>	   
        <br>

        <!--tampilan dari Read Data-->
        <table border="2" align="center">
        <tr>
			
			<th>ID</th>
			<th>KATEGORI</th>
			<th>NAMA BARANG</th>
			<th>HARGA</th>
            <th>STOK</th>
            <th>SUPPLIER</th>

			
		</tr>

		<!--Proses Read-->
        <?php
            include "koneksi.php";

            //jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])) {
					//menampung variabel kata_cari dari form pencarian
					$kata_cari = $_GET['kata_cari'];

                    //jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
					$query = "SELECT * FROM tb_barang WHERE nama_barang 
                    like '%".$kata_cari."%' ORDER BY id_barang ASC";
				} else {
                    $query = "SELECT * FROM tb_barang ORDER BY nama_barang ASC";
                }

            //membaca tabel pada database
            $result = mysqli_query($conn, $query);
            if(!$result) {
            die("Query Error : ".mysqli_errno($conn)." - ".
            mysqli_error($conn));
                    }
            
            //kalau ini melakukan foreach atau perulangan data
            while ($row = mysqli_fetch_assoc($result)) {
              
       	?>

        <!--menampilkan isi data pada tabel-->
		<tr style="text-align:center">
            
			<td><?php echo $row['id_barang']; ?></td>
			<td><?php echo $row['kategori']; ?></td>
			<td><?php echo $row['nama_barang']; ?></td>
			<td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['supplier']; ?></td>		
			
		</tr>

        <?php
            }
        ?>

		</table>
        </fieldset>
    </body>
</html>