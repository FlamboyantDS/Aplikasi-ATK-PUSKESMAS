<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
	$password = $_POST['password'];
    $epassword = md5($password);
    $no_telp = $_POST['no_telp'];
    $level = $_POST['level'];


    $insert = mysqli_query($mysqli, "insert into tb_admin set
    nama = '$nama',
    user_name = '$username',
	password = '$epassword',
    no_telp = '$no_telp',
    level = '$level' ");

    if($insert){
        echo "<script>alert('proses tambah data berhasil');window.location.href='http://localhost/APLIKASI ATK/dataakses.php';</script>";
    } else {
        echo "<script>alert('proses tambah data gagal');window.history.go(-1);</script>";
    }
}else{
    header("location: http://localhost/APLIKASI ATK/dataakses.php");
}

?>