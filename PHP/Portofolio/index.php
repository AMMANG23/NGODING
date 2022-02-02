<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
<img src="log.jpg" alt="" width="23" height="23" class="rounded-circle d-inline-block align-text-top"> Web Developer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Project</a>
        <a class="nav-link" href="#">Contact</a>
      </div>
    </div>
  </div>
</nav>
<div class="container bg-light p-4 mb-5"><center>
  <img src="log.jpg" class="rounded-circle img-thumbnail mb-3" width="250"><br>
  <h1 class="mb-1">ARMAN UMAR</h1>
  <p class="text-danger">Mahasiswa | Web Developer</p></center>
</div><br><br>
<div class="container bg-light p-5 mb-5">
  <h3 class="text-center mb-4">About Me</h3>
  <p class="text-center mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt architecto quam debitis laborum in consequuntur sunt fugit ducimus tempore rerum.

<br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam consectetur minus repellat repellendus quo facilis. Reiciendis sunt sint itaque aperiam, fugit totam distinctio nostrum cumque.</p>
</div></div><br><br>
<center>
<div class="container bg-light mb-5 p-5">
  <h2 class="mb-4">My Project</h2>
  <div class="card" style="width: 18rem;">
  <img src="keybord1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div></center><br>
<form action="" method="post"/>
<div class="container p-5"><center>
  <h2 class="mb-4">Contact Me</h2></center>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
  <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama lengkap">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <input name="pesan" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></div>
  <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
</div>
<div class="container">
<?php
if (isset($_POST['kirim'])) {
  include('koneksi.php');
  $komen = "INSERT INTO comen VALUES('".$_POST['nama']."', '".$_POST['email']."', '".$_POST['pesan']."')";
  mysqli_query($connect, $komen);
}
?>
<footer><center><br>
  <p class="text-primary">Created by ARMAN UMAR</p></center>
</footer>

</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
