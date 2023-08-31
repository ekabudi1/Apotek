<?php
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database_name = "db_apotek";
    // $koneksi = mysqli_connect($host,$username,$password,$database_name);
    
    $koneksi = mysqli_connect("localhost","root","","apotek");

    if(!$koneksi){
        die ("Koneksi ke Database Gagal ".mysqli_connect_error());
    }
    else{
        echo "Koneksi Berhasil";
    }
?>