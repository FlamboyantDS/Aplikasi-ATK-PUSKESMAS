<?php 
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporandatakeluar.xls"); ?>
<table border="1">
	<tr>
		<th>NO.</th>
		<th>NIK</th>
        <th>NAMA</th>
        <th>NAMA BARANG</th>
        <th>TANGGAL KELUAR</th>
        <th>STATUS</th>
	</tr>
	<?php
    include "koneksi.php";
    $select = mysqli_query($mysqli, "
    select tb_karyawan.nama, tb_karyawan.NIK,tb_databarang.Nama_barang,
    tb_datakeluar.tgl,tb_datakeluar.id_datakeluar from tb_datakeluar
    join tb_karyawan on tb_karyawan.NIK = tb_datakeluar.NIK
    join tb_databarang on tb_databarang.id_data = tb_datakeluar.id_data
    ");
	$no = 1;
	while($data = mysqli_fetch_array($select)){
		echo '
		<tr>
            <td>'.$no.'</td>
            <td>'.$data['NIK'].'</td>
            <td>'.$data['nama'].'</td>
            <td>'.$data['Nama_barang'].'</td>
            <td>'.$data['tgl'].'</td>
			
		</tr>
		';
		$no++;
	}
	?>
</table>