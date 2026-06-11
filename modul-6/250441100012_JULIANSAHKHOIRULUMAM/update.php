<?php
include 'koneksi.php';
// === BAGIAN 1: Saat form di-submit (POST) ===
if (isset($_POST['update'])) {
$id = (int) $_POST['id'];
$nama = $_POST['nama'];
$umur = (int) $_POST['umur'];
$sql = "UPDATE guru SET nama='$nama', umur='$umur' WHERE
id='$id'";
if ($db->query($sql) === TRUE) {
echo "<h3>Berhasil!</h3>";
echo "Data guru dengan ID $id berhasil diperbarui.";
echo "<br><a href='tampil_data.php'>Lihat Daftar</a>";
} else {
echo "Gagal memperbarui: " . $db->error;
}
$db->close();
exit; // hentikan eksekusi, jangan lanjut ke form di bawah}
// === BAGIAN 2: Saat dibuka via GET (tampilkan form pre-filled) ===
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan!");
}
$id = (int) $_GET['id'];
$sql = "SELECT * FROM guru WHERE id='$id'";
$result = $db->query($sql);
if ($result->num_rows == 0) {
die("Data tidak ditemukan!");
} $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head><title>Edit Data Guru</title></head>
<body>
    <h2>Edit Data Guru</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'];
        ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama'];
        ?>" required><br><br>
        <label>Umur:</label><br>
        <input type="number" name="umur" value="<?=
        $row['umur']; ?>" required><br><br>
        <button type="submit" name="update">Simpan
        Perubahan</button>
        <a href="tampil_data.php">Batal</a>
    </form>
</body>
</html>




