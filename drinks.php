<!doctype html>
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

<?php include "nav.html" ?>

<?php include "menuslider.html" ?>

  <div class="menuContainer">
    <!-- Mobile Nav -->
    <div class="mobileMenuNav">
      <div class="menuButtonD mobile">
        <a href="menu.php" class="menuButton">Mains</a>
      </div>

      <div class="menuButtonD mobile">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>

      <div class="menuButtonD mobile" id="menuactive">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>
    </div>


    <div class="col1">
      <div class="menuButtonD desktop">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/d2.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Coffee</h2>
          <p>

          </p>
          <h3>Small: $2.50 <br>
            medium: $3.50 <br>
            large: $4.50 <br>
          </h3>
        </div>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/d4.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Smoothie</h2>
          <p>

          </p>
          <h3>$4.50</h3>
        </div>
      </div>
    </div>


    <div class="col2">
    <div class="menuButtonD desktop">
      <a href="menu.php" class="menuButton">Mains</a>
    </div>

    <div class="menuItem">
      <img src="media/menuItems/d1.jpg" alt="" class="menuImg">
      <div class="menuText">
        <h2>Hot Chocolate</h2>
        <p>

        </p>
        <h3>$4.50</h3>
      </div>
    </div>

    <div class="menuItem">
      <img src="media/menuItems/d5.jpg" alt="" class="menuImg">
      <div class="menuText">
        <h2>T-Leaf Tea</h2>
        <p>

        </p>
        <h3>$3.50</h3>
      </div>
    </div>




    </div>


    <div class="col3">
      <div class="menuButtonD desktop" id="menuactive">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/d3.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Chocolate Milk</h2>
          <p>

          </p>
          <h3>$2.00</h3>
        </div>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/d6.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Soft Drinks</h2>
          <p>

          </p>
          <h3>$2.50 (per 350ml)</h3>
        </div>
      </div>


    </div>
  </div>

<?php include "footer.html" ?>

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
      setTimeout(carousel, 2000); // Change image every 2 seconds
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
