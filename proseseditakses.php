<?php
include 'koneksi.php';
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
	$password = $_POST['password'];
    $no_telp = $_POST['no_telp'];
    $level = $_POST['level'];

    $epassword = "";
    if($password){
        $password = md5($password);
        $epassword = ",password='$password'";
    }

    $insert = mysqli_query($mysqli, "update tb_admin set
    nama = '$nama',
    user_name = '$username'
	$epassword,
    no_telp = '$no_telp',
    level = '$level' where id_admin ='$id'");

    if($insert){
        echo "<script>alert('proses edit data berhasil');window.location.href='http://localhost/APLIKASI ATK/dataakses.php';</script>";
    } else {
        echo "<script>alert('proses edit data gagal');window.history.go(-1);</script>";
    }
}else{
    header("location: http://localhost/APLIKASI ATK/dataakses.php");
}

?>