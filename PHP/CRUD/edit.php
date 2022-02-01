<?php
include('koneksi.php');
$edit_data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '".$_GET['nim']."'");
$result = mysqli_fetch_array($edit_data);
?>
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
    <label class="form-label">Nama</label></td><td><input name="nama" type="text" value="<?php echo $result['nama'] ?>" class="form-control"></td>
  </tr>
     <tr>
  <td width="120">
    <label class="form-label">Nim</label></td><td><input name="nim" type="text" value="<?php echo $result['nim'] ?>" class="form-control"></td>
  </tr>
     <tr>
  <td width="120">
    <label class="form-label">Jurusan</label></td><td><input name="jurusan" type="text" value="<?php echo $result['jurusan'] ?>" class="form-control"></td>
  </tr></table>
  <button name="edit" type="submit" class="btn btn-primary">Simpan</button>
  <?php
  if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE mahasiswa SET nama = '".$_POST['nama']."', jurusan = '".$_POST['jurusan']."' WHERE nim = '".$_GET['nim']."'");
    echo("Data Berhasil Di Update");
  }
  ?>
  </div>

</body>
</html>