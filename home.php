<?php
session_start();
if(!empty($_SESSION['id_admin'])){
    include 'header.php';
    include 'koneksi.php';
    $akses = $_SESSION['status'];
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title"><h1>APLIKASI ATK PUSKESMAS</h1></strong>
            </div>
            <div class="card-body">
                <p class="card-text">Selamat Datang di Aplikasi </p>
            </div>
			 <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="images/logo.jpg" width="500px" height="200px">
                    </a>
                </div>

            <!--konten disini-->
            
                </div>
            </div><!-- .animated -->
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<?php }else{
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/index.php';</script>";
} ?>
