<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
?>

<div class="animated fadeIn">
    <div class="row">   
        <div class="col-lg-12">
            <form action="prosesbarangmasuk.php" method="post" class="form-horizontal">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah</strong> Data masuk
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9">
                                
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Barang</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_data" class="form-control">
                                    <?php 
                                        $buku = mysqli_query($mysqli, "select * from tb_databarang");
                                        while($data = mysqli_fetch_array($buku)){ ?>
                                        <option value="<?php echo $data['id_data']; ?>"><?php echo $data['Nama_barang']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date"  name="tgl" placeholder="Kelas" class="form-control"></div>
                        </div> 
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">jumlah</label></div>
                            <div class="col-12 col-md-9"><input type="text-input"  name="jumlah" placeholder="jumlah" class="form-control"></div>
                        </div>
						<div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">satuan</label></div>
                            <div class="col-12 col-md-9"><input type="text-input"  name="satuan" placeholder="satuan" class="form-control"></div>
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