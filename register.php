<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) values ('$username', '$email', '$password')";
    if ($conn->query($query)) {
        echo '<script>
            alert ("Pendaftaran Berhasil. Silakan login sekarang.");
            window.location.href = "login.php";
            </script>';
    } else {
        echo '<script>
            alert ("Pendaftaran Gagal: ' .  addslashes($conn->error).'");
            </script>';
    }
}

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-100 to-emerald-300">
  <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-lg w-80">
    <h2 class="text-2xl font-bold text-center text-emerald-700 mb-6">Daftar Akun</h2>
    <form method="POST" class="space-y-4">
      <input type="text" name="username" placeholder="Username" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
      <input type="email" name="email" placeholder="Email" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">
      <input type="password" name="password" placeholder="Password" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500">

      <button type="submit"
        class="w-full bg-emerald-600 text-white font-semibold py-2 rounded-lg hover:bg-emerald-700 transition">
        Daftar
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-4">
      Sudah punya akun?
      <a href="login.php" class="text-emerald-600 hover:underline font-semibold">Login di sini</a>
    </p>
  </div>
</body>
</html>