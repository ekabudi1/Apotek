<?php 
include "koneksi.php";
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user' AND password='$pass'");
$query_leveluser = mysqli_fetch_assoc($login);
$cek = mysqli_num_rows($login);


if ($cek > 0){
    $_SESSION['username'] = $user;
    $_SESSION['level_user'] = $query_lvluser['leveluser'];
    // echo"<script>alert ('Berhasil Login');window.location.href='view/view_obat.php'</script>";
    header('Location:view/view_obat.php');

} else {
    echo"<script>alert('Gagal Login');window.location.href='login.php'</script>";
    # code...
}

?>