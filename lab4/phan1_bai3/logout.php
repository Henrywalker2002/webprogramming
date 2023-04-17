<?php
session_start();

// Xóa thông tin đăng nhập khỏi Session
unset($_SESSION['username']);

// Chuyển hướng trình duyệt đến trang login.php
header("location: login.php");
?>
