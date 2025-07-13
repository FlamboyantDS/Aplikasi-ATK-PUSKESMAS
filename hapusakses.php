<?php
include 'koneksi.php';
$id = $_GET['id'];
$delete = mysqli_query($mysqli, "delete from tb_admin where id_admin = $id");

if($delete){
    echo "<script>alert('proses hapus data berhasil');window.location.href='http://localhost/APLIKASI ATK/dataakses.php';</script>";
} else {
    echo "<script>alert('proses hapus data gagal');window.history.go(-1);</script>";
}

?>