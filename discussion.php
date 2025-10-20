<?php
session_start();
include 'config.php';

// Cek apakah user login
$isLoggedIn = isset($_SESSION['user_id']);

// Jika user login dan mengirim postingan baru
if ($isLoggedIn && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $image = '';

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = time() . "_" . basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowedTypes)) {
            move_uploaded_file($fileTmpPath, $targetFilePath);
            $image = $targetFilePath;
        }
    }

    $query = "INSERT INTO postingan (user_id, content, image, created_at) 
              VALUES ('$user_id', '$content', '$image', NOW())";
    $conn->query($query);
}

// Ambil semua postingan
$postingan = $conn->query("
    SELECT postingan.*, users.username 
    FROM postingan 
    JOIN users ON postingan.user_id = users.id_users
    ORDER BY postingan.created_at DESC
");
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/output.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2e0e6b5e5.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-900 text-white">

  <!-- Navigasi -->
  <nav class="py-5 px-6 bg-gray-800">
    <div class="container mx-auto flex items-center justify-between">
      <div class="flex-1 text-center space-x-6 font-semibold">
        <a class="hover:text-emerald-600" href="index.php">Home</a>
        <a class="hover:text-emerald-600" href="information.php">Information</a>
        <a class="hover:text-emerald-600" href="tutorial.php">Tutorial</a>
        <a class="hover:text-emerald-600 text-emerald-500" href="discussion.php">Discussion</a>
      </div>

      <div>
        <?php if ($isLoggedIn): ?>
          <span class="mr-4 text-emerald-400">👋 <?php echo htmlspecialchars($_SESSION['username']); ?></span>
          <a href="logout.php" class="bg-red-500 px-3 py-2 rounded-2xl hover:bg-red-600 transition">Logout</a>
        <?php else: ?>
          <a href="login.php" class="bg-emerald-600 px-3 py-2 rounded-2xl hover:bg-emerald-700 transition">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Forum -->
  <main class="bg-gray-100 text-black max-w-3xl mx-auto mt-6 p-4 rounded shadow-md">

    <!-- Jika user login tampilkan form posting -->
    <?php if ($isLoggedIn): ?>
      <form method="POST" enctype="multipart/form-data" class="mb-6 bg-white p-4 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-3 text-emerald-700">Buat Postingan Baru</h2>
        <textarea name="content" rows="3" required class="w-full border border-gray-300 rounded-lg p-2 mb-3" placeholder="Tulis sesuatu..."></textarea>
        <input type="file" name="image" accept="image/*" class="mb-3 block w-full text-sm text-balck-900">
        <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">
          Posting
        </button>
      </form>
    <?php else: ?>
      <div class="bg-white text-center text-gray-700 p-4 rounded-lg shadow mb-6">
        <p>👀 Kamu hanya bisa melihat postingan. <a href="login.php" class="text-emerald-600 font-semibold hover:underline">Login</a> untuk ikut berdiskusi!</p>
      </div>
    <?php endif; ?>

    <!-- Daftar Postingan -->
    <?php while ($row = $postingan->fetch_assoc()): ?>
    <div class="bg-white rounded-lg shadow-md mb-6 p-4">
      <!-- Header -->
      <div class="flex items-center space-x-3 mb-2">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-gray-500">
          <i class="fas fa-user"></i>
        </div>
        <div>
          <p class="font-semibold text-sm text-gray-800"><?php echo htmlspecialchars($row['username']); ?></p>
          <p class="text-xs text-gray-500"><?php echo $row['created_at']; ?></p>
        </div>
      </div>

      <!-- Text -->
      <p class="text-gray-700 mb-3"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>

      <!-- Image -->
      <?php if (!empty($row['image'])): ?>
        <div class="rounded-2xl overflow-hidden">
          <img src="<?php echo htmlspecialchars($row['image']); ?>" class="w-full h-64 object-cover">
        </div>
      <?php endif; ?>
    </div>
    <?php endwhile; ?>
  </main>

</body>
</html>
