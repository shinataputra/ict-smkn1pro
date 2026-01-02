<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Portal ICT | SMKN 1 Probolinggo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>



<body class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center p-4">

    <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-6 bg-white/70 backdrop-blur-xl border border-white/30 rounded-2xl shadow-2xl overflow-hidden">

        <!-- Sisi kiri: Branding -->
        <div class="p-8 text-left flex flex-col justify-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-2">
                ICT-SMKN 1 PROBOLINGGO
            </h1>
            <p class="text-sm uppercase tracking-widest text-yellow-600 font-semibold mb-4">
                Information and Communication Technology
            </p>

            <p class="text-gray-700 leading-relaxed">
                Pusat layanan digital dan sistem informasi sekolah
                untuk administrasi, pembelajaran, dan manajemen data.
            </p>

            <p class="mt-4 text-sm text-gray-500">
                Akses hanya untuk pengguna internal sekolah.
            </p>
        </div>

        <!-- Sisi kanan: Form Login -->
        <div class="p-8 bg-white/80 border-l border-white/30">
            <h2 class="text-xl font-bold text-gray-800 mb-4">
                Login Sistem
            </h2>

            <?php if (!empty($_SESSION['error'])): ?>
                <div class="mb-4 rounded-lg bg-red-100 border border-red-300 px-4 py-2 text-sm text-red-700">
                    <?= $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>



            <form method="post" action="/login-post">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Username
                    </label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Password
                    </label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-lg bg-gradient-to-r from-yellow-400 to-amber-500 text-black font-semibold shadow-md hover:shadow-xl hover:scale-[1.02] transition">
                    🔐 Masuk
                </button>
            </form>

            <p class="mt-4 text-xs text-gray-500 text-center">
                © <?= date('Y') ?> ICT Team — SMKN 1 Probolinggo
            </p>
        </div>

    </div>

</body>

</html>