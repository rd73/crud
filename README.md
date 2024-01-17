
# SESI 1 - DATABASE

## A. Pengertian Database
Database adalah sekumpulan data yang dikelola berdasarkan ketentuan tertentu yang saling berkaitan sehingga memudahkan dalam pengelolaannya. Database membuat penyimpanan dan pengelolaan data menjadi lebih efisien. Adapun contoh database dapat dilihat dari pengembangan situs web. Database berwujud tabel yang terdiri dari kolom dan baris yang memuat atribut dan nilai tertentu. Adapun jumlah kolom dan baris dalam suatu database tergantung pada jumlah kategori atau jenis informasi yang perlu disimpan.

## B. Pembuatan Database
1. Buka aplikasi XAMPP Control Panel pada komputer masing-masing.
2. Aktifkan modul “Apache” dan “MySQL” pada XAMPP Control Panel dengan menekan tombol start pada panel Actions. [Lihat Gambar](https://drive.google.com/file/d/1S3AMC9OtJdKQNUFPYQVxLHpYA-BM1d9R/view?usp=drive_link)
3. Buka browser (Mozilla, Chrome, Edge, dll) yang terinstal pada komputer dan ketikkan alamat URL “localhost/phpmyadmin”.[Lihat Gambar](https://drive.google.com/file/d/1J99AgMqVRw4e-yP1Sz7QOPijKhUzPGLX/view?usp=sharing)
4. Buat database baru dengan klik tombol new dan buat nama database yang akan digunakan. Contoh nama databasenya “db_toko”.[Lihat Gambar](https://drive.google.com/file/d/1oK-badT_IuNFBipDQs_MHzzQ62hchI7G/view?usp=sharing)
5. Setelah membuat nama database, buat tabel untuk mengisi database yang akan digunakan. Contoh nama tabelnya “tb_produk” dengan jumlah kolom 4 buah kemudian klik send/kirim.[Lihat Gambar](https://drive.google.com/file/d/1VXINoA0T56qaprZc5D0c6n7fWZ-0Mlno/view?usp=sharing)
6. Setelah membuat tabel, isikan masing-masing kolom seperti gambar berikut : [Lihat Gambar](https://drive.google.com/file/d/1NUUj5thVfAb40PQFQGJ2-HS0FqQgIg0p/view?usp=sharing)
7. Buat sample data pada tabel yang sudah dibuat dengan klik menu tambahkan/insert kemudian isikan nilai/value seperti tabel berikut :[Lihat Gambar](https://drive.google.com/file/d/18qhEUKnndZZ__7wGZflTVRqiCUe0fUpS/view?usp=sharing)
8. Hasilnya bisa dilihat dengan mengklik menu jelajahi/browse.[Lihat Gambar](https://drive.google.com/file/d/19wgZ_fHG2uTgbBnZctISpTDk6BhyLCAI/view?usp=sharing)
## 
# SESI 2 - KONEKSI DATA
## A. Pengertian
Menghubungkan anatara file PHP dan Database dalam pemrograman web bertujuan agar kedua data tersenut bisa saling berinteraksi dalam penggunaan aplikasi web yang akan dibuat. Contohnya dalam menyimpan, menampilkan, merubah dan menghapus data dari database.

## B. Koneksi Data
1.	Buat folder untuk menyimpan file di C:\xampp\htdoc. Buat folder baru dengan nama “penjualan”.
2.	Buka aplikasi teks editor / Visual Studio Code.
3.	Klik menu file -> Open Folder, dan arahkan ke folder yang sudah dibuat di C:\xampp\htdoc.
4.	Buat file baru dan beri nama “koneksi.php” dan ketikkan skrip program berikut :

#### <?php    
    $server = "localhost";
    $user   = "root";
    $pass   ="";
    $db     ="db_toko";    
    $koneksi = mysqli_connect($server, $user, $pass, $db) or die ("Gagal Terhubung");
#### ?>

## 
# SESI 3 - CREATE DATA
## A. Pengertian
Fungsi create memungkinkan penggunanya untuk menciptakan catatan atau rekaman baru dalam database. Penyebutan fungsi create pada aplikasi database relasional SQL disebut INSERT, sedangkan dalam Oracle HCM Cloud disebut CREATE.
Perlu kamu ingat bahwa catatan adalah baris dan kolom disebut dengan atribut. Setiap pengguna dapat membuat baris atau row baru dan mengisinya dengan data yang sesuai dengan setiap atribut. Namun, hanya administrator saja yang dapat menambahkan atribut baru ke dalam tabel tersebut.

## B. Praktik 
1.	Buat file baru dan beri nama “tambah_form.html” dan ketikkan skrip program berikut:
 
#### < !DOCTYPE html >
#### < html >
#### < head >
	<title>Data User</title>

	<style>
           	 fieldset {
			width: 400px; 
                    	margin:auto;
                    	}   
    </style>
#### < /head >
#### < body >

	<!--membungkus tampilan Read Data-->
	<fieldset >
        <!--Judul pada fieldset-->
        <legend align="center">Input Data Produk</legend>
    
        <!--Tampulam Form Input Data-->
        <form action="tambah_proses.php" method="post">
            
            <input type="text" name="id" placeholder="ID Produk" size="40px">
            <br><br>
            <input type="text" name="nama_produk" placeholder="Nama Produk" size="40px">
            <br><br>
            <input type="text" name="harga" placeholder="Harga Produk" size="40px">
            <br><br>
            <input type="text" name="stok" placeholder="Stok Produk" size="40px">
            <br><br>
            <button type="submit" name="submit">SIMPAN</button>
            <button type="reset" name="reset">RESET</button>
        </form>

    </fieldset>
#### < /body >
#### < /html >


2.	Setelah membuat form, buat lagi file baru dengan nama “tambah_proses.php” dan ketikkan skrip berikut :

#### <?php
#### include "koneksi.php";

#### // menangkap data yang di kirim dari form
#### $id			= $_POST["id"];
#### $nama_produk	= $_POST["nama_produk"];
#### $harga		= $_POST["harga"];
#### $stok			= $_POST["stok"];  
 
#### // menginput data ke database
#### $sql = "INSERT INTO tb_produk (id, nama_produk, harga, stok) VALUES('$id','$nama_produk','$harga','$stok')";
#### $query = mysqli_query($koneksi, $sql); 

#### // mengalihkan halaman kembali ke Beranda
#### header("location:index.php");

#### ?>

## 
# SESI 4 - READ DATA
## A. Pengertian
Dalam pemrograman, read adalah proses pengambilan dari sebuah database. Proses ini terjadi jika kamu ingin melakukan proses sign in atau masuk ke suatu situs tertentu. Saat kamu mengklik sign in atau login, situs tersebut akan melakukan proses read dan memverifikasi akun yang kamu masukkan.
Nah, fungsi read hampir sama dengan fungsi search (pencarian), yang mana memungkinmu untuk mengambil record tertentu dan membacanya. Pengguna dapat menemukan record yang diinginkan dengan menggunakan kata kunci (keyword), atau dengan memfilter data berdasarkan kriteria yang sudah disesuaikan.

## B. Praktik
1.	Buat file baru dan beri nama “index.php” dan ketikkan skrip program berikut :

#### < !DOCTYPE html >
#### < html >
#### < head >
	<title>Tampil Data</title>

		<style>
           	 fieldset {
			width: 400px; 
                    	margin:auto;
                    	}   
   	 </style>

#### < /head >
#### < body >
	<fieldset >
        <!--Judul pada fieldset-->
        <legend align="center">Data Produk</legend>

#### <center><h1>Pencarian Produk</h1></center>
#### <center>||<a href="tambah_form.html">Tambah Data</a>||</center>
#### <br>
#### <form method="GET" action="index.php" style="text-align: center;">
#### <label>Kata Pencarian : </label>
#### <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
#### <button type="submit">Cari</button>

#### </form>
#### <table>

#### <thead>
#### <tr>
#### <th>Kode Produk</th>
#### <th>Nama Produk</th>
#### <th>Harga</th>
#### <th>Stok</th>
#### <!--Tambahan untuk opsi Update & Delete-->
#### <th>OPSI</th>
#### </tr>
#### </thead>
#### <tbody>

#### <?php 
#### //untuk meinclude kan koneksi
#### include 'koneksi.php';

#### //jika kita klik cari, maka yang tampil query cari ini
#### if(isset($_GET['kata_cari'])) {

#### //menampung variabel kata_cari dari form pencarian $kata_cari = $_GET['kata_cari'];

#### $query = "SELECT * FROM tb_produk WHERE id like '%".$kata_cari."%' OR nama_produk like '%".$kata_cari."%' ORDER BY id ASC";
#### } else {

#### //jika tidak ada pencarian, default yang dijalankan query ini
#### $query = "SELECT * FROM tb_produk ORDER BY id ASC";
	}		

#### $result = mysqli_query($koneksi, $query);
#### if(!$result) {
#### die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}

#### //kalau ini melakukan foreach atau perulangan
#### while ($row = mysqli_fetch_assoc($result)) {
#### ?>

#### <tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['nama_produk']; ?></td>
	<td><?php echo $row['harga']; ?></td>
	<td><?php echo $row['stok']; ?></td>


	<!--Tambahan untuk opsi edit dan hapus-->
	<td>
	<a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
	<a href="delete.php?id=<?php echo $row['id']; ?>">HAPUS</a>
	</td>
#### </tr>
			

#### <?php
	}
#### ?>

#### </tbody>
#### </table>
#### </fieldset>
#### </>
#### </html>


2.	Setelah skrip program selesai dibuat, buka browser dan ketikkan alamat “localhost/nama_folder”.

## 
# SESI 5 - UPDATE DATA
## A. Pengertian
Dalam pemrograman, update adalah proses untuk memodifikasi atau mengubah record yang sudah ada dalam database. Untuk dapat memodifikasi record secara keseluruhan, kamu mungkin harus mengubah informasi dalam berbagai bidang.
Ketika sedang melakukan proses update, kamu harus menentukan tabel target dan kolom yang akan diperbarui. Kamu juga harus menghubungkan nilai dan baris yang terkait. Setelah melakukan perubahan, database akan memberikan respon dengan memperbaharui data lama.

## B. Praktik
1.	Buat file baru dan beri nama “edit_form.php” dan ketikkan skrip program berikut :

#### <!DOCTYPE html>
#### <html>
####     <head>
        <title>Form Edit Data</title>

		<style>
           	 fieldset {
			width: 400px; 
                    	margin:auto;
                    	}   
   	 </style>
    </head>
    <body>
		<fieldset >
      	  <!--Judul pada fieldset-->
       	 <legend align="center">Edit Data Produk</legend>
        <h3>Edit Data</h3>

        <?php
            include "koneksi.php";

            $id = $_GET['id'];
            $edit = mysqli_query($koneksi,"SELECT * FROM tb_produk WHERE id='$id'");
            while ($row = mysqli_fetch_array($edit)) {
        ?>


        <form method="post" action="edit_proses.php">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>">
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
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>

        </form>
        <?php
            }
        ?>
	</fieldset>
    </body>
#### </html>


2.	Selanjutnya buat lagi file baru dengan nama “edit_proses.php” dan ketikkan skrip program berikut :

#### <?php 
#### // koneksi database
#### include 'koneksi.php'; 
#### // menangkap data yang di kirim dari form
#### $id = $_POST['id'];
#### $nama_produk = $_POST['nama_produk'];
#### $harga = $_POST['harga'];
#### $stok = $_POST['stok'];
#### // update data ke database
#### mysqli_query($koneksi,"update tb_produk set nama_produk='$nama_produk', harga='$harga', stok='$stok' where id='$id'");
 
#### // mengalihkan halaman kembali ke index.php
#### header("location:index.php");
 
#### ?>

## 
# SESI 6 - DELETE DATA
## Pengertian
konsepnya sama seperti proses update tadi cuman pada proses ini tidak menampilkan form, melainkan langsung menghapus data berdasarkan data yang dipilih oleh users pada halaman utama.

## Praktik
Buat file baru dan beri nama “delete.php” dan ketikkan skrip program berikut :

#### <?php
#### include 'koneksi.php';

#### // menyimpan data id kedalam variabel
#### $id   = $_GET['id'];

#### // query SQL untuk insert data
#### $query="DELETE FROM tb_produk WHERE id='$id’”;	
#### mysqli_query($koneksi, $query);

#### // mengalihkan ke halaman index.php
#### header("location:index.php");
#### ?>

