<!DOCTYPE html>
<html>

<head>

    <title>POST</title>
</head>
<?php if( isset($_POST["submit"]) ) : ?>
<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
<body>
    <form action="latian4.php" method="post">
        masukkan nama :
        <input type=" text" name="nama">
        <br>
        <button type="submit" name="submit">kirim!</button>
    </form>
</body>

</html>