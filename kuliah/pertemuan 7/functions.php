<?php
function koneksi()
{
  return mysqli_connect('localhost','root','','pw_a22100043' );
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1 ) {
      return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;

}

function tambah($data)
{
  $conn = koneksi();

  $gambar = $data['gambar'];
  $nama = $data['nama'];
  $no = $data['no'];

  $query = "INSERT INTO
                pemain
              VALUES
              (null, '$gambar', '$nama', '$no');
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}