<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_daftar_peserta";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysql_connect_error());
}

?>