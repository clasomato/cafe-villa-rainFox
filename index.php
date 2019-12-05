<!doctype html>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

 ?>


<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cafe Villa</title>
<meta name="description" content="A  FILL THIS OUTTTTT!!!!!!!!!!!!">
<meta name="keywords" content="   ">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="media/ico.png">
</head>

<body>
  <!--Navigation Bar-->
  <a href="index.html"><img src="media/logo.png" alt="" class="navLogo"></a>
  <div class="topnav desktopNav" id="myTopnav">
    <a href="contact.html" id="active" class="nava" style="margin-right: 15%;">Contact</a>
    <a href="menu.html" class="nava dropbtn">Menu</a>
    <a href="about.html" class="nava">About</a>
    <a href="index.html" class="nava">Home</a>
  </div>

  <!-- Mobile Nav Bar -->
  <div class="topnav mobileNav" id="myTopnavMobile">
    <a href="index.html" class="nava">Home</a>
    <a href="about.html" class="nava">About</a>
    <a href="menu.html" class="nava dropbtn">Menu</a>
    <a href="contact.html" class="nava" style="margin-right: 15%;">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <!-- This is the Font Awsome icon for mobile navigation -->
    <i class="fa fa-bars"></i>
    </a>
  </div>


  <div class="full-width-slideshow">
    <a href="menu.html" class="callToAction">Check Out our Menu!</a>
    <img class="mySlides fade" src="media/ss1.jpg">
    <img class="mySlides fade" src="media/ss2.jpg">
    <img class="mySlides fade" src="media/ss3.jpg">
    <img class="mySlides fade" src="media/ss4.jpg">

  </div>
  <div class="splash1">
    <h1 class="splash2">Welcome to cafe Villa</h1>
  </div>

  <div class="indexContainer">
    <div class="indexCollum1">
      <img src="media/indexHeader.jpg" alt="" class="indexHeader">
      <p>
        Café Villa is a memorable dining experience.
        <br>
        Located at 61 Ottawa Road in Ngaio Wellington city, the café specialises in delicious
        classic cafe style food, offering breakfasts, brunches and lunches.<br>
        <br>
        A warm and very welcoming atmosphere from the first moment you step inside Cafe
        Villa, with perhaps the best recommendation being the testimonial of regular
        customers who describe the food as delicious, with generous helpings.  This has
        led to Cafe Villa becoming one of the most sought after cafes in Wellington.<br>
        <br>
        Open  Monday  and Tuesday 8.30am until 3.30pm, Wednesday to Friday 8.30am untill 4.00pm and
        Saturday and Sunday 9.30am until 4.00pm.  Kitchen closes daily around 2.45pm.  As well as the
        extensive breakfast and lunch menu, Cafe Villa offers a range of delicious
        biscuits and cakes produced in house.  We choose to use free range eggs in all our
        recipes and menu items.
      </p>
    </div>


    <div class="indexCollum2">
      <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d512.6164235245642!2d174.77424871609506!3d-41.24768394493158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae021e9fde63%3A0x7e428be96eb1f47f!2sCafe%20Villa!5e0!3m2!1sen!2snz!4v1574049143522!5m2!1sen!2snz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <p>
          61, Ottawa Road <br>
          Ngaio, Wellington
        </p>
      </div>
      <br>

      <h2 style="font-size: 2em;">Job Openings</h2>
      <p>
        <strong>Trained Barista (2019)<br></strong>
        We are looking for an experienced barista that can make great coffee and do the front of house thing. We are wanting someone to start asap, so if you are looking to relocate to Wellington your timeframe will probably be too slow.
       </p>

       <hr>

       <p>
         <strong>Waiter (2020)<br></strong>
         We are currently looking for a new set of waiters for 2020 as some of our staff are leaving.
       </p>

       <a href="contact.html" class="contactButton">contact</a>

       <br>

       <h2>Quote of the day:</h2>
       <p> <?php $sql = "SELECT quote FROM quotes";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo $row["quote"];
           }
       } ?> </p>
    </div>



  </div>

  <div class="footer">
    <!-- Footer Navigation -->
    <div class="footerNav">
      <a href="index.html" class="navFooter">Home</a>
      <a href="about.html" class="navFooter">About</a>
      <a href="menu.html" class="navFooter">Menu</a>
      <a href="contact.html" class="navFooter">Contact</a>
    </div>

    <!-- Footer Text -->
    <div class="footerText">
      <p style="color: #d3d3d3;">© 2019 Cafe Villa <br>
        <a href="login.php" style="color: #bd1747; text-decoration: none;">Admin</a>
      </p>
    </div>
  </div>




  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
  </script>




  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnavMobile");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
      x.className = "topnav";
      }
    }
  </script>



</body>
