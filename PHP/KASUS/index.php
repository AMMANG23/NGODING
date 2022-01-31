<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
<form method="post"/>
  <br><div class="mb-3">
    <label class="form-label">Komentar</label>
    <input name="komen" type="text" class="form-control mb-3">
  <button name="tombol1" type="submit" class="btn btn-primary mb-3">Submit</button>
</form>
<?php
$komen = [];
if(isset($_POST['tombol1'])){
  array_push($komen, $_POST['komen']);
  print("<pre>");
  print_r($komen);
  print("</pre>");
}
?>
  </div>
</body>
</html>