<!DOCTYPE html>
<html>

<head>
    <title>Formulir Obat</title>
    <!-- <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1 {
        margin-bottom: 20px;
    }

    #all {
        width: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #title {
        color: #FF6347;
    }

    #form {
        width: 50%;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: #DCDCDC;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-family: 'Poppins';
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 95%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    textarea {
        resize: vertical;
    }

    input[type="submit"] {
        background-color: #FF6347;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    </style> -->
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
                                include "koneksi.php";
                                $query = "SELECT * FROM tb_supplier";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                                ?>
                            <option value="<?php echo $baris['idsupplier']; ?>"><?php echo $baris['perusahaan']; ?>
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