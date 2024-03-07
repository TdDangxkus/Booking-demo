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
  <link rel="stylesheet" href="style/list.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
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
    min-width: 150px;
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

/* .btn1{
  margin: 20px 0 20px 10px;
  background-color: #C1B086;
  border: 1px solid;
} */

.btn1{
  background-color: #C1B086;
  color: white;
  /* width: 100px;
  height: 100px; */
  font-size: 10px;
  border-radius: 100px;
}
.btn1{
  background-color: #C1B086;  
  border: 1px solid;
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
          <li> <a href="" class="nav-link">About</a> </li>
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
        <div class="text">
          <h1>Hello.Booking</h1>
          <p>
          
"Book Hotel" cung cấp một nền tảng tiện lợi để nhanh chóng đặt phòng khách sạn trên toàn thế giới, với các tùy chọn tìm kiếm linh hoạt về vị trí, tiện nghi và giá cả.
        </div>
      </div>
      <div class="image">
        <img src="image/home1.jpg" class="slide">
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


<!-- --OUR ROM-- -->




</section>

  <section class="about top" id="about">
  <div class="container flex card-container">
      <div class="left">

      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/4.jfif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       <form action="hotels.php">
        <button class="btn1" href="hotels.php">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/5.jfif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       <form action="hotels.php">
        <button class="btn1" href="">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/9.avif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       <form action="hotels.php">
        <button class="btn1" href="">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>

    </div>

    <div class="right">
        
        <div class="container mt-5">
        <h2 class="mb-4" id="mybad">FILTERS</h2>
       
          
 <div class="text">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/8.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       <form action="hotels.php">
        <button class="btn1" href="">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>  
<!-- hotels-5-->
<div class="text">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/7.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       <form action="hotels.php">
        <button class="btn1" href="">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div> 
<!--hotels-6-->
<div class="text">
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/6.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Couple Room</h5>
        <p class="price">$14.99</p>

<h6>Features</h6>
   <span>2 Room</span>
   <span>1 Bathroom</span>
   <span>1 Balcony</span>
<h6>Facilities</h6>
   <span>Wifi </span>
   <span>Television</span>
   <span>AC</span>
<h6 id="rating">Rating</h6>
   <span class="fa">
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
   <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
  
   </span> <br>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <form action="hotels.php">
        <button class="btn1" href="">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div> 
<!--hotels-7-->


</div>
          
</div>
</div>


  </section>
  <!--  -->
  <section class="room top" id="room">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Rooms $ Suites</h2>
        </div>
        <div class="button">
            <form action="Rooms.php">
          <button href="Rooms.php" class="btn1">VIEW ALL</button>
          </form>
        </div>
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/r1.jpg" alt="">
          </div>
          <div class="text">
            <h3></h3>
            <p> <span></span> <span></span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r2.jpg" alt="">
          </div>
          <div class="text">
          <h3></h3>
            <p> <span></span> <span></span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r3.jpg" alt="">
          </div>
          <div class="text">
          <h3></h3>
            <p> <span></span> <span></span> </p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>