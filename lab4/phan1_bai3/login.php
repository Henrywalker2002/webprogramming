<?php
session_start();

// Kiểm tra nếu đã đăng nhập thì chuyển hướng trình duyệt đến trang info.php
if (isset($_SESSION['username'])) {
    header("location: info.php");
}

// Xử lý đăng nhập
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    if ($username == "admin" && $password == "123456") {
        // Lưu thông tin đăng nhập vào Session
        $_SESSION['username'] = $username;

        // Chuyển hướng trình duyệt đến trang info.php
        header("location: info.php");
    } else {
        // Hiển thị thông báo lỗi đăng nhập
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="POST" action="">
        <label>Tên đăng nhập:</label>
        <input type="text" name="username"><br><br>
        <label>Mật khẩu:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
</body>
</html>
