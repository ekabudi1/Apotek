<?php
include "../koneksi.php";
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
    html::-webkit-scrollbar {
        display: none;
    }

    body {
        background-color: black;
        color: white;
    }

    body h1 {
        font-size: 90px;
        font-weight: 900;
        margin-top: 10%;
        /* background-color: blue; */
    }

    body tr td a {
        color: white;
        padding-top: 3%;
        padding-bottom: 3%;
        background-color: green;
        padding-left: 15px;
        padding-right: 15px;
    }

    body table {
        width: 100%;
        font-size: 25px;
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
                <td><a href="../update/edit_obat.php?idobat=<?= $baris['id_obat']; ?>">Edit</a></td>
                <?php 
                    $idobat = $baris['id_obat'];
                    // buat syntax innner join dengan 2 tabel yakni tb_obat demgan tb_detail_transaksi, dimana kolom yang dipakek id_obat(tb_obat)dan idobat(tb_detail_transaksi), karena beda nama kolomnya harus makek ON dan juga harus makek nama_table.nama_kolom = nama_table.nama_kolom
                    $hide_delete = mysqli_query($koneksi,"SELECT COUNT(*) AS Total  FROM tb_obat INNER JOIN tb_detail_transaksi ON tb_obat.id_obat = tb_detail_transaksi.idobat WHERE tb_obat.id_obat = $idobat");

                    //cek dengan mysqli_num_rows
                   $cek =  mysqli_fetch_row($hide_delete);
                   if ($cek['0']==0) {
                       # code...
                       ?>
                <td><a href="../delete/delete_obat.php?idobat=<?= $baris['id_obat'];?>">Delete</a></td>
                <?php
                    }else{
                        echo"<td></td>";
                    }
                ?>
            </tr>
            <?php
                }
            ?>
        </table>
    </center>

</body>

</html>