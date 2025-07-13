<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
?>
<!--konten disini-->
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Akses</strong>
                    <a href="tambahakses.php" class="btn btn-sm btn-info">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No Telp</th>
                                <th>Level</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1; 
                            $select = mysqli_query($mysqli, 'select * from tb_admin');
                            while($data = mysqli_fetch_array($select)){ ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['user_name']; ?></td>
                                <td><?php echo $data['no_telp']?></td>
                                <td><?php echo $data['level']?></td>
                                <td>
                                    <a href="editakses.php?id=<?php echo $data['id_admin']?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapusakses.php?id=<?php echo $data['id_admin']?>" onclick="return confirm('Yakin ingin menghapus data ini')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
<?php include 'footer.php'; ?>
<?php }else{
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/AAPLIKASI ATK/index.php';</script>";
 }?>