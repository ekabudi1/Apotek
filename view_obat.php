<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_obat ORDER BY id_obat DESC");
 //ASCENDING mengurutkan dari kecil ke besar
 //DESCENDING mengurutkan dari besar ke kecil
    # code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat</title>
    <style>
    body {
        background-color: black;
        color: white;
    }

    body tr td a {
        color: white;
        padding-top: 3%;
        padding-bottom: 3%;
        background-color: green;
        padding-left: 15px;
        padding-right: 15px;
    }
    </style>
</head>

<body>
    <center>
        <h1>
            <b>
                TAMPILAN DATA OBAT
            </b>
        </h1>
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
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                while ($baris = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $baris['id_obat']; ?></td>
                <td><?= $baris['id_supplier']; ?></td>
                <td><?= $baris['namaobat']; ?></td>
                <td><?= $baris['kategoriobat']; ?></td>
                <td><?= $baris['hargajual']; ?></td>
                <td><?= $baris['hargabeli']; ?></td>
                <td><?= $baris['stok_obat']; ?></td>
                <td><?= $baris['keterangan']; ?></td>
                <td><a href="edit_obat.php?idobat=<?= $baris['id_obat']; ?>">Edit</a></td>
                <td><a href="delete_obat.php?idobat=<?= $baris['id_obat'];?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </center>

</body>

</html>