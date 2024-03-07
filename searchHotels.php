<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>


<?php
// searchHotels.php

// Kiểm tra xem form đã được gửi hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ POST request
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    // Thực hiện truy vấn cơ sở dữ liệu hoặc tìm kiếm dữ liệu khác tại đây
    // ...

    // Giả sử bạn có một hàm có tên là `searchAvailableRooms` để tìm phòng theo các tiêu chí
    $availableRooms = searchAvailableRooms($checkin, $checkout, $adults, $children);

    // Hiển thị kết quả tìm kiếm
    foreach ($availableRooms as $room) {
        // Cấu trúc lại HTML cho mỗi phòng ở đây
        // ...
    // Hiển thị kết quả tìm kiếm
foreach ($availableRooms as $room) {
    echo '<div class="card mb-3" style="max-width: 540px;">';
    echo '<div class="row g-0">';
    echo '<div class="col-md-4">';
    echo '<img src="' . $room['image'] . '" class="img-fluid rounded-start" alt="...">';
    echo '</div>';
    echo '<div class="col-md-8">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $room['title'] . '</h5>';
    echo '<p class="price">$' . $room['price'] . '</p>';

    echo '<h6>Features</h6>';
    foreach ($room['features'] as $feature) {
        echo '<span>' . $feature . '</span>';
    }

    echo '<h6>Facilities</h6>';
    foreach ($room['facilities'] as $facility) {
        echo '<span>' . $facility . ' </span>';
    }

    echo '<h6 id="rating">Rating</h6>';
    echo '<span class="fa">';
    // Giả sử rating là một số từ 1 đến 5
    for ($i = 0; $i < $room['rating']; $i++) {
        echo '<i class="fa-solid fa-star" style="color: #FFD43B;"></i>';
    }
    echo '</span> <br>';

    echo '<p class="card-text">' . $room['description'] . '</p>';
    echo '<p class="card-text"><small class="text-body-secondary">Last updated ' . $room['lastUpdated'] . '</small></p>';
    echo '<form action="bookRoom.php">';
    echo '<button class="btn btn-primary" type="submit" name="room_id" value="' . $room['id'] . '">Book Now</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
    }
}

// Hàm giả định để mô phỏng tìm kiếm các phòng khách sạn
function searchAvailableRooms($checkin, $checkout, $adults, $children) {
    // Ở đây bạn sẽ viết code để truy vấn cơ sở dữ liệu thực tế
    // và trả về danh sách các phòng có sẵn
    return array(); // Trả về một mảng các phòng
}
?>