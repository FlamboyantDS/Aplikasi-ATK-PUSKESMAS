<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
    
	$Nama_barang = $_POST['Nama_barang'];
    
   
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    $insert = mysqli_query($mysqli, "insert into tb_databarang set
    
    Nama_barang = '$Nama_barang',
    
   
    gambar = '$gambar'
    ");

    if($insert){
        move_uploaded_file($gambar_tmp, 'images/'.$gambar);
        echo "<script>alert('proses tambah data berhasil');window.location.href='http://localhost/APLIKASI ATK/databarangmasuk.php';</script>";
    } else {
        echo "<script>alert('proses tambah data gagal');window.history.go(-1);</script>";
    }
}else{
    header("location: http://localhost/APLIKASI ATK/datastok.php");
}

?>