<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($mysqli,"select * from tb_admin where id_admin = '$id'");
$tarik = mysqli_fetch_array($data);
?>

<div class="animated fadeIn">
    <div class="row">   
        <div class="col-lg-12">
            <form action="proseseditakses.php?id=<?php echo $tarik['id_admin']?>" method="post" class="form-horizontal">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Data 
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="nama" value="<?php echo $tarik['nama']?>" placeholder="Nama" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="username" value="<?php echo $tarik['user_name']?>" placeholder="Username" class="form-control"></div>
                        </div>
						 <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="password" placeholder="Password Baru...." class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telp</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="no_telp" value="<?php echo $tarik['no_telp']?>" placeholder="No Telp" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Level</label></div>
                            <div class="col-12 col-md-9">
                                <select name="level" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="admin"<?php if($tarik['level'] == "admin"){echo "selected";} ?>>Admin</option>
                                    <option value="petugas"<?php if($tarik['level'] == "petugas"){echo "selected";} ?>>Petugas</option>
                                </select>
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