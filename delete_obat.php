<?php
include "koneksi.php";
// ini kita ambil methode delet dari viwe obat line ke 44 dengan nama idobat
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