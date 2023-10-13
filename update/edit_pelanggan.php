<?php
    include "../koneksi.php";
    $id_pelanggan = $_GET['idpelanggan'];

    $query_pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE idpelanggan =$id_pelanggan");
    $row = mysqli_fetch_assoc($query_pelanggan);
?>
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
    }

    body form table {
        width: 38%;
    }
    body form table tr td {
        font-size: 30px;
    }

    body form table input {
        width: 112%;
        height: 44px;
    }
    </style>
</head>

<body>
    <center>
        <h1>EDIT PELANGGAN</h1>
        <form action="proses_edit_pelanggan.php" method="POST" enctype="multipart/form-data">
            <input type="text" hidden name="idpelanggan" value="<?= $id_pelanggan ?>">
            <table>

                <tr>
                    <td>Nama Lengkap</td>
                    <td>
                        <input type="text" name="namalengkap" id="" value="<?= $row['namalengkap']?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" id="" value="<?= $row['alamat']?>">
                    </td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>
                        <input type="text" name="telephone" id="" value="<?= $row['telp']?>">
                    </td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia" id="" value="<?= $row['usia']?>"></td>
                </tr>
                <tr>
                    <td>Bukti Foto Resep</td>
                    <td>
                        <img src="../gambar/<?= $row['buktifotoresep']?>" width="200px" height="200px" alt="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="file" name="buktifoto" id="" value="<?= $row['buktifotoresep']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan Data Pelanggan">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>