<?php
include 'koneksi.php';
$id_datakeluar = $_GET['id_datakeluar'];
$delete = mysqli_query($mysqli, "delete from tb_datakeluar where id_datakeluar = $id_datakeluar");

if($delete){
    echo "<script>alert('proses hapus data berhasil');window.location.href='http://localhost/APLIKASI ATK/datakeluar.php';</script>";
} else {
    echo "<script>alert('proses hapus data gagal');window.history.go(-1);</script>";
}

?>