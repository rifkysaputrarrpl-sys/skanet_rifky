<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_folder = basename(dirname($_SERVER['PHP_SELF']));
?>
<nav class="bg-red-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center gap-2">
                <span class="text-white font-bold text-xl">Schools Of 48</span>
            </div>

            <div class="flex gap-1">
                <a href="/skanet_rifky/index.php"
                    class="text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition <?= $current_page == 'index.php' && $current_folder == 'skanet_raffi' ? 'bg-red-900' : '' ?>">
                    Dashboard
                </a>
                <a href="/skanet_rifky/siswa/index.php"
                    class="text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition <?= $current_folder == 'siswa' ? 'bg-red-900' : '' ?>">
                    Siswa
                </a>
                <a href="/skanet_rifky/guru/index.php"
                    class="text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition <?= $current_folder == 'guru' ? 'bg-red-900' : '' ?>">
                    Guru
                </a>
                <a href="/skanet_rifky/nilai/index.php"
                    class="text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition <?= $current_folder == 'nilai' ? 'bg-red-900' : '' ?>">
                    Nilai
                </a>
                <a href="/skanet_rifky/mapel/index.php"
                    class="text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition <?= $current_folder == 'mapel' ? 'bg-red-900' : '' ?>">
                    Mata Pelajaran
                </a>
                <a href="/skanet_rifky/logout.php"
                    class="bg-gray-900 text-white px-4 py-2 rounded-lg font-semibold hover:bg-black transition">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>