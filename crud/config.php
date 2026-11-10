<?php

//host
$databaseHost = 'localhost';

//Nama database
$databaseName = 'simrs';

//Username
$databaseUsername = 'root';

//Password mysql
$databasePassword = '';

//Koneksi database
$mysqli = mysqli_connect(
    $databaseHost,
    $databaseUsername,
    $databasePassword,
    $databaseName
);

//Cek koneksi
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>