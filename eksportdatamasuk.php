<?php 
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.pdf_add_bookmark"
header("Content-Disposition: attachment; filename=laporandatamasuk.xls"); ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama barang</th>
        <th>Tanggal</th>
        <th>Satuan</th>

        <th>jumlah stok</th>

    </tr>
    <?php
    include "koneksi.php";
    $select = mysqli_query($mysqli, "select * from tb_databarang");
	$no = 1;
	while($data = mysqli_fetch_array($select)){
		echo '
		<tr>
            <td>'.$no.'</td>
            <td>'.$data['Nama_barang'].'</td>
			<td>'.$data['tanggal'].'</td>
           
            <td>'.$data['satuan'].'</td>
            <td>'.$data['jumlah'].'</td>
			
		</tr>
		';
		$no++;
	}
	?>
</table>