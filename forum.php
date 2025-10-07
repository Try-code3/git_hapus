<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

?>


<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-100 to-blue-300 flex flex-col items-center justify-center">
  <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl text-center w-96">
    <h1 class="text-3xl font-bold text-green-600 mb-4">
      Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?> 🎉
    </h1>
    <p class="text-gray-700 mb-8">
      Kamu berhasil login. Silakan lanjut ke halaman diskusi!
    </p>

    <div class="space-y-3">
      <!-- Tombol menuju forum -->
      <a href="discussion.php"
         class="block w-full bg-green-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
         💬 Buka Halaman Diskusi
      </a>

      <!-- Tombol logout -->
      <a href="logout.php"
         class="block w-full bg-red-500 text-white font-semibold py-2 rounded-lg hover:bg-red-600 transition">
         🚪 Logout
      </a>
    </div>
  </div>
</body>
</html>
