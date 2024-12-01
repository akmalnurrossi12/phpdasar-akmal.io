<?php 
require 'functions.php';

// ambil data ke mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc(result) ) {
// var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword percarian.." autocomplete="">
<button type="submit" name="cari">Cari!</button>

</form>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<tr>
    <td>1</td>
    <td>
        <a href="ubah.php?">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><img src="img/welll.jpg" width="50"></td>
    <td>043040045</td>
    <td>akmal</td>
    <td>akmalganteng@gmail.com</td>
    <td>RPL</td>
    
</tr>
</table>

</body>
</html>