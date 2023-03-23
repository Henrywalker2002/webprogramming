<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy thông tin từ biểu mẫu
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $birthday = test_input($_POST["birthday"]);
  $birthmonth = test_input($_POST["birthmonth"]);
  $birthyear = test_input($_POST["birthyear"]);
  $gender = test_input($_POST["gender"]);
  $country = test_input($_POST["country"]);
  $about = test_input($_POST["about"]);
  $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
  if (!preg_match($regex, $email)) {
    echo "invalid mail";
  }
  else {
    echo "Complete!";
  }
  exit();
}

// Hàm để xử lý và kiểm tra dữ liệu đầu vào
function test_input($data) {
  return $data;
}

?>
