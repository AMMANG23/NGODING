
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <form action="input.php" method="post"/>
  <div class="container"><center><br>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="btn btn-warning">INPUT NILAI MAHASISWA</h3><pre></pre>
    <h5 class="card-title">Selamat Datang</h5>
    <p class="card-text">Silahkan klik lanjutkan untuk memasukkan nilai setiap matakuliah</p>
    <a href="input.php" class="btn btn-primary">L A N J U T K A N</a>
  </div>
</div>
  </div>
</body>
</html>

Simpan kode diatas dalam file index.php
Selanjutnya buat file baru dengan nama input.php 
Dan masukkan kode dibawah...!!!!1

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
echo("<form action='inputan.php' method='post'/>");
echo("<center>");
echo("<br><h3 class='btn btn-warning'>MASUKKAN BIODATA</h3>");
echo("</center>");
echo("<br><div class='form-floating mb-2'>
  <input name='nama' type='text' class='form-control' placeholder='ARMAN UMAR'>
  <label>NAMA</label>
</div>");
echo("<div class='form-floating mb-2'>
  <input name='nim' type='text' class='form-control' placeholder='D0221049'>
  <label>NIM</label>
</div>");
echo("<div class='form-floating mb-2'>
  <input name='jurusan' type='text' class='form-control' placeholder='TEKNIK INFORMATIKA'>
  <label>JURUSAN</label>
</div>");
echo("<div class='form-floating mb-2'>
  <input name='jumlahMk' type='number' class='form-control' placeholder='9'>
  <label>JUMLAH MATKUL</label>
</div>");
echo("<center>");
echo("<button name='next' type='submit' class='btn btn-primary'>Selanjutnya</button>");
echo("</center>");
echo("</div>");
echo("</body>");
echo("</html>");
?>


Selanjutnya buat file baru lagi dengan nama inputan.php
Dan masukkan sourscode dibawah.....!!!!!1

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
if(isset($_POST['next'])){
  echo("<form action='' method='post'/>");
  echo("<br><center><div class='btn btn-light'>");
  echo($_POST['nama']);
  echo("<br>".$_POST['nim']);
  echo("<br>".$_POST['jurusan']);
  echo("</div></center>");
  echo("<br><h3 class='btn btn-info'>Masukkan Nama Matakuliah, Nilai Matakuliah, Dan Jumlah SKS Per Matakuliah</h3>");
  
  $no = 0;
  for($i=0; $i<$_POST['jumlahMk']; $i++){
    $no += 1;
    
    echo("-----------------------------------------------------------------------------------------------------------");
    echo("<div class='form-floating mb-1'>
    <input name='namaMk' type='text' class='form-control' placeholder='agama'>
    <label>Nama Matakuliah $no</label></div>");
    echo("<div class='form-floating mb-1'>
    <input name='nilai$i' type='number' class='form-control' placeholder='100'>
    <label>Nilai</label></div>");
    echo("<div class='form-floating mb-1'>
    <input name='sks$i' type='number' class='form-control' placeholder='3'>
    <label>sks</label></div>");

  }
    echo("<div class='form-check'>
  <input class='form-check-input' type='checkbox' value='$no' name='cek'>
  <label class='form-check-label' for='flexCheckDefault'>
    Konfirmasi
  </label>
</div>");
  echo("<center>");
  echo("<br><button name='upload' type='submit' class='btn btn-primary'>Upload</button>");
  echo("</center>");
}
echo("</div>");
echo("</body>");
echo("</html>");
$sks = [];
$nilai = [];
  if(isset($_POST['upload'])){
    for($i=0; $i<$_POST['cek']; $i++){
      $sks[$i] = $_POST['sks'.$i];
    }
    for($i=0; $i<$_POST['cek']; $i++){
      if($_POST['nilai'.$i] >= 80 && $_POST['nilai'.$i] <= 100){
        $nilai[$i] = 4 * $_POST['sks'.$i];}
      else if($_POST['nilai'.$i] >= 65 && $_POST['nilai'.$i] < 80){
        $nilai[$i] = 3 * $_POST['sks'.$i];}
      else if($_POST['nilai'.$i] >= 55 && $_POST['nilai'.$i] < 65){
        $nilai[$i] = 2 * $_POST['sks'.$i];}
      else if($_POST['nilai'.$i] < 55){
        $nilai[$i] = 0 * $_POST['sks'.$i];}
      }
echo("<!DOCTYPE html>");
echo("<html lang='id'>");
echo("<meta charset='UTF-8'>");
echo("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
echo("<title>Belajar Bootstrap</title>");
echo(" <link rel='stylesheet' href='css/bootstrap.css'>");
echo("</head>");
echo("<body>");
echo("<div class='container'>");
echo("<br><center><div class='btn btn-info'>");
$ipk = array_sum($nilai) / array_sum($sks);
if($ipk >= 3.5 && $ipk <= 4){
    echo "NILAI IPK ANDA = $ipk, PREDIKAT DENGAN PUJIAN";
}
else if($ipk >= 3 && $ipk < 3.5){
    echo "NILAI IPK ANDA = $ipk, PREDIKAT SANGAT MEMUASKAN";
}
else if($ipk >= 2.5 && $ipk < 3){
    echo "NILAI IPK ANDA = $ipk, PREDIKAT MEMUASKAN";
}
else if($ipk < 2.5){
    echo "NILAI IPK ANDA = $ipk, PREDIKAT LULUS";
}

echo("</div></center>");
echo("<br><center><div class='btn btn-warning'>");
echo("Tetap Menyerah Dan Jangan Semangat!");
echo("</div></center>");
echo("</div>");
echo("</body>");
echo("</html>");
}
?>