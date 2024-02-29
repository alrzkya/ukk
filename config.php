<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kasir_04";

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if (!$koneksi){
    echo "Koneksi Gagal";
}
