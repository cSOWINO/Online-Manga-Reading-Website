<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
//$exists=false;

//Chech wheather this username exists
$existsql = "SELECT * FROM `users` WHERE username = '$username'";
$result = mysqli_query($conn, $existsql);
$numEXistRows = mysqli_num_rows($result);

if($numEXistRows >0){
  // $exists = true;
  $showError = "username Already Exists";
}
else{
  // $exists = false;

if(($password == $cpassword)){
  $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  if ($result){
    $showAlert = true;
  }
}
else{
  $showError = "Passwords do not match";
}}
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Signup</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="shortcut icon" href="../img/icon.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">

        <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <nav class="navbar" aria-label="">
              <link rel="stylesheet" href="../css/FiverrCSS.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
              <a href="../php/index.php" class="logo">
                <img src="../img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
              MangaDub
            </a>
              <ul class="menu-links">
                <li><a href="../html/dictionary.html">Manga's</a></li>
                <li><a href="../html/Mix.html">Most Populer</a></li>
                <li><a href="../html/Mix.html">New releases</a></li>
                <li><a href="../html/An & Sp.html">Announcements</a></li>
                <li><a href="../html/Premium.html">Premium</a></li>
                <li><a href="../html/Executiveteam.html">ExecutiveTeam</a></li>
                <li class="join-btn"><a href="../php/login.php">Login</a></li>
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
                    <form class="search" name="search" action="../html/dictionary.html">
                        <input type="text" class="searchText" placeholder="Search Manga..." name="search" size="50">
                        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        
        <div class="headerMid">
            <h1 class="titleTop"><a href="../html/index.html">MangaDub</a></h1>
            <h2 class="titleBot">High Quality Manga</h2>
            <div class="cleaner"></div>
        </div>

<?php
if($showAlert){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your account is now created and you can login
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div> ';
}

if($showError){
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong>'.$showError.'
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div> ';
}
?>


        <div class="middle">
          <img class="middleImg" src="../img/bg6.png" alt="">
          <h2 class="question">Sign Up</h2>
          <form action="../php/signup.php" method="post">

        <div class="form-group">
          <label class="label" for="Username">Username</label>
          <input type="text" class="form-control" name="username" id="Username" placeholder="Enter Username">
        </div>

        <div class="form-group">
          <label class="label" for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
        </div>

        <div class="form-group">
          <label class="label" for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
      </div>
        <button type="submit" id="contactButton" class="btn btn-primary">Submit</button>
      </form></div><br>

        
       <footer>

            <div class="footer2">
            <!-- Red Footer CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="../css/FooterCSS.css">

            <div class="content">
              <div class="left box">
                <div class="upper">
                  <div class="topic">About us</div>
                  <H6>At MangaDub, we are passionate about bringing the captivating world of manga to fans around the globe.</H6>
                </div>
                <div class="lower">
                  <div class="topic">Contact us</div>
                  <div class="phone">
                    <a href="../html/contact.html"><i class="fas fa-phone-volume"></i>+919875115061</a>
                  </div>
                  <div class="email">
                    <a href="../html/contact.html"><i class="fas fa-envelope"></i>210346620058@paruluniversity.ac.in</a>
                  </div>
                </div>
              </div>
              <div class="middle box">
                <div class="topic">Our Services</div>
                <div><a href="../html/about.html">About Us</a></div>
                <div><a href="../php/contact.php">Contact Us</a></div>
                <div><a href="../html/terms.html">Terms Of service</a></div>
                <div><a href="../html/privacy.html">Privacy Policy</a></div>
                <div><a href="../html/cookies.html">Cookies</a></div>
                <div><a href="../php/request.php">Request Manga</a></div>
              </div>
             <div class="right box">
                <div class="topic">Subscribe us</div>
                <form action="../html/Premium.html">
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
             <small>&copy; 2023  <a href="../html/index.html">MangaDub  </a>All rights reserved</small></p>
            </div></div>
          </footer>
        <script type="text/javascript" src="../javascript/Signup.js"></script>
    </body>
</html>