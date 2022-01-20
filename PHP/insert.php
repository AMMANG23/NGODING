
<?php

//Memanggil fungsi inputan yang di file index.php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$tombol_tambah = $_POST['tambah'];

//koneksi
$host = 127.0.0.1;  //localhost
$user = "root";  //username mysql
$pass = "1234";  //password mysql
$db = "data";    //nama database
$konek = mysqli_connect($host, $user, $pass, $db);

/*
Jadi disini saya sudah membuat databasenya dengan nama 'data' 
untuk nama tabelnya itu saya buat dengan nama info yang dimana
didalam tabel itu terdiri dari kolom untuk NIM, NAMA, DAN JURUSAN
*/
if(isset($tombol_tambah)){
  $sql = "INSERT INTO info VALUES('$nim', '$nama', '$jurusan')";
  mysqli_query($konek, $sql);
  include('index.php');
/*
jadi ketika kita isi inputan yang ada di index.php dan kita klik tombol
tambah maka data mahasiswa akan di kirim ke database
*/

}
?>
