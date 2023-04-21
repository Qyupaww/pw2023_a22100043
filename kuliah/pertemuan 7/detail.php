<?php
require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM pemain WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pemain</title>
</head>
<body>
  <h3>Detail Pemain</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="300"></li>
    <li>Nama  : <?= $m['nama']; ?></li>
    <li>No Punggung : <?= $m['no']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Back</a></li>
  </ul>
</body>
</html>