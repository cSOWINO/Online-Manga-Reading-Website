<?php
include 'RDBCN.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $manga_name = mysqli_real_escape_string($conn, $_POST['manga_name']);
    $url = mysqli_real_escape_string($conn, $_POST['url']);

    // Your SQL query goes here, for example:
    $sql = "INSERT INTO `requests` (`manga_name`, `url`) VALUES ('$manga_name', '$url')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
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

       <div class="middle">
          <img class="middleImg" src="Banners ideas.jpeg" alt="">
          <h2 class="question">Have a question for us? Fill out this form below:</h2>
          <form class="form" method="POST" action="request.php">
            <div class="form-group">
   <label class="label" for="exampleInputtext">Manga Name</label>
   <input type="text" name="manga_name" class="form-control" id="exampleInputtext" placeholder="Enter the name of Manga">
</div>
<div class="form-group">
   <label class="label" for="exampleInputtext">URL</label>
   <input type="text" name="url" class="form-control" id="exampleInputtext" placeholder="Enter Manga URL">
</div>
      <button type="submit" id="contactButton" class="btn btn-primary">Submit</button>
      </form></div><br>


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
        <script type="text/javascript" src="request.js"></script>
    </body>
</html>    