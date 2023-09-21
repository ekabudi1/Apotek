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
    }
    </style>
</head>

<body>
    <center>
        <h1>TAMBAH PELANGGAN</h1>
        <form action="proses_add_pelanggan.php" method="POST" enctype="multipart/form-data">
            <table>

                <tr>
                    <td>Nama Lengkap</td>
                    <td>
                        <input type="text" name="namalengkap" id="">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" id="">
                    </td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>
                        <input type="text" name="telephone" id="">
                    </td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia" id=""></td>
                </tr>
                <tr>
                    <td>Bukti Foto Resep</td>
                    <td>
                        <input type="file" name="buktifoto" id="">
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