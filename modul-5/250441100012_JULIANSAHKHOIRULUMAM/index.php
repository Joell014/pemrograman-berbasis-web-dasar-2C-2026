<?php
// echo "Hello, World!";
// echo "<br>";

// $nama = "John Doe";
// echo "Nama saya adalah $nama.";
$nama = $_GET['nama']??'';
$nim = $_GET['nim']??'';
$nilai = $_GET['nilai']??'';

echo "halo nama saya $nama";
echo "<br>"; 
echo "halo nim saya $nim";
echo "<br>";
echo "halo nilai saya $nilai";
echo "<br>";


if($nilai >= 85 and $nilai <=100)
    {$nilai = "A";}
else if($nilai >= 70 and $nilai <85)
    {$nilai = "B";}
else if($nilai >= 60 and $nilai <70)
    {$nilai = "C";}
else if($nilai >= 50 and $nilai <60)
    {$nilai = "D";}
else
    {$nilai = "E";}

if($nama !== "" and $nim !== "" and $nilai !== "")
    {echo "nilai kamu  : $nilai";}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 5</title>
</head>
<body>
    <form method="Get">
        <label for="nama">Nama :</label>
        <input type="text" placeholder="nama" name="nama"><br>
        <label for="nim">Nim :</label>
        <input type="text" placeholder="25****" name="nim"><br>
        <label for="nilai">nilai :</label>
        <input type="number" placeholder="90" name="nilai"><br>
        <button type="submit">kirim</button>
    </form>

    <!-- <h1>
        halo nama saya adalah <?=$nama?>
    </h1> -->
</body>
</html>


