<?php

include "../koneksi.php";
$IdPelanggan = ['idpelanggan'];
$NamaLengkap = $_POST['namalengkap'];
$Alamat = $_POST['alamat'];
$Telephone = $_POST['telephone'];
$Usia = $_POST['usia'];
$BuktiFoto = $_FILES['buktifoto']['name'];

move_uploaded_file($_FILES['buktifoto']['tmp_name'],"../gambar/".$_FILES['buktifoto']['name']);
$query = mysqli_query($koneksi, "UPDATE tb_pelanggan SET  namalengkap='$NamaLengkap',alamat='$Alamat',tlp='$Telephone',usia='$Usia',buktofotoresep='$BuktiFoto' WHERE idpelanggan='$idpelanggan = $IdPelanggan'");

// pengkondisian jika salah input atau error
if (!$query) { 
    echo "Gagal update data baru pelanggan". mysqli_error($koneksi);
}else{

    // redirerect dengan bahasa php 
    header('Location:../view/view_pelanggan.php');
    exit;
}