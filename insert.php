<?php

require "connection.php";

if (isset($_POST['submit'])) {
    // mengambil data dari form dan membersihkannya dari karakter-karakter yang tidak diperbolehkan
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);

    // memasukkan data ke dalam tabel mahasiswa
    $query = "INSERT INTO mhs (nim, nama, alamat) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "iss", $nim, $nama, $alamat);
    mysqli_stmt_execute($stmt);

    // menutup statement dan koneksi ke database
    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    // redirect ke halaman select.php jika berhasil ditambahkan
    header("Location: select.php");
    exit();
}