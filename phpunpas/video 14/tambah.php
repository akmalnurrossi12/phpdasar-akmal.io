<?php
require 'functions.php';
// koneksi ke dbms
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                  alert('data berhasil ditambahkan');
                  document.location.href = 'index.php'';
            </script>
        
        ";
    } else {
        echo "
            <script>
                  alert('data gagal ditambahkan');
                  document.location.href = 'index.php'';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
            <label for="nama">NAMA : </label>
            <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="email">EMAIl : </label>
            <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="jurusan">JURUSAN : </label>
            <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="gambar">GAMBAR : </label>
            <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>