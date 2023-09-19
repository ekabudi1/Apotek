<!-- untuk editing data obat -->
<?php
//tambahin koneksi.php biar mysqli_querry bekerja
include "koneksi.php";

//buat varaible getnya dulu{
    $id_obat = $_GET['idobat'];
// }
// dan kemudian masukan kedalan setelah =
   $query_obat= mysqli_query($koneksi, "SELECT* FROM tb_obat WHERE  id_obat=$id_obat");
   //tampilkan data dengan syntac fetch assocs
  $row =  mysqli_fetch_assoc($query_obat);
?>
<!DOCTYPE html>
<html>

<head>
    <title>EDIT Obat</title>
    <style>
    body {
        background-color: black;
        color: white;
    }
    </style>
</head>

<body>
    <center>
        <h1>EDIT OBAT</h1>
        <form action="proses_edit_obat.php" method="post">
            <input type="text" hidden name="idobat" value="<?= $id_obat?>">
            <!-- valuenya akan dipakek buat ngirim id_obat atau mendapat, dan dimana id_obat g bole diedit, maka id_obat dihide, dan input harus ada didalah scop form -->
            <table>
                <tr>
                    <td>Id Supplier</td>
                    <td>
                        <select name="id_supplier" id="">
                            <?php
                                $id_supplier = $row['id_supplier'];//mengambil id_supplier dari variabel $row di line ke12
                                // include "koneksi.php";
                                $query_supplier = mysqli_query($koneksi,"SELECT id_supplier, perusahaan FROM tb_supplier WHERE id_supplier=$id_supplier");
                                $baris_supplier = mysqli_fetch_assoc($query_supplier);

                                $query = "SELECT * FROM tb_supplier";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                                ?>
                            <option <?php 
                                    if ($baris_supplier['id_supplier']==$baris['id_supplier']) {
                                        # dimana id_supplier ini datangnya dari database
                                        # $baris['id_supplier] datang dari dari fetch_assosc di line ke 38
                                        echo "selected";
                                    }
                                ?> value="<?= $baris['id_supplier']; ?>"><?= $baris['perusahaan']; ?>
                            </option>
                            <?php
                                };
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Obat</td>
                    <td>
                        <input type="text" name="nama_obat" value="<?= $row['namaobat'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Kategori Obat</td>
                    <td>
                        <input type="text" name="kategori" value="<?= $row['kategoriobat'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td>
                        <input type="text" name="harga_jual" value="<?= $row['hargajual'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="harga_beli" value="<?= $row['hargabeli'] ?>"></td>
                </tr>
                <tr>
                    <td>Stok Obat</td>
                    <td>
                        <input type="text" name="stok_obat" value="<?= $row['stok_obat'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>
                        <input type="text" name="keterangan" value="<?= $row['keterangan'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Edit Data Obat" href="index.php">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>