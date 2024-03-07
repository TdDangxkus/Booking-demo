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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Our Hotel</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

.container {
    width: 80%;
    margin: auto;
    padding: 20px;
}

.about h2 {
    color: #333;
}

.about p {
    margin-bottom: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>   
</head>
<body>
    <header>
        <h1>Our Hotel</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to Our Hotel, where luxury meets comfort. Our hotel is located in a prime location, offering breathtaking views and top-notch amenities. Whether you're here for business or leisure, we strive to make your stay memorable and enjoyable.</p>
            <p>Our dedicated staff is committed to providing exceptional service and ensuring that your every need is met. From our elegant rooms to our fine dining restaurant and spa facilities, we offer everything you need for a relaxing and rejuvenating stay.</p>
            <p>Experience the ultimate in hospitality and discover why Our Hotel is the perfect choice for your next getaway.</p>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>


