<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat ORDER BY idobat DESC");1
 //ASCENDING mengurutkan dari kecil ke besar
 //DESCENDING mengurutkan dari besar ke kecil
    # code...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Id Obat</th>
                <th>Id Supplier</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Obat</th>
                <th>Harga Beli</th>
                <th>Stok Obat</th>
                <th>Keterangan</th>
            </tr>
            <?php 
                while ($baris = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?= $baris['idobat']; ?></td>
                    <td><?= $baris['idsupplier']; ?></td>
                    <td><?= $baris['namaobat']; ?></td>
                    <td><?= $baris['kategoriobat']; ?></td>
                    <td><?= $baris['hargajual']; ?></td>
                    <td><?= $baris['hargabeli']; ?></td>
                    <td><?= $baris['stok_obat']; ?></td>
                    <td><?= $baris['keterangan']; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </center>
        
</body>
</html>