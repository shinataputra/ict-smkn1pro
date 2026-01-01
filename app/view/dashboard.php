<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>ICT SMKN 1 Probolinggo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-300 p-4">

<div class="backdrop-blur-xl bg-white/60 border border-white/30 shadow-2xl rounded-2xl p-6 max-w-5xl w-full">

  <div class="text-center mb-8">
    <h1 class="text-3xl font-extrabold text-gray-800">Selamat Datang 🎉</h1>
    <p class="text-gray-600">ICT SMKN 1 Probolinggo</p>
    <div id="clock" class="mt-3 text-2xl font-bold"></div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white/70 rounded-xl p-6 shadow">
      <h2 class="text-sm text-gray-500">Pengunjung</h2>
      <p class="text-3xl font-bold"><?= $visitors ?></p>
      <span class="text-xs">Hari ini</span>
    </div>

    <div class="bg-white/70 rounded-xl p-6 shadow">
      <h2 class="text-sm text-gray-500">Notifikasi</h2>
      <p class="text-3xl font-bold">0</p>
      <span class="text-xs">Belum dibaca</span>
    </div>

    <div class="bg-white/70 rounded-xl p-6 shadow">
      <h2 class="text-sm text-gray-500">Status Server</h2>
      <p class="text-3xl font-bold text-green-600"><?= $status ?></p>
    </div>
  </div>

</div>

<script>
function updateClock(){
  const n=new Date();
  clock.textContent=
    n.getHours().toString().padStart(2,'0')+":"+
    n.getMinutes().toString().padStart(2,'0')+":"+
    n.getSeconds().toString().padStart(2,'0');
}
setInterval(updateClock,1000); updateClock();
</script>

</body>
</html>
