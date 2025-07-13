<?php
include 'koneksi.php';
$id_data = $_GET['id_data'];
$delete = mysqli_query($mysqli, "delete from tb_datamasuk where id_data = $id_data");
if($delete){
    echo "<script>alert('proses hapus data berhasil');window.location.href='http://localhost/APLIKASI ATK/barangmasuk.php';</script>";
} else {
    echo "<script>alert('proses hapus data gagal');window.history.go(-1);</script>";
}

?>