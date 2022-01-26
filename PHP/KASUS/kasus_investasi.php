<?php
/*
Kaco bellu berinvestasi sebesar Rp. 100 dengan bunga 10%. Oleh karena
itu setiap tahun investasi tersebut akan menghasilkan keuntungan
sebesar 10% dari investasi semula, atau Rp. 10 setiap tahun. Tuliskan
suatu program untuk menghitung berapa waktu yang dibutuhkan agar
keuntungan kaco bellu dari bunga menjadi  Rp.1000.

Ada yg bisa?
*/
$investasi = 100;
$bunga = 10/100;
$tahun = 0;
while($investasi < 1000){
  $keuntungan = $investasi * $bunga;
  $investasi += $keuntungan;
  $tahun += 1;
  echo("<br>investasi tahun $tahun, untung $keuntungan");
}