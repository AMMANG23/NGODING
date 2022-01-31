<!DOCTYPE html>
<html lang="id">
 <!-- Muayyat menjual paket diamond epep plus skin lejen seharga Rp120.000/paket. Diskon diberikan berdasarkan jumlah yang paket yang dibeli, berikut tabelnya: 

Jumlah                  Diskon
10 - 19	                |    20%
20 - 49	                |    30%
50 - 69	                |    35%
70 - 99	                |    40%
100 atau lebih    |	   50%

Tulislah program yang menanyakan berapa unit yang dibeli lalu menghitung biaya total serta menghitung berapa banyak uang yang dihemat karena diskon. Programnya juga harus menampilkan berapa unit yang dibeli dan diskonnya dalam bentuk persen.

Expected Result:
Jumlah unit yang dibeli:
Diskon yang didapat: ..%
Jumlah uang yang dihemat karena diskon: 
Total Bayar:-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penjualan Diamond</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container" ><br>    
  <form action="" method="post"/><center>
  <h3 class="btn btn-warning mb-3">J U A L - D I A M O N D</h3></center>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Kontak</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Pesan</a>
  </li>
</ul>
<table class="table table-borderless">
  <thead>
    <tr>
      <th width="55"scope="col">No</th>
      <th scope="col">Jumlah paket</th>
      <th scope="col">Diskon</th>
      <th scope="col">Harga/Paket</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10 - 19</td>
      <td>20%</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>20 - 49</td>
      <td>30%</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>50 - 69</td>
      <td>35%</td>
      <td>Rp. 120,000,00</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>70 - 99</td>
      <td>40%</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>100 / lebih</td>
      <td>50%</td>
      <td></td>
    </tr>
    
  </tbody>
</table>
<div class="btn btn-dark mb-3">
  <input name="id" type="number" class="form-control" placeholder="ID PLAYER">
</div>
<div class="btn btn-dark mb-4">
  <input name="jmlpaket" type="number" class="form-control" placeholder="Jumlah paket">
</div>
<select class="form-select" aria-label="Default select example">
  <option selected>Pilih metode pembayaran!</option>
  <option value="1">Dana</option>
  <option value="2">XL</option>
  <option value="3">Telkomsel</option>
</select>
<br>
<button name="cekout"type="submit" class="btn btn-primary mb-3">Check out</button>
<?php
if (isset($_POST['cekout'])) { ?>
<table class="table table-dark">  <thead>
    <tr>
      <th scope="col">ID PLAYER</th>
      <th scope="col">JUMLAH PAKET</th>
      <th scope="col">DISKON</th>
      <th scope="col">TOTAL BAYAR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $_POST['id']; ?></td>
      <td><?php echo $_POST['jmlpaket']; ?></td>
      <td><?php 
      if($_POST['jmlpaket'] >= 10 && $_POST['jmlpaket'] < 20){
        $total = $_POST['jmlpaket']*120000 - ($_POST['jmlpaket'] * 120000 * 20/100);echo("20%");
      }
      elseif($_POST['jmlpaket'] >= 20 && $_POST['jmlpaket'] < 50){
        $total = $_POST['jmlpaket']*120000 - ($_POST['jmlpaket'] * 120000 * 30/100); echo("30%");
      }
      elseif($_POST['jmlpaket'] >= 50 && $_POST['jmlpaket'] < 70){
        $total = $_POST['jmlpaket']*120000 - ($_POST['jmlpaket'] * 120000 * 35/100); echo("35%");
      }
      elseif($_POST['jmlpaket'] >= 70 && $_POST['jmlpaket'] < 100){
        $total = $_POST['jmlpaket']*120000 - ($_POST['jmlpaket'] * 120000 * 40/100); echo("40%");
      }
      elseif($_POST['jmlpaket'] >= 100){
        $total = $_POST['jmlpaket']*120000 - ($_POST['jmlpaket'] * 120000 * 20/100); echo("50%");
      }
      else{
        $total = $_POST['jmlpaket']*120000;
        echo("0%");
      }
      ?></td>
      <td><?php echo "Rp. ".$total ?></td>
    </tr><?php } ?>
</div>
</body>
</html>






