<?php
include "koneksi.php";    
if(isset($_POST['submit'])){
   $satuan = $_POST['satuan'];
    $id_data = $_POST['id_data'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];


    

    $selSto =mysqli_query($mysqli, "SELECT * FROM tb_databarang WHERE id_data='$id_data'");
    $sto    =mysqli_fetch_array($selSto);
    $stok    =$sto['jumlah'];
    //menghitung sisa stok
    $sisa    =$stok+$jumlah;
    
    if ($stok > $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! Gagal ...');
            document.location='datakeluar.php';
        </script>
        <?php
    }
    //proses    
    else{ 
	
        $insert =mysqli_query($mysqli, "INSERT INTO tb_barang (  satuan, id_data,tgl, jumlah ) VALUES ('$satuan', '$id_data', '$tgl' , '$jumlah'  )");
            if($insert){
                //update stok
                $upstok= mysqli_query($mysqli, "UPDATE tb_datamasuk SET jumlah='$sisa' WHERE id_data='$id_data'");
                ?>
                <script language="JavaScript">
                    alert('Good! berhasil ...');
                    document.location='databarangmasuk.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>