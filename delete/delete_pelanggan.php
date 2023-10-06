<?php
include "../koneksi.php";
// ini kita ambil methode delet dari view obat line ke 64 dengan nama idobat
//di line syntax ini : 
// <td><a href="delete_obat.php?idobat=<?= $baris['id_obat'];
$Id_Pelanggan = $_GET['idpelanggan'];

//membuat perintah select untuk melihat nama file dari foto yang akan diapus
$For_Foto = mysqli_query($koneksi,"SELECT  buktifotoresep FROM tb_pelanggan WHERE idpelanggan = $Id_Pelanggan");

$baris = mysqli_fetch_assoc($For_Foto);
//menjalankan perintah dari unlink untuk menghapus file gambarnya didalam folder gambar
unlink("../gambar/".$baris['buktifotoresep']);


// buat query untuk delete
$query_delete = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE idpelanggan=$Id_Pelanggan");

if (!$query_delete) {
    # code...
    echo"Gagal Delete Data".mysqli_error($koneksi);
}else{
    header('location:../view/view_pelanggan.php');
    // tujuan : disaat berhasil maka akan kembali ke view obat
}

?>