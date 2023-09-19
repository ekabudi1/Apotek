<!-- pada di file ini mirip dengan proses add obat -->

<?php


include "../koneksi.php";
$idobat = $_POST['idobat'];
//idobat diambil dari file edit_obat.php di line 31 di input type text untuk id_obat
$IdSupplier = $_POST['id_supplier'];
$NamaObat = $_POST['nama_obat'];
$KategoriObat = $_POST['kategori'];
$HargaJual = $_POST['harga_jual'];
$HargaBeli = $_POST['harga_beli'];
$StokObat = $_POST['stok_obat'];
$Keterangan = $_POST['keterangan'];


// untuk yang merah kayak id_supplier dan yang lainnya yang dedepan tanda sama dengan '=' yang ada didatabase
$query = mysqli_query($koneksi, "UPDATE tb_obat SET  id_supplier='$IdSupplier',namaobat='$NamaObat',kategoriobat='$KategoriObat',hargajual='$HargaJual',hargabeli='$HargaBeli',stok_obat='$StokObat',keterangan='$Keterangan' WHERE id_obat='$idobat'");

// pengkondisian jika salah input atau error
if (!$query) {
    # code...
    echo "Gagal Mengedit Data Obat". mysqli_error($koneksi);
}else{

    // redirerect dengan bahasa php 
    header('Location:../view/view_obat.php');
    exit;

    //redirect dengan bahasa javascript
    // echo"<script>location.href='view_obat.php';</script>";
}