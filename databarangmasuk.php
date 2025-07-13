<?php
session_start();
if(!empty($_SESSION['id_admin'])){
    include 'header.php';
    include 'koneksi.php';
    $akses = $_SESSION['status'];
    ?>
    <!--konten disini-->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data barang</strong>
                       
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Tanggal </th>
								<th>satuan</th>
                                <th>Jumlah</th>
                                <?php if($akses == "admin"){?>
                                <th width="100">Action</th>
                                <?php }?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no=1;
                            $select = mysqli_query($mysqli,
                                "select  tb_databarang.Nama_barang,
                            tb_barang.tgl,tb_barang.satuan,tb_barang.jumlah, tb_barang.id_datakeluar from tb_barang
                           
                            join tb_databarang on tb_databarang.id_data = tb_barang.id_data") or die (mysqli_error($mysqli));

                            while($data = mysqli_fetch_array($select)){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    
                                    <td><?php echo $data['Nama_barang']; ?></td>
                                    <td><?php echo $data['tgl']?></td>
									 <td><?php echo $data['satuan']?></td>
                                    <td><?php echo $data['jumlah']?></td>
                                    <?php if($akses == "admin"){?>
                                    <td>
                                        <a href="hapusbarangmasuk.php?id_datakeluar=<?php echo $data['id_datakeluar']; ?>" class="btn btn-sm btn-info">hapus data </a>
                                  
                                    </td>
                                    <?php }?>
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
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/datamasuk.php';</script>";
}?>