<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container"><br>
  <a href="index.php" class="btn btn-light text-primary mb-3">kembali</a>    
  <form method="post"/><table class="mb-3">
      <tr>
  <td width="120">
    <label class="form-label">Nama</label></td><td><input name="nama" type="text" class="form-control"></td>
  </tr>
     <tr>
  <td width="120">
    <label class="form-label">Nim</label></td><td><input name="nim" type="text" class="form-control"></td>
  </tr>
     <tr>
  <td width="120">
    <label class="form-label">Jurusan</label></td><td><input name="jurusan" type="text" class="form-control"></td>
  </tr></table>
  <button name="tombol" type="submit" class="btn btn-primary">Simpan</button>
  <?php
  include('koneksi.php');
  if (isset($_POST['tombol'])) {
    $sql = "insert into mahasiswa values('".$_POST['nama']."', '".$_POST['nim']."', '".$_POST['jurusan']."')";
   mysqli_query($conn, $sql);
   echo("Data Berhasil Disimpan");
  }
  ?>
  </div>

</body>
</html>