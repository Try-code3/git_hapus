<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) values ('$username', '$email', '$password')";
    if ($conn->query($query)) {
        echo "Pendaftaran Berhasil. <a href= 'login.php'>Loginsekarang</a>";
    } else {
        echo "Pendaftaran Gagal: " . $conn->error;
    }
}

?>
<form method="POST">
    <h2>Daftar Akun</h2>
    <input type="text" name="username" placholder="Username" required><br>
    <input type="email" name="email" placholder="Email" required><br>
    <input type="password" name="password" placholder="Password" required><br>
    <button type="Submit">Daftar</button>
</form>