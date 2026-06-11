<?php
// 1. Panggil koneksi
include 'koneksi.php';
// 2. Query untuk mengambil semua data dari tabel guru
$sql = "SELECT * FROM guru";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Guru</title>
<style>
table { border-collapse: collapse; width: 60%; }

th, td { border: 1px solid black; padding: 8px; text-align:left; }

th { background-color: #f2f2f2; }
.aksi a { margin-right: 8px; }
</style>
</head>
<body>
<h2>Daftar Guru</h2>
<a href="index.php">+ Tambah Guru Baru</a><br><br>
<?php if ($result->num_rows > 0): ?>
<table>
    <tr>
<th>ID</th>
<th>Nama</th>
<th>Umur</th>
<th>Aksi</th>
</tr>
<?php
// 3. Looping setiap baris data
while ($row = $result->fetch_assoc()):
?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['nama']; ?></td>
<td><?= $row['umur']; ?></td>
<td class="aksi">
<a href="update.php?id=<?= $row['id'];

?>">Edit</a>

<a href="hapus.php?id=<?= $row['id']; ?>"
onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
<?php else: ?>
<p>Tidak ada data guru.</p>
<?php endif; ?>
<?php $db->close(); ?>
</body>
</html>