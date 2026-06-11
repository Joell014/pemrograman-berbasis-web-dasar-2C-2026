<?php

// DATA ARTIKEL 
$artikel = [
    [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "2024-01-10",
        "isi" => "Pertama kali belajar HTML terasa sulit, namun dengan latihan saya mulai memahami struktur dasar website.Pembelajaran HTML (HyperText Markup Language) merupakan langkah fondasi paling krusial bagi pemula yang ingin terjun ke dunia pengembangan web, karena bahasa markup ini berfungsi sebagai kerangka dasar untuk 
        menyusun struktur konten seperti heading, paragraf, dan link. Melalui pemahaman tag dasar, 
        terutama penggunaan tag <p> untuk paragraf, pengguna dapat menyusun teks secara terstruktur dan rapi yang secara otomatis dipisahkan oleh browser",
        "gambar" => "https://i.ytimg.com/vi/U7ob2W_NCek/hq720.jpg"
    ],
    [
        "judul" => "Belajar CSS",
        "tanggal" => "2024-03-15",
        "isi" => "CSS membantu memperindah tampilan website agar lebih menarik dan responsif.
        Pembelajaran Cascading Style Sheets (CSS) merupakan tahapan krusial bagi siapa saja yang ingin mendalami pengembangan web front-end, 
        karena bahasa ini berfungsi untuk mempercantik dan mengatur tata letak halaman yang telah dibangun dengan HTML. Melalui CSS, pemula akan mempelajari cara memisahkan struktur konten dari tampilan visual, memungkinkan pengaturan warna, tipografi, 
        serta elemen tata letak seperti Flexbox dan Grid agar website terlihat rapi dan responsif di berbagai perangkat. Dengan menguasai konsep dasar seperti selector, class, property, dan value, 
        pembelajaran CSS memungkinkan kita mengubah kerangka HTML yang polos menjadi antarmuka pengguna yang menarik, interaktif, dan profesional.Tutorial CSS Layout (Bahasa Indonesia)28 Mar 2024 — Halo teman-teman selamat datang di kelas CSS ya Nah ini adalah kelas CSS lanjutan ya dari sebelumnya kita sudah bahas tentang CSS ...4mYouTube·Programmer Zaman NowPanduan Dasar HTML dan CSS Membangun Dunia Digitalmu ...2 Okt 2024 — CSS (Cascading Style Sheets) berfungsi untuk mempercantik tampilan halaman web yang telah dibuat dengan HTML. Jika HTML adalah ker...Telkom UniversityDasar Penggunaan CSS - Dicoding Blog19 Nov 2022 — CSS merupakan salah satu bahasa yang penting untuk pembuatan website. 
        Dasar konsep CSS ini yang menjadi modal seorang front end de...DicodingTampilkan semua   ",
        "gambar" => "https://www.jagoanhosting.com/blog/wp-content/uploads/2024/03/Belajar-CSS-Cover.png"
    ],
    [
        "judul" => "Menghadapi Error",
        "tanggal" => "2024-05-01",
        "isi" => "Error pertama membuat saya bingung, tetapi dari situ saya belajar cara debugging. 
        Kesalahan dalam proses pembelajaran sering kali dipandang sebagai kegagalan, padahal sebenarnya merupakan komponen krusial yang menandai adanya upaya pemahaman konsep yang lebih dalam. Saat siswa melakukan error, seperti kesulitan memahami topik kompleks atau salah dalam menerapkan rumus, 
        itu menunjukkan bahwa otak mereka sedang aktif memproses informasi dan menantang keterbatasan kognitif mereka. Daripada menganggap kesalahan sebagai akhir dari proses, error seharusnya dianalisis sebagai umpan balik berharga yang menunjukkan bagian mana yang perlu diperbaiki dan dipelajari kembali. Dengan pendekatan yang tepat, kesalahan yang dilakukan siswa atau bahkan guru—seperti ketidakcocokan metode pengajaran—justru menjadi peluang untuk melakukan penyesuaian strategi, yang pada akhirnya akan memperkuat retensi memori dan pemahaman materi secara permanen.
        7 Contoh Problematika Pembelajaran dalam Kelas - Kejarpena12 Jun 2023 — Dalam artikel ini, kami akan membahas 7 contoh problematika pembelajaran dalam kelas yang sering dihadapi oleh para guru dan siswa...KejarpenaKekuatan Belajar dari Kesalahan - EdutopiaDiterjemahkan —
        Belajar dari kesalahan memungkinkan siswa untuk mengatasi tantangan yang muncul dan memandang masalah sebagai peluang ",
        "gambar" => "https://herza.id/wp-content/uploads/2023/12/error-506.jpg"
    ]
];

// MOTIVASI
$motivasi = [
    "Jangan takut error, karena error adalah guru terbaik.",
    "Coding itu soal latihan, bukan bakat.",
    "Terus belajar walaupun pelan.",
    "Setiap expert pernah jadi pemula."
];

$kutipan = $motivasi[array_rand($motivasi)];
$index = isset($_GET['id']) ? $_GET['id'] : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="w-full px-6 mt-10">

    <!-- JUDUL -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-blue-700">
            Blog Reflektif Developer
        </h1>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="w-full bg-white p-8 rounded-xl shadow">

        <h2 class="text-2xl font-bold text-blue-600 mb-6">
            Daftar Artikel
        </h2>

        <!-- LIST -->
        <ul class="list-disc ml-6 mb-6 text-lg">
            <?php foreach($artikel as $key => $data){ ?>
                <li>
                    <a href="?id=<?php echo $key; ?>" class="text-blue-600 hover:underline">
                        <?php echo $data['judul']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <!-- DETAIL -->
        <?php if($index !== null && isset($artikel[$index])){ 
            $data = $artikel[$index];
        ?>
        <div class="border-t pt-6">

            <h3 class="text-3xl font-bold mb-2">
                <?php echo $data['judul']; ?>
            </h3>

            <p class="text-sm text-gray-500 mb-4">
                <?php echo $data['tanggal']; ?>
            </p>

            <img src="<?php echo $data['gambar']; ?>" 
                 class="w-full h-64 object-cover rounded mb-4">

            <p class="mb-4 whitespace-pre-line break-words">
                <?php echo $data['isi']; ?>
            </p>

            <!-- KUTIPAN -->
            <p class="italic text-green-600 mb-4">
                "<?php echo $kutipan; ?>"
            </p>

            <!-- LINK -->
            <a href="https://www.w3schools.com" target="_blank" 
               class="text-blue-500 underline">
                Referensi Belajar
            </a>

            <!-- NAV ARTIKEL -->
            <div class="flex justify-between mt-6">
                <?php if($index > 0){ ?>
                    <a href="?id=<?php echo $index-1; ?>" 
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Sebelumnya
                    </a>
                <?php } ?>

                <?php if($index < count($artikel)-1){ ?>
                    <a href="?id=<?php echo $index+1; ?>" 
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Selanjutnya
                    </a>
                <?php } ?>
            </div>

        </div>
        <?php } ?>

        <!-- NAV HALAMAN -->
        <div class="mt-8 flex justify-between">
            <a href="Timeline.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Kembali ke Timeline
            </a>

            <a href="Profil.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Ke Profil
            </a>
        </div>

    </div>
</div>

</body>
</html>