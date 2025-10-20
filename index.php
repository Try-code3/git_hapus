<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/output.css" rel="stylesheet">
</head>
<body>
    <!-- navigasi -->
      <nav>
        <div class="container mx-auto flex items-center justify-between py-5">
            <a href=""></a>
            <div class="space-x-6 font-semibold">
                <a class="hover:text-emerald-600" href="#">Home</a>
                <a class="hover:text-emerald-600" href="information.php">Information</a>
                <a class="hover:text-emerald-600" href="tutorial.php">Tutorial</a>
                <a class="hover:text-emerald-600" href="discussion.php">Discussion</a> 
            </div>
            <a href="login.php">
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-3xl hover:border-emerald-600 hover:text-emerald-600 hover:bg-white transition ">Daftar/Masuk</button>
            </a>
        </div>
      </nav>
     <!-- hero section -->
  <section class="relative bg-cover bg-center flex items-end justify-center text-center" 
       style="background-image: url('img/home.jpg'); height: 360px;">
    <div class="w-full mb-10">
      <h3 class="text-5xl font-extrabold text-emerald-400 font-poppins">Green Energy</h3>
      <h4 class="text-center text-white text-2xl font-light font-poppins">for a better life</h4>
      <!--p class="text-sm sm:text-base text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur repellat soluta iste dolore molestias dolores!</p-->
      <div class="flex justify-center mt-4">
        <a href="login.php">
          <button class="bg-emerald-600 text-white px-4 py-2 rounded-3xl border-transparent hover:border-emerald-600 hover:text-emerald-600 hover:bg-white transition">
            Daftar/Masuk
          </button>
        </a>
      </div>
    </div>
 </section>

      <section class="my-8 ">
        <div class="bg-emerald-600 text-white text-center py-3">Apa itu energi bersih?</div>
        <div class="container flex justify-between items-center space-x-8 py-5 px-4 mx-auto">
        <div>
            <h1 class="text-4xl mt-7">Energi bersih</h1>
            <p>adalah jenis energi yang dihasilkan dari sumber yang memiliki dampak minimal atau tanpa dampak negatif terhadap lingkungan dan kesehatan, seperti emisi gas rumah kaca dan polutan. Energi ini berasal dari sumber daya terbarukan seperti matahari, angin, dan air. </p>
        </div>
         <img class="w-1/4" src="img/Union.png">
        </div>
      </section>
    <!--section contoh penerapan energi bersih-->
            <!-- SECTION: Contoh Penerapan Energi Bersih -->
     <section class="container mx-auto px-4 my-16">
  <h2 class="text-2xl font-bold text-emerald-600 mb-8 text-center">
    Contoh Penerapan Energi Bersih
  </h2>

  <!-- Carousel Wrapper -->
  <div class="flex space-x-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 no-scrollbar">
    
    <!-- Kartu 1 -->
    <div class="min-w-[300px] md:min-w-[320px] bg-emerald-600 text-white p-6 rounded-2xl shadow-lg flex flex-col justify-between snap-center shrink-0">
      <div>
        <h3 class="text-xl font-semibold mb-2 uppercase">Contoh Penerapan Energi Bersih</h3>
        <p class="text-sm opacity-90 mb-4">
          Apa saja teknologi yang menerapkan penggunaan energi yang ramah lingkungan.
        </p>
      </div>
      <button class="flex items-center gap-2 bg-white text-emerald-600 font-semibold px-4 py-2 rounded-full self-start hover:bg-emerald-100 transition">
        see more →
      </button>
    </div>

    <!-- Kartu 2 -->
<div class="min-w-[300px] md:min-w-[320px] rounded-2xl overflow-hidden shadow-lg bg-white snap-center shrink-0">
  <div class="relative h-[200px]"> <!-- tambahkan tinggi tetap -->
    <img src="img/solar panel.jpg" alt="Solar Panel" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-2 text-white">
      <h3 class="text-lg font-semibold">Solar Panel</h3>
      <p class="text-xs leading-tight">
        Panel Surya (Solar PV) menghasilkan listrik dari sinar matahari untuk rumah dan gedung.
      </p>
    </div>
  </div>
</div>

<!-- Kartu 3 -->
<div class="min-w-[300px] md:min-w-[320px] rounded-2xl overflow-hidden shadow-lg bg-white snap-center shrink-0">
  <div class="relative h-[200px]"> <!-- tambahkan tinggi tetap -->
    <img src="img/turbin angin.jpg" alt="Turbin Angin" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-4 text-white">
      <h3 class="text-lg font-semibold">Turbin Angin</h3>
      <p class="text-xs leading-tight">
        Menghasilkan listrik dari energi angin tanpa emisi karbon dan ramah lingkungan.
      </p>
    </div>
  </div>
</div>

<!-- Kartu 4 -->
<div class="min-w-[300px] md:min-w-[320px] rounded-2xl overflow-hidden shadow-lg bg-white snap-center shrink-0">
  <div class="relative h-[200px]"> <!-- tambahkan tinggi tetap -->
    <img src="img/PLTA.jpg" alt="Pembangkit Air" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-4 text-white">
      <h3 class="text-lg font-semibold">Pembangkit Air</h3>
      <p class="text-xs leading-tight">
        Energi air dimanfaatkan untuk menghasilkan listrik secara berkelanjutan.
      </p>
    </div>
  </div>
</div>

  </div>
</section>

<!-- Hilangkan scrollbar default di browser -->
<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>
    <!-- SECTION: Kenapa Energi Bersih Penting -->
<section class="bg-emerald-600 py-16 text-white">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-2xl font-bold mb-10">Kenapa Energi Bersih Penting?</h2>

    <!-- Grid 2 kolom -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-left">
      
      <!-- Kolom Kiri -->
      <ul class="space-y-4">
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Mengurangi Polusi</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Sumber Energi yang Berkelanjutan</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Meningkatkan Kemandirian Energi</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Menciptakan Lapangan Kerja Baru</span> <span>→</span>
        </li>
      </ul>

      <!-- Kolom Kanan -->
      <ul class="space-y-4">
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Mengurangi Emisi Karbon</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Menjaga Keseimbangan Lingkungan</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Mendorong Inovasi Teknologi Hijau</span> <span>→</span>
        </li>
        <li class="flex justify-between items-center border-b border-emerald-400 pb-2 hover:text-emerald-200 transition">
          <span>Mendukung Ekonomi Berkelanjutan</span> <span>→</span>
        </li>
      </ul>
    </div>

    <!-- Tombol -->
    <button class="mt-10 bg-white text-emerald-700 px-6 py-2 rounded-full font-semibold hover:bg-emerald-100 transition">
      See More
    </button>
  </div>
</section>

<!-- SECTION: Potensi Energi Terbarukan Indonesia -->
<section class="py-20 bg-white text-center">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-bold text-emerald-700 mb-10">
      Potensi <span class="bg-emerald-200 px-2 rounded">Energi Terbarukan</span> Indonesia
    </h2>

    <!-- GRID ENERGI -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Energi Surya -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">☀️</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Energi Surya</h3>
        <p class="text-gray-600">3.294–5.000 GWp</p>
      </div>

      <!-- Energi Panas Bumi -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">🌋</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Energi Panas Bumi</h3>
        <p class="text-gray-600">23.7 GW</p>
      </div>

      <!-- Energi Angin -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">💨</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Energi Angin (Wind)</h3>
        <p class="text-gray-600">60–70 GW</p>
      </div>

      <!-- Bioenergi -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">🌿</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Bioenergi</h3>
        <p class="text-gray-600">32.6 GW</p>
      </div>

      <!-- Energi Hidro -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">💧</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Energi Hidro</h3>
        <p class="text-gray-600">75 GW</p>
      </div>

      <!-- Energi Laut -->
      <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 hover:shadow-lg transition">
        <div class="text-5xl mb-4">🌊</div>
        <h3 class="text-lg font-semibold text-emerald-700 mb-2">Energi Laut (Oseanik)</h3>
        <p class="text-gray-600">17.9 GW</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white py-8 mt-10">
  <div class="max-w-6xl mx-auto px-6 flex flex-col justify-center items-center text-center">
    <div class="text-center">
      <h3 class="text-lg font-semibold">Energi bersih hari ini,<br>masa depan cerah esok hari.</h3>
      <p class="text-sm text-gray-400 mt-2">© 2025 Energi Bersih Indonesia. All rights reserved.</p>
</footer>
    
</body>
</html>