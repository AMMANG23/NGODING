<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Nilai Ipk</title>
</head>
<body>
    <form action="input.php" method="post"/>
    <h3>Menghitung Nilai IPK</h3>
    <table>
        <tr>
            <td width="120">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
            
        </tr>
        <tr>
            <td>jumlah_mk</td>
            <td><input type="number" name="jumlahMk"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="tombol">U P L O A D</button></td>
        </tr>
    </table>
</body>
</html>
<!--Simpan File Diatas Dengan Nama 'index.php' 
terus kita buat file baru simpan dengan nama input.php dan masukkan kode dibawah -->

<?php
$jumlahMk = $_POST['jumlahMk'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

echo "Nama : $nama";
echo "<br>Nim : $nim";

echo "<form action='hasil.php' method='post'/>";
for($i=0; $i<$jumlahMk; $i++){
    echo "<br>--------------------------------------------------------";
    echo "<table>";
    echo "<tr>";
    echo "<td width='120'>Nama Matakuliah</td>";
    echo "<td><input type='text' name='namamatakuliah'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Matakuliah</td>";
    echo "<td><input type='number' name='nilaimatakuliah$i'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>jumlah SKS</td>";
    echo "<td><input type='text' name='jumlahSks$i'></td>";
    echo "</tr>";
    echo "</table>";
}
echo "<table>";
echo "<tr>";
echo "<td width='120'>Konfirmasi jumlah matkul</td>";
echo "<td><input max='100' min='0' type='number' name='KonfirmasiMk'></td>";
echo "</tr>";
echo "</table>";
echo "<td><button type='submit' name='tombol1'>K I R I M</button></td>";
?>

<?php
/*
Selanjutnya buat file baru lagi dengan nama 'hasil.php'
Kemudian masukkkan perintah dibawah....!!!!
*/
?>

<?php
$nilai = [];
$sks = [];
if(isset($_POST['tombol1'])){
    for($i=0; $i<$_POST['KonfirmasiMk']; $i++){
        $sks[$i] = $_POST['jumlahSks'.$i];
    }
    for($i=0; $i<$_POST['KonfirmasiMk']; $i++){
        if($_POST['nilaimatakuliah'.$i] >= 80 && $_POST['nilaimatakuliah'.$i] <= 100){
            $nilai[$i] = 4 * $_POST['jumlahSks'.$i];
        }
        else if($_POST['nilaimatakuliah'.$i] >= 65 && $_POST['nilaimatakuliah'.$i] < 80){
            $nilai[$i] = 3 * $_POST['jumlahSks'.$i];
        }
        else if($_POST['nilaimatakuliah'.$i] >= 55 && $_POST['nilaimatakuliah'.$i] < 65){
            $nilai[$i] = 2 * $_POST['jumlahSks'.$i];
        }
        else if($_POST['nilaimatakuliah'.$i] < 55){
            $nilai[$i] = 0 * $_POST['jumlahSks'.$i];
        }
    }
$ipk = array_sum($nilai) / array_sum($sks);
if($ipk >= 3.5 && $ipk <= 4){
    echo "IPK = $ipk, PREDIKAT DENGAN PUJIAN";
}
else if($ipk >= 3 && $ipk < 3.5){
    echo "IPK = $ipk, PREDIKAT SANGAT MEMUASKAN";
}
else if($ipk >= 2.5 && $ipk < 3){
    echo "IPK = $ipk, PREDIKAT MEMUASKAN";
}
else if($ipk < 2.5){
    echo "IPK = $ipk, PREDIKAT LULUS";
}

}

