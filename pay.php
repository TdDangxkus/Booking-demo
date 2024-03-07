<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/base.css">
  <link rel="stylesheet" href="style/script.js">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <link rel="icon" type="image/x-icon" href="imagess/large.webp">
<style>
.dropbtn {
    background-color: #4b9cec;
    color: rgb(237, 237, 237);
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 16px;
    margin-bottom: px;

    
}
.dropdown {
    position: relative;
    display: inline-block;
    bottom: 15px ;
    left: 40px;
    
    
}
  
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #46bdec;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
    border-radius: 16px;
}
  
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 16px;
}
  
.dropdown-content a:hover {background-color: #11ddc5;}
  
.dropdown:hover .dropdown-content {display: block;}
  
.dropdown:hover .dropbtn {background-color: #2baae0;}
#myBtn {
  display: flex; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: rgb(55, 209, 239); /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 15px; /* Rounded corners */
  font-size: 10px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
/* logo */

.logo img {
  width: 50px;
}
/* top */
.top {
  margin-top: 15%;
}
/* thanh cuon */

#more {display: none;}

.home .image img {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 13%;
}
.container a {
  color: blue;
}
.box{
  margin-top: 40px;
  margin-left: 30px;
 
}
.box a{
  color: black;
  border: 1px solid;
  background-color: #11ddc5;
  border-radius: 10px;
}
div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
  width: 50%;
  height: 50%;
  border: 1px solid  ;
}

.scroll-container img {
  padding: 10px;
}
.content{


}

/* Phần CSS */
.content, .ditel {
    ; /* Đảm bảo các phần này chiếm 50% chiều rộng của trang */
    float: left; /* Sắp xếp chúng theo chiều ngang */
    padding: 20px; /* Tạo khoảng cách giữa chúng */
    box-sizing: border-box; /* Đảm bảo padding không làm thay đổi kích thước tổng của phần tử */
}
.ditel{
  width: 70%;

}
.content{
  width: 19%;
  position: relative;
  right: 300px;
  border: 2px solid;
  height: 20%;
  background-color: #ccc;
    -moz-box-shadow: 3px 3px #666;
    -webkit-box-shadow: 3px 3px #666;
    box-shadow: 3px 3px #666;

}

</style>
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <!-- <p><a href="home.php">Logo</a> </p> -->
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            // echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <!-- <a href="php/logout.php"> <button class="btn">Log Out</button> </a> -->

        </div>
    </div>
    <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="imagess\large.webp" alt=""> </a>

        <ul class="nav-menu">
          <li> <a href="home.php" class="nav-link">Home</a> </li>
          <li id="rooms" class="nav-link"> <a href="Rooms.php">Rooms</a> </li>
          <li> <a href="" class="nav-link">Restaurant</a> </li>
          <li> <a href="About.php" class="nav-link">About</a> </li>
          <li> <a href="" class="nav-link">Contact</a> </li>

    <div class="dropdown">
        <button class="dropbtn"> <i class="fa fa-bars"></i> <b><?php echo $res_Uname ?></b></button>
    <div class="dropdown-content">
              <a class="" href='edit.php?Id=$res_id' >Change Profile</a>
              <a href="">Updating</a>
              <a class="ri-logout-box-r-line" href="php/logout.php"> LogOut</a>
    </div>
        </ul>
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
<script>
        function scrollToElement(elementSelector, instance = 0) {
    const elements = document.querySelectorAll(elementSelector);
    if (elements.length > instance) {
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const rooms = document.getElementById("rooms");

rooms.addEventListener('click', () => {
  scrollToElement('.text');
});
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>

        <div class="hambuger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
         
        </div>
      </nav>
    </div>
  </header>
  <script>
    const hambuger = document.querySelector('.hambuger');
    const navMenu = document.querySelector('.nav-menu');

    hambuger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hambuger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    const navLink = document.querySelectorAll('.nav-link');
    navLink.forEach((n) => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <!-- <div class="text">
          <h1>Hello.Booking</h1>
          <p>
          
"Book Hotel" cung cấp một nền tảng tiện lợi để nhanh chóng đặt phòng khách sạn trên toàn thế giới, với các tùy chọn tìm kiếm linh hoạt về vị trí, tiện nghi và giá cả.
        </div> -->
      </div>
      <div class="image">
        <img src="img/bk1.jpg" class="slide" height="100px">
      </div>
      <div class="image_item">
        <!-- <img src="image/home1.jpg" alt="" class="slide active" onclick="img('image/home1.jpg')">
        <img src="image/home2.jpg" alt="" class="slide" onclick="img('image/home2.jpg')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')"> -->
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>


<div class="containus">
  <form id="paymentForm" action="accsent.php" method="post">
    <h2>Payment Information</h2>
    <div class="input-group">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
    </div>
    <div class="input-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="phone Number" required>
    </div>
    <div class="input-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="email" required>
    </div>
    <div class="input-group">
      <label for="roomType">Room Type:</label>
      <select id="roomType" name="roomType" placeholder="roomType">
        <option value="14.99">$14.99 - Standard Room</option>
        <option value="15.99">$15.99 - Deluxe Room</option>
        <option value="10.99">$10.99 - Economy Room</option>
      </select>
    </div>
    <div class="input-group">
      <label for="paymentMethod">Payment Method:</label>
      <select id="paymentMethod" name="paymentMethod">
        <option value="bankTransfer">Bank Transfer</option>
        <option value="creditCard">Credit Card</option>
      </select>
    </div>
    <div class="input-group">
        <label for="numberOfNights">Number of Nights:</label>
        <input type="number" id="numberOfNights" name="numberOfNights" min="1" required>
      </div>
      <div class="total-price">
        <label for="totalPrice">Total Price:</label>
        <span id="totalPrice">0</span>
      </div>
    
    <!-- <button type="submit" href='sql'>Pay Now</button> -->
    <button type="button" onclick="payNow()">Pay Now</button>
    
  </form>
</div>

  
<style>
  .containus {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .input-group {
    margin-bottom: 20px;
  }
  
  .input-group label {
    display: block;
    margin-bottom: 5px;
  }
  
  .input-group input, .input-group select {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  button[type="button"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  
  button[type="submit"]:hover {
    background-color: #45a049;
  }
  
</style>

<script>
  document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // Xử lý dữ liệu thanh toán ở đây (ví dụ: gửi thông tin đến máy chủ)
  });
  

document.getElementById('numberOfNights').addEventListener('input', function() {
    const roomPrice = parseFloat(document.getElementById('roomType').value);
    const numberOfNights = parseFloat(this.value);
    const totalPrice = roomPrice * numberOfNights;
    document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);
  });x


  <script>
function payNow() {
    // Thu thập dữ liệu từ biểu mẫu
    // var id = document.getElementById("id").value;
    var fullName = document.getElementById("fullName").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var email = document.getElementById("email").value;
    var roomType = document.getElementById("roomType").value;
    var numberOfNights = document.getElementById("numberOfNights").value;

    // Tạo một yêu cầu AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "sql.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý phản hồi từ máy chủ
            console.log(xhr.responseText);
        }
    };
    // Gửi dữ liệu đến tập tin PHP
    xhr.send("&fullName=" + fullName + "&phoneNumber=" + phoneNumber + "&email=" + email + "&roomType=" + roomType + "&numberOfNights=" + numberOfNights);
}
</script>
</script>



<div class="sql">
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
$sql = "INSERT INTO payment (id,fullName, phoneNumber, email, roomType, numberOfNights)
VALUES ('$id','$fullName', '$phoneNumber', '$email', '$roomType', '$numberOfNights')";

if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được chèn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>

</div>
</body>
</html>