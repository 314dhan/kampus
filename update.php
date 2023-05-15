<?php

require "connection.php";
$sql = "UPDATE mhs SET
        nim = '11111',
        nama = 'cikoni',
        alamat = 'serang' 
        WHERE
        nim = '11111'";

$update = $connection->query($sql);

if($update == true){
    echo "Data berhasil diupdate";
    header("select.php");
}else{
    echo "Data gagal diupdate";
}