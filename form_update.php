<?php

require "connection.php";

$sql = "SELECT * FROM mhs WHERE nim='11111'";
$exec = $connection->query($sql);
$data = $exec->fetch_object();
?>

<h1>Form Update Mahasiswa</h1>
    <style>input{display: block;}</style>
    <form method="POST" action="insert.php">
        <input type="hidden" name="nim" required value="<?=$data->nim?>"><br>
        <label>Nama:</label>
        <input type="text" name="nama" required value="<?=$data->nama?>"><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required value="<?=$data->alamat?>"><br>
        <input type="submit" name="submit" value="Simpan">
    </form>    