<!DOCTYPE html>
<html>

<head>
    <title>Formulir Obat</title>
    <style>
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

    body form table {
        width: 38%;
        /* height: 50rem; */
    }

    /* body form table tr {
        width: 100px;
    } */

    body form table tr td {
        font-size: 30px;
        /* width: 50%;
        height: 150px; */
    }

    body form table input {
        width: 112%;
        height: 44px;
        /* background-color: blue; */
    }
    </style>
</head>

<body>
    <center>
        <h1>TAMBAH OBAT</h1>
        <form action="proses_add_obat.php" method="post">
            <table>
                <tr>
                    <td>Id Supplier</td>
                    <td>
                        <!-- <select name="id_supplier" id="">
                            <?php
                                include "../koneksi.php";
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
                                include "../koneksi.php";
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
                        <input type="text" name="nama_obat" id="">
                    </td>
                </tr>
                <tr>
                    <td>Kategori Obat</td>
                    <td>
                        <input type="text" name="kategori" id="">
                    </td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td>
                        <input type="text" name="harga_jual" id="">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="harga_beli" id=""></td>
                </tr>
                <tr>
                    <td>Stok Obat</td>
                    <td>
                        <input type="text" name="stok_obat" id="">
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>
                        <input type="text" name="keterangan" id="">
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