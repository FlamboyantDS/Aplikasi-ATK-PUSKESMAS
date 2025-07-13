<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $NIK = $_POST['NIK'];
	$NIP = $_POST['NIP'];
    $jabatan = $_POST['jabatan']; 
    $no_telp = $_POST['no_telp'];
    $status = $_POST['status'];


    $insert = mysqli_query($mysqli, "insert into tb_karyawan set
    nama = '$nama',
    NIK = '$NIK',
	NIP = '$NIP',
    jabatan = '$jabatan',
    no_telp = '$no_telp',
    status = '$status'
    ");

    if($insert){
        echo "<script>alert('proses tambah data berhasil');window.location.href='http://localhost/APLIKASI ATK/datakaryawan.php';</script>";
    } else {
        echo "<script>alert('proses tambah data gagal');window.history.go(-1);</script>";
    }
}else{
    header("location: http://localhost/APLIKASI ATK/datakaryawan.php");
}

?>