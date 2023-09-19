<?php
//terima datanya dulu dengan method post
// $IdObat = $_POST['id_obat'];
//untuk id obat karena outo increwment maka tidak perlu ditulis

include "../koneksi.php";

$IdSupplier = $_POST['id_supplier'];
$NamaObat = $_POST['nama_obat'];
$KategoriObat = $_POST['kategori'];
$HargaJual = $_POST['harga_jual'];
$HargaBeli = $_POST['harga_beli'];
$StokObat = $_POST['stok_obat'];
$Keterangan = $_POST['keterangan'];



//methodenya harus sama dengan method didalam index.php
//nantinya kolom didalam penambahan data didalam index.php harus sama dengan yang ada didalam tanda petik
// didalam petik harus sama dengan yang ada di index.php 

//kemudian masukan sytax insert into kedalam php agar bisa ,menambahkan data
// $query = mysqli_query($koneksi, "INSERT INTO tb_obat VALUES (NULL,'$IdSupplier','$NamaObat',' $KategoriObat','$HargaJual','$HargaBeli ','$StokObat',' $Keterangan ')") ;
$query = mysqli_query($koneksi, "INSERT INTO tb_obat VALUES (NULL, '$IdSupplier','$NamaObat','$KategoriObat','$HargaJual','$HargaBeli','$StokObat','$Keterangan')");

// pengkondisian jika salah input atau error
if (!$query) {
    # code...
    echo "Gagal memasukan data obat". mysqli_error($koneksi);
}else{

    // redirerect dengan bahasa php 
    header('Location:../view/view_obat.php');
    exit;

    //redirect dengan bahasa javascript
    // echo"<script>location.href='view_obat.php';</script>";
}