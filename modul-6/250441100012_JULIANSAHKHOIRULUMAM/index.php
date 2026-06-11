<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
</head>
<body>
    <h2>Form Tambah Data Guru</h2>
    <form action="proses.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <br>
    <a href="tampil_data.php">Lihat Daftar Guru</a>
</body>
</html>