<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
  <div class="container">
    <a class="navbar-brand" href="#">Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Guru</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="container-sm">
    <div align="center" class="p-3 mb-2 bg-primary text-white">Jangan memberikan akun Anda pada siapapun</div>
</div>
</div>
  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>