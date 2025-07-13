<?php 
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=datakaryawan.xls"); ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>No Telp</th>
        <th>NIP</th>


    </tr>
    <?php
    include "koneksi.php";
    $select = mysqli_query($mysqli, "select * from tb_karyawan
    ");
	$no = 1;
	while($data = mysqli_fetch_array($select)){
		echo '
		<tr>
            <td>'.$no.'</td>
            <td>'.$data['NIK'].'</td>
            <td>'.$data['nama'].'</td>
            <td>'.$data['jabatan'].'</td>
            <td>'.$data['no_telp'].'</td>
			 <td>'.$data['NIP'].'</td>
			
		</tr>
		';
		$no++;
	}
	?>
</table>