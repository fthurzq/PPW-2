<?php
include'koneksi.php';
// menyimpan data kedalam variabel
$id_mhs            = $_GET['id_mhs'];
// query SQL untuk insert data
$query="DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);
// mengalihkanke halaman index.php
header("location:index.php");
?>