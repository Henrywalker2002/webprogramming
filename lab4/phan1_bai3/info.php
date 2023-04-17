<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì chuyển hướng trình duyệt đến trang login.php
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin người dùng</title>
</head>
<body>
    <h2>Chào mừng <?php echo $_SESSION['username']; ?> đến với trang thông tin người dùng!</h2>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
