<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
?>

<div class="animated fadeIn">
    <div class="row">   
        <div class="col-lg-12">
            <form action="prosestambahkaryawan.php" method="post" class="form-horizontal">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah</strong> Data 
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="nama" placeholder="Nama" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="NIK" placeholder="NIK" class="form-control"></div>
                        </div>
						 <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="NIP" placeholder="NIP" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="jabatan" placeholder="Jabatan" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telp</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="no_telp" placeholder="No Telp" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                                <select name="status" class="form-control">
                                    <option value="y">Ya</option>
                                    <option value="t">Tidak</option>
                                </select>
                            </div>
                        </div>
                    
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
<?php include "footer.php"; ?>
<?php }else{
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/index.php';</script>";
 }?>