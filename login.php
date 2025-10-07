<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username ada di database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password yang di-hash
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id_users'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect ke halaman forum
            header('Location: forum.php');
            exit();
        } else {
             $error = '❌ Password salah!';
        }
    } else {
        $error = '❌ Username tidak ditemukan!';
    }
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen"
style="background-image: url('img/login.jpg');">
  <form method="POST" class="bg-white p-8 rounded-2xl shadow-lg w-80">
    <h2 class="text-2xl font-semibold text-center text-green-600 mb-6">Login</h2>

    <?php if (!empty($error)) : ?>
      <p class="text-red-500 text-center mb-4"><?= $error ?></p>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Username" required
      class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">

    <input type="password" name="password" placeholder="Password" required
      class="w-full px-4 py-2 mb-6 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">

    <button type="submit"
      class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-gray-700 transition">
      Login
    </button>

    <p class="text-sm text-center text-gray-600 mt-4">
      Belum punya akun? 
      <a href="register.php" class="text-blue-600 hover:underline">Daftar di sini</a>
    </p>
  </form>
</body>
</html>