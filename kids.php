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

<?php include 'menuslider.html' ?>

  <div class="menuContainer">
    <!-- Mobile Nav -->
    <div class="mobileMenuNav">
      <div class="menuButtonD mobile">
        <a href="menu.php" class="menuButton">Mains</a>
      </div>

      <div class="menuButtonD mobile" id="menuactive">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>

      <div class="menuButtonD mobile">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>
    </div>


    <div class="col1">

      <div class="menuButtonD desktop" id="menuactive">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/k1.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Kids Sammie</h2>
          <p>
            1 filling  $3.50. 2 fillings  $4.00
            Choose white or wholegrain, fresh or toasted. Choose fillings from vegemite, marmite, jam, peanut butter, honey, ham, cheese, tomato, or lettuce.
          </p>
          <h3>$3.50 - $4.00</h3>
        </div>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/k4.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Kids Spaghetti</h2>
          <p>
            Or baked beans on toast.
          </p>
          <h3>$5.50</h3>
        </div>
      </div>





    </div>


    <div class="col2">
    <div class="menuButtonD desktop">
      <a href="menu.php" class="menuButton">Mains</a>
    </div>

    <div class="menuItem">
      <img src="media/menuItems/k2.jpg" alt="" class="menuImg">
      <div class="menuText">
        <h2>Kids Fruit Salad</h2>
        <p>
          selection of seasonal fruit.
        </p>
        <h3>$4.00</h3>
      </div>
    </div>

    <div class="menuItem">
      <img src="media/menuItems/k5.jpeg" alt="" class="menuImg">
      <div class="menuText">
        <h2>Kids Grill</h2>
        <p>
          Poached egg, toast, bacon and hash brown.
        </p>
        <h3>$13.00</h3>
      </div>
    </div>




    </div>


    <div class="col3">
      <div class="menuButtonD desktop">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/k3.jpeg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Kids Chicken nuggets</h2>
          <p>
            With wedgws and sauce
          </p>
          <h3>$5.50</h3>
        </div>
      </div>

      <div class="menuItem">
        <img src="media/menuItems/k6.jpg" alt="" class="menuImg">
        <div class="menuText">
          <h2>Kids French Toast</h2>
          <p>
            French toast served with bacon
          </p>
          <h3>$13.00</h3>
        </div>
      </div>




    </div>
  </div>

<?php include 'footer.html' ?>

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
