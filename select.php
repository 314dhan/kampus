<?php
require_once "connection.php";

$sql = "SELECT * FROM mhs";
$exec = $connection->query($sql);

echo "<a href='form_insert.php'>tambah data</a>";

if ($exec->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>";
    while($data = $exec->fetch_object()){
        echo "<tr>";
        echo "<td>" . $data->nim . "</td>";
        echo "<td>" . $data->nama . "</td>";
        echo "<td>" . $data->alamat . "</td>";
        echo "<tr>";
    }
    echo "</table>";
}