<?php
include "koneksi.php";

session_start();

if(isset($_POST['submit'])){
    $user_name = $_POST['user_name']; 
    $password = $_POST['password'];
    $epassword = md5($password);

    $cek = mysqli_query($mysqli,"select * from tb_admin where user_name='$user_name' and password='$epassword'");
    if(mysqli_num_rows($cek)>0){
        $data = mysqli_fetch_array($cek);
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = $data['level'];
        echo "<script>window.location.href='home.php'</script>";
    }elseif(mysqli_num_rows($cek) == 0){
        echo "<script>alert('periksa kembali username dan password yang anda masukan');window.history.go(-1);</script>";
    }
}else{
    header("location: http://localhost/APLIKASI ATK/index.php");
}


?>
