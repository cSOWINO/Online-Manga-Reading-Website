<?php
include('PUDBCN.php'); // Include the connection file

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $cardNumber = $_POST["card_number"];
    $expiryDate = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];
    $country = $_POST["country"];
    $postalCode = $_POST["postal_code"];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO `purchase` (`card_number`, `expiry_date`, `cvv`, `country`, `postal_code`, `date`) 
            VALUES ('$cardNumber', '$expiryDate', '$cvv', '$country', '$postalCode', current_timestamp())";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MangaDub</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="shortcut icon" href="icon.png">
		<link rel="stylesheet" type="text/css" href="style.css">

        <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Premium Purchase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container2 {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: black;
        }
        
        p{
            color: black;
        }

        .premium-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .purchase-form {
            text-align: center;
            margin-top: 30px;
        }

        .purchase-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .purchase-button:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    
    <body>
        <header>
            <nav class="navbar" aria-label="">
              <link rel="stylesheet" href="FiverrCSS.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
              <a href="index.html" class="logo">
                <img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
              MangaDub
            </a>
              <ul class="menu-links">
                <li><a href="dictionary.html">Manga's</a></li>
                <li><a href="Mix.html">Most Populer</a></li>
                <li><a href="Mix.html">New releases</a></li>
                <li><a href="An & Sp.html">Announcements</a></li>
                <li><a href="Premium.html">Premium</a></li>
                <li><a href="Executiveteam.html">ExecutiveTeam</a></li>
                <li class="join-btn"><a href="signup.php">Join Us</a></li>
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
              </ul>
              <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
            </nav>
    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");
  
      // Toggle mobile menu on hamburger button click
      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
  
      // Close mobile menu on close button click
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
          </header>
          <br><br><br>
<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="headerTop">
    <div>
        <form class="search" name="search" action="dictionary.html">
            <input type="text" class="searchText" placeholder="Search Manga..." name="search" size="50">
            <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

           <div class="headerMid">
                <h1 class="titleTop"><a href="index.html">MangaDub</a></h1>
                <h2 class="titleBot">High Quality Manga</h2>
                <div class="cleaner"></div>
            </div>

            
            <div class="container2">
                <h1>Premium Purchase</h1>
                <p>Upgrade to our premium service and enjoy exclusive benefits!</p>
        

                
                <div class="purchase-form">
    <form action="purchase.php" method="post">
        <!-- Add your payment form fields here, e.g., card details, price, etc. -->
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="card_number" required><br>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiry_date" placeholder="MM/YYYY" required><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br>

        <label for="postalCode">Zip/Postal Code:</label>
        <input type="text" id="postalCode" name="postal_code" required><br>

        <button type="submit" class="purchase-button">Purchase Premium</button>
    </form>
</div>
    </div>
        <footer>

            <div class="footer2">
            <!-- Red Footer CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="FooterCSS.css">

            <div class="content">
              <div class="left box">
                <div class="upper">
                  <div class="topic">About us</div>
                  <H6>At MangaDub, we are passionate about bringing the captivating world of manga to fans around the globe.</H6>
                </div>
                <div class="lower">
                  <div class="topic">Contact us</div>
                  <div class="phone">
                    <a href="contact.html"><i class="fas fa-phone-volume"></i>+919875115061</a>
                  </div>
                  <div class="email">
                    <a href="contact.html"><i class="fas fa-envelope"></i>210346620058@paruluniversity.ac.in</a>
                  </div>
                </div>
              </div>
              <div class="middle box">
                <div class="topic">Our Services</div>
                <div><a href="about.html">About Us</a></div>
                <div><a href="contact.php">Contact Us</a></div>
                <div><a href="terms.html">Terms Of service</a></div>
                <div><a href="privacy.html">Privacy Policy</a></div>
                <div><a href="cookies.html">Cookies</a></div>
                <div><a href="request.php">Request Manga</a></div>
              </div>
             <div class="right box">
                <div class="topic">Subscribe us</div>
                <form action="Premium.html">
                  <input type="text" placeholder="Enter email address">
                  <input type="submit" name="" value="Send">
                  <div class="media-icons">
                    <a href="https://www.facebook.com/profile.php?id=100029734134219&sk=about"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/ChIRaGV0007?t=LysyMMlwMCuBiqqk8ZGb-g&s=09"><i class="fab fa-twitter"></i></a>
                    <a href="https://in.pinterest.com/vchira007/"><i class="fab fa-pinterest"></i></a>
                    <a href="https://www.linkedin.com/in/chirag-vasava-050784273"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/feed/you"><i class="fab fa-youtube"></i></a>
                    <a href="https://discord.com/channels/@me"><i class="fab fa-discord"></i></a>
                    <a href="https://www.tumblr.com/vasavachirag007"><i class="fab fa-tumblr"></i></a>
                  </div>
                </form>
              </div>
            </div>
            <div class="bottom">
             <p class="copyright">
             <small>&copy; 2023  <a href="index.html">MangaDub  </a>All rights reserved</small></p>
            </div></div>
          </footer>
    </body>
</html>    