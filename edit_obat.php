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
</head>

<body>
    <center>
        <h1>EDIT OBAT</h1>
        <form action="proses_add_obat.php" method="post">
            <table>
                <tr>
                    <td>Id Supplier</td>
                    <td>
                        <!-- <select name="id_supplier" id="">
                            <?php
                                include "koneksi.php";
                                $query = "SELECT * FROM tb_supplier";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                                ?>
                            <option value="<?php echo $baris['id_supplier']; ?>"><?php echo $baris['perusahaan']; ?>
                            </option>

                            <?php
                                
                                };
                                var_dump($data);
                            ?>
                        </select> -->
                        <select name="id_supplier" id="">
                            <?php
                                include "koneksi.php";
                                $query = "SELECT * FROM tb_supplier";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                                ?>
                            <option value="<?= $baris['id_supplier']; ?>"><?= $baris['perusahaan']; ?></option>
                            <?php
                                
                                };
                                var_dump($data);
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
                        <input type="submit" value="Simpan Data Obat" href="index.php">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>