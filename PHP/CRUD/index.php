<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="p-3 mb-2 bg-primary text-white">KELOLA DATA MAHASISWA</div>
  <div class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <td width="120" scope="col">Nama</td>
          <td width="120" scope="col">Nim</td>
          <td width="120" scope="col">Jurusan</td>
          <td scope="col"></td>
        </tr>
      </thead>
    </table>
    <?php
    include('koneksi.php');
    $select = mysqli_query($conn, "select * from mahasiswa");
    while($data = mysqli_fetch_array($select)) { ?>
     <table class="table table-info">
        <tr valign="middle">
          <td width="120" scope="col"><?php echo $data['nama'] ?></td>
          <td width="120"scope="col"><?php echo $data['nim'] ?></td>
          <td width="120" scope="col"><?php echo $data['jurusan'] ?></td>
          <td align="right" scope="col"><div class="dropdown">
  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="edit.php">edit</a></li>
    <li><a class="dropdown-item text-danger" href="hapus.php?nim=<?php echo $data['nim']?>">hapus</a></li>
  </ul>
</div></td></tr>
    </table><?php } ?>
    <form action="input.php"/>
    <button name="tambah" type="submit" class="btn btn-primary">Tambah</button></center>
  </div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>