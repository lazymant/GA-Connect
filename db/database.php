<?php
// deklarasi parameter koneksi database 
$server   = "localhost";
$username = "root";
$password = "makan";
$database = "db_permintaan";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>