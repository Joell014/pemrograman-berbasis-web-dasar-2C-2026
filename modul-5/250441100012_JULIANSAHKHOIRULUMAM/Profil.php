<?php
function tampilData($framework, $tools, $minat, $skill, $pengalaman){

    echo "<div class='w-full mt-6 bg-white p-6 rounded-xl shadow'>";

    echo "<h2 class='text-xl font-bold text-blue-600 mb-4'>
    Hasil Data Developer
    </h2>";

    echo "<table class='w-full border border-gray-300'>";
    echo "<tr class='border'><td class='p-2 font-semibold'>Framework</td><td class='p-2'>".implode(", ", $framework)."</td></tr>";
    echo "<tr class='border'><td class='p-2 font-semibold'>Tools</td><td class='p-2'>".implode(", ", $tools)."</td></tr>";
    echo "<tr class='border'><td class='p-2 font-semibold'>Minat</td><td class='p-2'>".htmlspecialchars($minat)."</td></tr>";
    echo "<tr class='border'><td class='p-2 font-semibold'>Skill</td><td class='p-2'>".htmlspecialchars($skill)."</td></tr>";
    echo "</table>";

    echo "<p class='mt-4 whitespace-pre-line break-words'>
    <b>Pengalaman:</b><br>".htmlspecialchars($pengalaman)."
    </p>";

    // tambahan logika
    if(count($framework) > 2){
        echo "<p class='text-green-600 font-semibold mt-2'>
        Skill Anda cukup luas di bidang development!
        </p>";
    }

    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="w-full px-6 mt-10">
    <div class="grid md:grid-cols-2 gap-6">

        <!-- PROFIL -->
        <div class="bg-white p-6 rounded-xl shadow text-center">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">
                Profil Developer
            </h2>

            <div class="flex justify-center mb-4">
                <img src="saya.png" class="w-32 h-32 object-cover shadow-md">
            </div>

            <table class="w-full border border-gray-300 text-sm">
                <tr class="border"><td class="p-2 font-semibold">Nama</td><td class="p-2">Juliansah Khoirul Umam</td></tr>
                <tr class="border"><td class="p-2 font-semibold">NIM</td><td class="p-2">250441100012</td></tr>
                <tr class="border"><td class="p-2 font-semibold">TTL</td><td class="p-2">19-07-2006</td></tr>
                <tr class="border"><td class="p-2 font-semibold">Asal</td><td class="p-2">Tuban</td></tr>
                <tr class="border"><td class="p-2 font-semibold">Jurusan</td><td class="p-2">Teknik Informatika</td></tr>
                <tr class="border"><td class="p-2 font-semibold">Prodi</td><td class="p-2">Sistem Informasi</td></tr>
                <tr class="border"><td class="p-2 font-semibold">Semester</td><td class="p-2">2</td></tr>
            </table>
        </div>

        <!-- FORM -->
        <form method="post" class="bg-white p-6 rounded-xl shadow space-y-4">
            <h2 class="text-2xl font-bold text-center text-blue-600">
                Form Developer
            </h2>

            <!-- FRAMEWORK -->
            <input type="text" name="framework" 
            placeholder="Framework (pisahkan dengan koma)"
            class="w-full border p-2 rounded">

            <!-- TOOLS -->
            <div>
                <label class="font-semibold">Tools:</label>
                <div class="flex flex-wrap gap-3 mt-1">
                    <label><input type="checkbox" name="tools[]" value="VS Code"> VS Code</label>
                    <label><input type="checkbox" name="tools[]" value="GitHub"> GitHub</label>
                    <label><input type="checkbox" name="tools[]" value="Figma"> Figma</label>
                    <label><input type="checkbox" name="tools[]" value="Postman"> Postman</label>
                </div>
            </div>

            <!-- MINAT -->
            <div>
                <label class="font-semibold">Minat:</label>
                <div class="flex gap-4 mt-1">
                    <label><input type="radio" name="minat" value="Frontend"> Frontend</label>
                    <label><input type="radio" name="minat" value="Backend"> Backend</label>
                    <label><input type="radio" name="minat" value="Fullstack"> Fullstack</label>
                </div>
            </div>

            <!-- SKILL -->
            <select name="skill" class="w-full border p-2 rounded">
                <option value="">Pilih Skill</option>
                <option>Dasar</option>
                <option>Cukup</option>
                <option>Profesional</option>
            </select>

            <!-- PENGALAMAN -->
            <textarea name="pengalaman" placeholder="Pengalaman membuat aplikasi"
            class="w-full border p-2 rounded h-32"></textarea>

            <button class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">
                Kirim Data
            </button>
        </form>

    </div>

    <!-- OUTPUT -->
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['framework']) || empty($_POST['minat']) || empty($_POST['skill'])){
            echo "<p class='text-center text-red-600 mt-4'>Data wajib diisi!</p>";
        } else {

            $framework = array_map('trim', explode(",", $_POST['framework']));
            $tools = isset($_POST['tools']) ? $_POST['tools'] : [];

            tampilData(
                $framework,
                $tools,
                $_POST['minat'],
                $_POST['skill'],
                $_POST['pengalaman'] ?? ''
            );
        }
    }
    ?>

    <!-- NAV -->
    <div class="mt-6 flex justify-between">
        <a href="Timeline.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Ke Timeline
        </a>
        <a href="Blog.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Ke Blog
        </a>
    </div>

</div>

</body>
</html>