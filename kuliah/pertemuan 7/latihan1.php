<?php
$conn = mysqli_connect('localhost','root','','pw_a22100043' );

$result = mysqli_query($conn, "SELECT * FROM pemain");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$pemain = $rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pemain Bayern Munchen</title>
</head>
<body>
  <h3>Daftar Pemain Bayern Munchen</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>No. Punggung</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($pemain as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="100"></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['no']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>