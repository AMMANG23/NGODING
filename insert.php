<?php
include('database.php');
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pw = $_POST['pass'];
$kls = $_POST['kelas'];
$tombol = $_POST['tombol'];
if(isset($tombol)){
 $sql = "INSERT INTO BIO VALUES ('$nama','$nim','$pw','$kls')";
 $eksekusi = mysqli_query($connect,$sql);
}
?>