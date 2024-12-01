<?php
require 'functions.php';

// ambil data ke URL
$id = $_GET["id"];
var_dump($id);

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
var_dump($mhs["nama"]);

// koneksi ke dbms
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    
    
    // cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                  alert('data berhasil diubah');
                  document.location.href = 'index.php'';
            </script>
        
        ";
    } else {
        echo "
            <script>
                  alert('data gagal diubah');
                  document.location.href = 'index.php'';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" reuired value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
            <label for="nama">NAMA : </label>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
            <label for="email">EMAIl : </label>
            <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
            <label for="jurusan">JURUSAN : </label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
            <label for="gambar">GAMBAR : </label>
            <img scr="img/<?= $mhs['gambar']; ?>" width="40"> <br>
            <input type="file" name="gambar" id="gambar">
           </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>