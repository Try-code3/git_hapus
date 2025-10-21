<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="src/output.css" rel="stylesheet">
</head>
<body class="bg-emerald-800">
     <!-- Navbar -->
  <nav class="bg-emerald-600 text-white shadow-md flex top-0 z-50 space-x-1">
    <div class="container mx-auto flex items-center justify-between py-5 space-x-2">
      <a href="#" class="text-xl font-bold">GreenEnergy</a>
      <div class="space-x-6 font-semibold">
        <a class="hover:underline" href="index.php">Home</a>
        <a class="hover:underline" href="information.php">Information</a>
        <a class="hover:underline" href="#">Tutorial</a>
        <a class="hover:underline" href="discussion.php">Discussion</a>
      </div>
      <a href = "login.php">
      <button class="bg-emerald-600 text-white px-4 py-1 rounded-3xl hover:bg-emerald-700 transition">
        Daftar/Masuk
      </button>
      </a>
    </div>
  </nav>
      

       <!-- Hero -->
  <!-- Hero Section -->
<section class="relative mb-4 bg-cover bg-center" style="background-image: url(img/tutorr.jpg); height: 200px;">
  <!-- search button -->
  <div class="justify-center absolute inset-0 bg-black/40 flex-col">
    <div class="items-center bg-gray-400 rounded-full px-3 py-2 w-90 border-emerald-600 flex-col">
        <div class="bg-white rounded-full px-3 w-1/4 flex mb-10">
          <input type="text" placeholder="Cari"
            class="flex-grow text-gray-700 placeholder-gray-400" />
          <button class="text-gray-500 hover:text-emerald-600">🔍</button>
        </div>
      </div>
    <h1 class="text-4xl text-center text-white font-semibold">Menerapkan Energi Bersih Dalam Kehidupan Sehari-hari</h1> 
  </div> 
  
</section>

<section class="px-6 py-10 bg-gray-50 ">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
    <!-- Card 1 -->
    <a href= "https://youtu.be/N83PbwXM90o" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://img.youtube.com/vi/N83PbwXM90o/hqdefault.jpg" 
             alt = "Thumbnail video"
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Panas Bumi Sumber Energi Terbarukan</p>
    </a>
    
    <!-- card 2 -->
     <a href="https://youtu.be/80a8P7Hwrn0?si=HjnVb3XXsqYx0ZZk" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://i.ytimg.com/vi/80a8P7Hwrn0/hqdefault.jpg" 
             alt="Thumbnail video" 
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Mengenal Energi Terbarukan: Masa Depan Energi Bersih</p>
    </a>

     <!-- card 3 -->
     <a href="https://youtu.be/EJ--DT43DM4?si=N2xmvzoN2N_frH9m" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://i.ytimg.com/vi/EJ--DT43DM4/hqdefault.jpg" 
             alt="gambar tutorial" 
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Energi Terbarukan | Contoh & Manfaat - Sains</p>
    </a>

     <!-- card 4 -->
     <a href="https://youtu.be/pb6OTxIg3lE?si=NwKLZz_70C9avlSt" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://i.ytimg.com/vi/pb6OTxIg3lE/hqdefault.jpg" 
             alt="gambar tutorial" 
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Menghemat Energi di Rumah Kita</p>
    </a>

    <!-- card 5 -->
     <a href="https://youtu.be/BZMP9yhX6xg?si=hrq6jG05ZH60OQaA" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://i.ytimg.com/vi/BZMP9yhX6xg/hqdefault.jpg" 
             alt="gambar tutorial" 
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Teknologi Ramah Lingkungan di Kehidupan Kita</p>
    </a>

    <!-- card 6 -->
     <a href="https://youtu.be/6GiTJAu24FE?si=tthHhrLJAzLciJMF" target="_blank" rel="noopener noreferrer"
       class="block rounded-xl bg-white shadow-sm hover:shadow-lg transition duration-300 p-2 text-center mb-3">
      <div class="flex justify-center">
        <img src="https://i.ytimg.com/vi/6GiTJAu24FE/hqdefault.jpg" 
             alt="gambar tutorial" 
             class="rounded-xl w-11/12 h-48 object-cover">
      </div>
      <p class="mt-4 font-semibold text-gray-900 mb-5">Tantangan Besar Transisi Energi Bersih Terbarukan (EBT)</p>
    </a>

    <!-- Tambahkan card lain sesuai kebutuhan -->
  </div>
</section>

</body>
</html>