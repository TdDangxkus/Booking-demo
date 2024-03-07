<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Thu thập dữ liệu từ biểu mẫu HTML
$id = $_POST['id'];
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$roomType = $_POST['roomType'];
$numberOfNights = $_POST['numberOfNights'];

// Thực hiện truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO pay (fullName, phoneNumber, email, roomType, numberOfNights)
VALUES ('$fullName', '$phoneNumber', '$email', '$roomType', '$numberOfNights')";

if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được chèn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
