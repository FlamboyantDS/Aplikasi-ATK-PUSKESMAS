<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
?>

<div class="animated fadeIn">
    <div class="row">   
        <div class="col-lg-12">
            <form action="prosestambahbarangmasuk.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah</strong> Data Buku ATK
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Barang</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="Nama_barang"  placeholder="Nama Barang" class="form-control"></div>  
                        </div>
                       
						 
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input"  class=" form-control-label">Gambar</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="gambar" class="form-control-file"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include 'footer.php'; 
?>
<?php }else{
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/datastok.php';</script>";
 }?>