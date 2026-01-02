<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard ICT | SMKN 1 Probolinggo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-300">

    <!-- ================= TOPBAR ================= -->
    <header class="sticky top-0 z-30 backdrop-blur-xl bg-white/70 border-b border-white/30 shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div>
                <h1 class="text-xl font-extrabold text-gray-800">Portal ICT</h1>
                <p class="text-sm text-gray-500">SMKN 1 Probolinggo</p>
            </div>

            <div class="flex items-center gap-6">
                <div id="clock" class="font-mono text-gray-700"></div>

                <div class="text-right">
                    <p class="text-xs text-gray-500">Login sebagai</p>
                    <p class="font-semibold text-gray-800">
                        <?= htmlspecialchars($_SESSION['user']['name']) ?>
                    </p>
                </div>

                <a href="/logout"
                    class="px-4 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white text-sm font-semibold shadow">
                    Logout
                </a>
            </div>
        </div>
    </header>

    <!-- ================= MAIN ================= -->
    <main class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-5 gap-6">

        <!-- ============ SIDEBAR ============ -->
        <aside class="lg:col-span-1 bg-white/70 backdrop-blur-xl border border-white/30 rounded-xl p-5 shadow h-fit">
            <h3 class="text-sm font-bold text-gray-700 mb-4 uppercase tracking-wide">
                Navigasi
            </h3>

            <ul class="space-y-2 text-sm" id="menu">
                <li>
                    <button data-target="dashboard"
                        class="menu-btn w-full text-left px-3 py-2 rounded-lg bg-yellow-100 text-yellow-700 font-semibold">
                        🏠 Dashboard
                    </button>
                </li>
                <li>
                    <button data-target="users"
                        class="menu-btn w-full text-left px-3 py-2 rounded-lg bg-gray-100 hover:bg-yellow-100">
                        👥 Manajemen User
                    </button>
                </li>
                <li>
                    <button data-target="settings"
                        class="menu-btn w-full text-left px-3 py-2 rounded-lg bg-gray-100 hover:bg-yellow-100">
                        ⚙️ Pengaturan
                    </button>
                </li>
            </ul>
        </aside>


        <!-- ============ CONTENT ============ -->
        <section class="lg:col-span-4">

            <!-- DASHBOARD -->
            <div id="dashboard" class="content-section space-y-6">
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 uppercase tracking-wide">
                        Layanan Akademik
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

                        <!-- CARD -->
                        <div class="bg-white/80 rounded-xl p-6 shadow hover:shadow-xl transition">
                            <h2 class="text-lg font-semibold text-gray-800">eRapor SMK 2025</h2>
                            <p class="text-sm text-gray-600 mt-1">
                                Sistem utama pengolahan nilai & rapor
                            </p>

                            <div class="flex justify-between items-center mt-4 text-xs">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700">Aktif</span>
                                <span class="text-gray-500">Admin / Guru</span>
                            </div>

                            <a href="http://36.92.104.129:3154/" target="_blank"
                                class="block mt-4 text-center px-4 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 font-semibold">
                                Buka Aplikasi
                            </a>
                        </div>

                        <!-- CARD -->
                        <div class="bg-white/80 rounded-xl p-6 shadow hover:shadow-xl transition">
                            <h2 class="text-lg font-semibold text-gray-800">eRapor Lama</h2>
                            <p class="text-sm text-gray-600 mt-1">
                                Arsip nilai & rapor sebelumnya
                            </p>

                            <div class="flex justify-between items-center mt-4 text-xs">
                                <span class="px-2 py-1 rounded bg-gray-200 text-gray-700">Arsip</span>
                                <span class="text-gray-500">Admin</span>
                            </div>

                            <a href="http://36.92.104.129:8154/" target="_blank"
                                class="block mt-4 text-center px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400 font-semibold">
                                Buka Aplikasi
                            </a>
                        </div>

                    </div>
                </div>

                <!-- ===== SISTEM NASIONAL ===== -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 uppercase tracking-wide">
                        Data & Sistem Nasional
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        <div class="bg-white/80 rounded-xl p-6 shadow hover:shadow-xl transition">
                            <h2 class="text-lg font-semibold text-gray-800">Dapodik</h2>
                            <p class="text-sm text-gray-600 mt-1">
                                Data pokok pendidikan nasional
                            </p>

                            <div class="flex justify-between items-center mt-4 text-xs">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700">Online</span>
                                <span class="text-gray-500">Admin</span>
                            </div>

                            <a href="http://36.92.104.129:5774/" target="_blank"
                                class="block mt-4 text-center px-4 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 font-semibold">
                                Buka Aplikasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MANAJEMEN USER (DUMMY) -->
            <div id="users" class="content-section hidden space-y-6">

                <div>
                    <h2 class="text-xl font-bold text-gray-800">Manajemen User</h2>
                    <p class="text-sm text-gray-500">Kelola akun & hak akses pengguna</p>
                </div>

                <div class="bg-white/80 rounded-xl p-6 shadow">
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                        <li>Tambah user</li>
                        <li>Edit role</li>
                        <li>Aktif / Nonaktif akun</li>
                    </ul>
                </div>

            </div>


            <!-- SETTINGS (DUMMY) -->
            <div id="settings" class="content-section hidden space-y-6">

                <div>
                    <h2 class="text-xl font-bold text-gray-800">Pengaturan Sistem</h2>
                    <p class="text-sm text-gray-500">Konfigurasi portal & preferensi</p>
                </div>

                <div class="bg-white/80 rounded-xl p-6 shadow">
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                        <li>Nama sekolah</li>
                        <li>Tema tampilan</li>
                        <li>Hak akses</li>
                    </ul>
                </div>

            </div>


        </section>
    </main>

    <!-- CLOCK -->
    <script>
        function updateClock() {
            const n = new Date();
            document.getElementById("clock").textContent =
                n.getHours().toString().padStart(2, '0') + ":" +
                n.getMinutes().toString().padStart(2, '0') + ":" +
                n.getSeconds().toString().padStart(2, '0');
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>

    <!--MENU INTERACTION -->
    <script>
        const buttons = document.querySelectorAll('.menu-btn');
        const sections = document.querySelectorAll('.content-section');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.target;

                // reset section
                sections.forEach(sec => sec.classList.add('hidden'));
                document.getElementById(target).classList.remove('hidden');

                // reset menu style
                buttons.forEach(b => {
                    b.classList.remove('bg-yellow-100', 'text-yellow-700', 'font-semibold');
                    b.classList.add('bg-gray-100');
                });

                // active menu
                btn.classList.remove('bg-gray-100');
                btn.classList.add('bg-yellow-100', 'text-yellow-700', 'font-semibold');
            });
        });
    </script>


</body>

</html>