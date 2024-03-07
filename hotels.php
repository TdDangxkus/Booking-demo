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
<div class="box">
  <a href="listroom.php"><--Back</a>
  <!-- <hr size="" style="width: 80px;"> -->
</div>



<style>
   
   .table tbody tr td {
    padding: 10px 20px; 
  }
  #lastment{
    margin-top: 100px;
  }
 #boxlemnet{
  /* border: 1px solid; */
  width: 330px;
  height: 300px;
  background-color: #ccc;
    -moz-box-shadow: 3px 3px #666;
    -webkit-box-shadow: 3px 3px #666;
    box-shadow: 3px 3px #666;

 }
 .element{
  position: relative;
  margin-left: 60%;
  bottom: 300px;
  border-radius: 10px;
  background-color: #ccc;
    -moz-box-shadow: 3px 3px #666;
    -webkit-box-shadow: 3px 3px #666;
    box-shadow: 3px 3px #666;

 }

</style>

<div class="ditel">

<h2>Type 1 resort room for couples and families:</h2>


<div class="scroll-container">
  <img src="img/6.webp" alt="Cinque Terre" width="600" height="400">
  <img src="img/10.webp" alt="Forest" width="600" height="400">
  <img src="img/10.webp" alt="Northern Lights" width="600" height="400">
  <img src="img/10.webp" alt="Mountains" width="600" height="400">
</div>

<p>All furniture and amenities are available.</p>
<div id="boxlemnet">
<h3 id="lastment">Nơi này có những gì cho bạn</h3>
<table class="table table-hover">
    <tbody>
      <tr>
        <td>Courtyard view</td>
        <td>Garden view</td>
      </tr>
      <tr>
        <td>Beach access</td>
        <td>Free parking on premises</td>
      </tr>
       <tr>
        <td>Dedicated workspace</td>
        <td>Security cameras on property</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="element">
  <p>$ 14.99/Night</p>
  <div class="containus">
    <h2>Room Selection</h2>
    <div class="room-selection">
      <label for="room-type">Room Type:</label>
      <select id="room-type">
        <option value="room1">Room 1 ($14.99/night)</option>
        <option value="room2">Room 2 ($15.99/night)</option>
        <option value="room3">Room 3 ($10.99/night)</option>
      </select>
    </div>
    <div class="night-selection">
      <label for="night-count">Number of Nights:</label>
      <input type="number" id="night-count" min="1" value="1">
    </div>
    <div class="total-price">
      <label>Tổng trước thuế:</label>
      <span id="total"></span>
    </div>
    <button id="consolog" onclick="calculateTotal()">Tạm Tính</button>
    <form action="pay.php">
    <button id="conso">BooK Now</button>
    </form>
  </div>
</div>


<style>
    input[type="number"],
  select {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  #consolog {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    margin-left: 240px;
    border-radius: 5px solid;
    cursor: pointer;
    width: 40%;
  }
  
  #consolog:hover {
    background-color: #45a049;
  }
  #conso{
    
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px solid;
    margin-left: 240px;
    cursor: pointer;
    width: 40%;
  }
  
</style>
<script>

function calculateTotal() {
    var roomType = document.getElementById("room-type").value;
    var nightCount = document.getElementById("night-count").value;
    var price = 0;
  
    switch (roomType) {
      case "room1":
        price = 14.99;
        break;
      case "room2":
        price = 15.99;
        break;
      case "room3":
        price = 10.99;
        break;
      default:
        price = 0;
    }
  
    var totalPrice = price * nightCount;
    document.getElementById("total").textContent = "$" + totalPrice.toFixed(2);
  }
  
</script>
<style> 
input{
  margin-bottom: 10px;

}
label{
  margin-bottom: 5px;
}
#filters{
  margin-top: 50px;
}
.content{
  margin-top: 72px;
}
.wifi{
  margin-top: 10px;
}

.checkbox-container {
    display: flex;
    align-items: center;
}

.checkbox-container input[type="checkbox"] {
    margin-right: 30px; 
}

</style>
</div>
<div class="content">
<h2 id="filters">FILTERS</h2>
<form action="#">
  
  <div class="checkbox-container">
    <input class="wifi" type="checkbox" id="wifi" name="wifi" checked>
    <label for="wifi">Wifi</label>
  </div>
  <div class="checkbox-container">
    <input type="checkbox" id="tv" name="tv" checked>
    <label for="tv"> <pr>   TV </pr>  </label>
  </div>
  <div class="checkbox-container">
    <input type="checkbox" id="garden" name="garden" checked>
    <label for="garden">Garden</label>
  </div>
  <div class="checkbox-container">
    <input type="checkbox" id="balcony" name="balcony" checked>
    <label for="balcony">Balcony</label>
  </div>

  <h3 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   </span>
</form>  
</div>

<!-- <div class="element">
  <p>$ 14.99/Night</p>
</div> -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>
