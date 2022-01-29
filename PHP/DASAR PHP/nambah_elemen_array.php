<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar array</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <form action="" method="post"/>
  <div class="container">
    <br><h3 class="btn btn-info">Menambah Elemen Array</h3>
<div class="mb-3">
  <input name="array" type="number" class="btn btn-dark" placeholder="input panjang array">
  <button name="panjangarray"type="submit" class="btn btn-primary">Selanjutnya</button>
</div>
  </div>
</body>
</html>

<?php
echo("<!DOCTYPE html>");
echo("<html lang='id'>");
echo("<meta charset='UTF-8'>");
echo("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
echo("<title>Belajar Bootstrap</title>");
echo(" <link rel='stylesheet' href='css/bootstrap.css'>");
echo("</head>");
echo("<body>");
echo("<div class='container'>");
echo("<form method='post'/>");
if (isset($_POST['panjangarray'])) {
  echo("Silahkan Masukkan Elemen Array !");
  $nomor = 0;
  for($i=0; $i<$_POST['array']; $i++){
    $nomor += 1;
    echo("<div class='mb-3'>
  <input name='array$i' type='number' class='btn btn-dark' placeholder='elemen $nomor'>");
  echo("</div>");
  }
  echo("<div class='form-check'>
  <input name='cek' class='form-check-input' type='checkbox' value='$nomor' id='flexCheckDefault'>
  <label class='form-check-label' for='flexCheckDefault'>
    Pastikan Tidak Ada Yang Kosong
  </label>
</div>");
  echo("<button name='next' type='submit' class='btn btn-primary'>Lanjut</button>");
  
}
echo("</div>");
echo("</body>");
echo("</html>");

echo("<!DOCTYPE html>");
echo("<html lang='id'>");
echo("<meta charset='UTF-8'>");
echo("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
echo("<title>Belajar Bootstrap</title>");
echo(" <link rel='stylesheet' href='css/bootstrap.css'>");
echo("</head>");
echo("<body>");
echo("<div class='container'>");
$arr = [];
if(isset($_POST['next'])){
    for($i=0; $i<$_POST['cek']; $i++){
      $arr[$i] = $_POST['array'.$i];
     print("<pre>");
     print_r($arr);
     print("</pre>");
    }
  }
echo("</div>");
echo("</body>");
echo("</html>");
