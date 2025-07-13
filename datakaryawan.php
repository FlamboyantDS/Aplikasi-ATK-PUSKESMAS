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
                    <strong class="card-title">Data karyawan</strong>
                    <a href="tambahkaryawan.php" class="btn btn-sm btn-info">Tambah Data </a>
                    <a href="eksportkaryawan.php" class="btn btn-sm btn-success">Eksport karyawan</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIk</th>
                                <th>Jabatan</th>
                                <th>No Telp</th>
								<th>NIP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1; 
                            $select = mysqli_query($mysqli, 'select * from tb_karyawan');
                            while($data = mysqli_fetch_array($select)){ ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['NIK']; ?></td>
                                <td><?php echo $data['jabatan']; ?></td>
                                <td><?php echo $data['no_telp']?></td>
								<td><?php echo $data['NIP']?></td>
                                <td>
                                    
                                    <a href="hapuskaryawan.php?NIK=<?php echo $data['NIK']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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