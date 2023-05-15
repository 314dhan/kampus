<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form method="POST" action="insert.php">
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>