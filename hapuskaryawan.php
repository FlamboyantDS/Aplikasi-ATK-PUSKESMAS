<?php
include 'koneksi.php';
$NIK = $_GET['NIK'];
$delete = mysqli_query($mysqli, "delete from tb_karyawan where NIK = $NIK");

if($delete){
    echo "<script>alert('proses hapus data berhasil');window.location.href='http://localhost/APLIKASI ATK/datakaryawan.php';</script>";
} else {
    echo "<script>alert('proses hapus data gagal');window.history.go(-1);</script>";
}



?>