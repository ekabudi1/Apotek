<?php 
include "koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user' AND password='$pass'");
$baris_level = mysqli_fetch_assoc($query);
$cek = mysqli_num_rows($query);

if ($cek > 0){
    
    // value , 1 adalah name , isi
    setcookie('username',$user,time()+(60*60*24*7),'/');
    setcookie('level',$baris_level['leveluser'],time()+(60*60*24*7),'/');
    echo"<script>alert ('Berhasil Login');window.location.href='view/view_pelanggan.php'</script>";

} else {
    echo"<script>alert('Gagal Login');window.location.href='login.php'</script>";
    # code...
}

?>