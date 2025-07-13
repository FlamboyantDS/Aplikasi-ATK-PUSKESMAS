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
                        <strong class="card-title">Data Keluar</strong>
                       
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Nama Barang</th>
                                <th>Tanggal keluar</th>
                                <th>Jumlah keluar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no=1;
                            $select = mysqli_query($mysqli,
                                "select tb_karyawan.nama, tb_karyawan.NIK, tb_databarang.Nama_barang,
                            tb_datakeluar.tgl,tb_datakeluar.jumlah, tb_datakeluar.id_datakeluar from tb_datakeluar
                            join tb_karyawan on tb_karyawan.NIK = tb_datakeluar.NIK
                            join tb_databarang on tb_databarang.id_data = tb_datakeluar.id_data") or die (mysqli_error($mysqli));

                            while($data = mysqli_fetch_array($select)){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['NIK']; ?></td>
                                    <td><?php echo $data['Nama_barang']; ?></td>
                                    <td><?php echo $data['tgl']?></td>
                                    <td><?php echo $data['jumlah']?></td>
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
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/datakeluar.php';</script>";
}?>