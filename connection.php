<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "aka";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_errno) {
    echo "koneksi gagal karena " . $connection->connect_error;
}