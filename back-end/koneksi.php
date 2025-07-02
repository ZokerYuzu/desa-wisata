<?php

$server = "localhost";
$user = "root";
$password = ""; 
$nama_database = "desawisata";

$conn = new mysqli($server, $user, $password, $nama_database);

if( $conn -> connect_error ) {
    die("Gagal terhubung dengan database: " . $conn -> connect_error);
}


?>
