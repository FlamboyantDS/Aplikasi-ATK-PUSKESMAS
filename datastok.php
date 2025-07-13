<?php 
session_start();
if(!empty($_SESSION['id_admin'])){
include 'header.php'; 
include 'koneksi.php';
?>
<!--konten disini-->
 <div class="col-xl-3 col-md
                            </div>
                        </div>
						 <div> class="col-xl-3 col-md-6 mb-4">
							
                        </div>
						
						<div class="animated fadeIn">
						                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                DATA KARYAWAN)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
											<select name=NIK" class="form-control">
                                    <?php 
                                        $siswa = mysqli_query($mysqli, "select * from tb_karyawan");
                                        while($data = mysqli_fetch_array($siswa)){ ?>
                                        <option value="<?php echo $data['NIK']; ?>"><?php echo $data['nama']?></option>
                                    <?php } ?>
                                </select>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                DATA BARANG</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
											<select name="id_data" class="form-control">
                                    <?php 
                                        $siswa = mysqli_query($mysqli, "select * from tb_databarang");
                                        while($data = mysqli_fetch_array($siswa)){ ?>
                                        <option value="<?php echo $data['id_data']; ?>"><?php echo $data['Nama_barang']?></option>
                                    <?php } ?>
                                </select>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
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
                                <th>Sisa stok</th>
                                
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
                                    <td>
                                        
                                  
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
    echo "<script>alert('anda harus login!');window.location.href='http://localhost/APLIKASI ATK/index.php';</script>";
 }?>