<?php

include "../koneksi.php";

$NamaLengkap = $_POST['namalengkap'];
$Alamat = $_POST['alamat'];
$Telephone = $_POST['telephone'];
$Usia = $_POST['usia'];
$BuktiFoto = $_FILES['buktifoto']['name'];

move_uploaded_file($_FILES['buktifoto']['tmp_name'],"../gambar/".$_FILES['buktifoto']['name']);
$query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES (NULL, '$NamaLengkap','$Alamat','$Telephone','$Usia','$BuktiFoto')");

// pengkondisian jika salah input atau error
if (!$query) { 
    echo "Gagal memasukan data obat". mysqli_error($koneksi);
}else{

    // redirerect dengan bahasa php 
    header('Location:../view/view_pelanggan.php');
    exit;
}