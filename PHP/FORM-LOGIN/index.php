<?php
$connect = mysqli_connect('127.0.0.1', 'root', '1234', 'data');
if (isset($_POST['daftar'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
  $result = mysqli_query($connect, "SELECT * FROM admin WHERE user = '$user' && pass = '$pass'");
  if(mysqli_num_rows($result) === 1){
    header('location:home.php');
  }
}
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
<div class="container p-3">
<form action="" method="post"/>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input name="user" type="text" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button name="daftar" type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
