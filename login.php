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
            echo "<p style='color:red;'>❌ Password salah!</p>";
        }
    } else {
        echo "<p style='color:red;'>❌ Username tidak ditemukan!</p>";
    }
}
?>

<form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
