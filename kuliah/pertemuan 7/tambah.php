<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  tambah($_POST);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Daftar Pemain</title>
</head>
<body>

  <h3>Form Tambah Daftar Pemain</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
            Gambar:
            <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <label>
            Nama:
            <input type="text" name="nama" required>
        </label>
      </li>
      <li>
        <label>
            No. Punggung:
            <input type="text" name="no" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Daftar Pemain</button>
      </li>
    </ul>
  </form>
  
</body>
</html>