<?php
$users = require __DIR__ . '/../data/users.php';
$user_id = $_COOKIE['user_id'] ?? null;

if (!$user_id || !isset($users['by_id'][$user_id])) {
    header("Location: login.php?error=" . urlencode("Vui lòng đăng nhập lại."));
    exit;
}

$username = $users['by_id'][$user_id];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>
      <p>Ghi nhớ đăng nhập bằng <strong>cookie</strong>.</p>

      <hr style="margin: 20px 0;">

      <div style="display: flex; flex-direction: column; gap: 10px;">
        <a href="page1.php"><button style="background-color: orange;">Trang 1</button></a>
        <a href="page2.php"><button style="background-color: orange;">Trang 2</button></a>
        <a href="page3.php"><button style="background-color: orange;">Trang 3</button></a>
      </div>

      <div style="margin-top: 30px;">
        <a href="index.php"><button>Trang chủ</button></a>
        <a href="logout.php"><button style="margin-top: 10px;">Đăng xuất</button></a>
      </div>
    </div>
  </div>
</body>
</html>
