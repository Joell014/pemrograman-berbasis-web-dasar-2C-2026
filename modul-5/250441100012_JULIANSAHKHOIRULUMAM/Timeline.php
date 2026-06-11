<?php
$timeline = [
    ["tahun" => "2011", "kegiatan" => "Sekolah Dijenjang SD"],
    ["tahun" => "2019", "kegiatan" => "Sekolah Dijenjang SLTP"],
    ["tahun" => "2022", "kegiatan" => "Sekolah Dijenjang SLTA"],
    ["tahun" => "2025", "kegiatan" => "Sekolah Dijenjang Perguruan"],
    ["tahun" => "2026", "kegiatan" => "Belajar Pemrograman"]
];

function highlight($tahun){
    if($tahun == "2025"){
        return "bg-yellow-200 font-bold";
    }
    return "";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Timeline Developer</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="w-full px-6 md:px-10 lg:px-20 py-10">

    <!-- JUDUL -->
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-blue-700">
            Timeline Perjalanan Belajar Coding
        </h1>
    </div>

    <!-- BOX UTAMA -->
    <div class="bg-white p-6 rounded-xl shadow">

        <h2 class="text-xl font-bold text-blue-600 mb-6 text-center">
            Timeline Belajar
        </h2>

        <!-- TIMELINE -->
        <div class="border-l-4 border-blue-500 pl-4 space-y-6">

            <?php foreach($timeline as $data){ ?>
                <div class="p-3 rounded <?php echo highlight($data['tahun']); ?>">
                    <p class="text-sm text-gray-500"><?php echo $data['tahun']; ?></p>
                    <p class="font-semibold"><?php echo $data['kegiatan']; ?></p>
                </div>
            <?php } ?>

        </div>

        <!-- NAVIGASI -->
        <div class="mt-6 flex justify-between">
            <a href="Profil.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Kembali ke Profil
            </a>

            <a href="Blog.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Ke Blog
            </a>
        </div>

    </div>

</div>

</body>
</html>