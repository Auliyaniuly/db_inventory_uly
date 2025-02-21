<?php

$id_barang=$_GET['id_barang'];
$nama_barang=$_GET['nama_barang'];
$id_jenis=$_GET['id_jenis'];
$harga=$_GET['harga'];
$stok=$_GET['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "DELETE FROM barang WHERE id_barang");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
 }
 else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href='view.tambah.php'</script>";
 }

 ?>