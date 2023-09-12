<?php
include "koneksi.php";
// ini kita ambil methode delet dari view obat line ke 64 dengan nama idobat
//di line syntax ini : 
// <td><a href="delete_obat.php?idobat=<?= $baris['id_obat'];
$id_obat = $_GET['idobat'];
// buat query untuk delete
$query_delete = mysqli_query($koneksi, "DELETE FROM tb_obat WHERE id_obat=$id_obat");

if (!$query_delete) {
    # code...
    echo"Gagal Delete Data".mysqli_error($koneksi);
}else{
    header('location:view_obat.php');
    // tujuan : disaat berhasil maka akan kembali ke view obat
}

?>