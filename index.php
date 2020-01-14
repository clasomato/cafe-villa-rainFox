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
 <?php include 'nav.html' ?>

  <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      window.jssor_1_slider_init = function() {

          var jssor_1_SlideoTransitions = [
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:0,e:{x:7}}],
            [{b:-1,d:1,sX:3,sY:3},{b:0,d:900,x:283,y:135,o:1,sX:1,sY:1,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:0,o:0,e:{x:16}}]
          ];

          var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
              $Class: $JssorCaptionSlideo$,
              $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*#region responsive code begin*/

          var MAX_WIDTH = 3000;

          function ScaleSlider() {
              var containerElement = jssor_1_slider.$Elmt.parentNode;
              var containerWidth = containerElement.clientWidth;

              if (containerWidth) {

                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                  jssor_1_slider.$ScaleWidth(expectedWidth);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }

          ScaleSlider();

          $Jssor$.$AddEvent(window, "load", ScaleSlider);
          $Jssor$.$AddEvent(window, "resize", ScaleSlider);
          $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
          /*#endregion responsive code end*/
      };
  </script>
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
          <div>
            <img data-u="image" src="media/ss1.jpg" style="object-fit:cover;" />
          </div>
          <div>
              <img data-u="image" src="media/ss2.jpg" style="object-fit:cover;" />
          </div>
          <div>
              <img data-u="image" src="media/ss3.jpg" style="object-fit:cover;" />

          </div><a data-u="any" href="https://www.jssor.com" style="display:none">slider html</a>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb032" style="z-index:15;position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="z-index:15;width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="z-index:15;width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
      </div>
      <div class="header-content">
        <div class="header">
          <h1>Ngaio's top cafe</h1>
        </div>
        <div class="header-button">
          <button onclick="window.location.href = 'menu.php';" type="button" name="button">CHECK OUT OUR MENU</button>
        </div>
      </div>

  </div>
  <script type="text/javascript">jssor_1_slider_init();</script>

  <section class="indexContainer">
    <article class="indexCollum1">
      <header class="center">
        <h2 style="margin: 5% 0 2% 0;border: 1px solid #B71041;padding: 0.5em 1em;">A <span style="font-style: italic;">Memorable</span> Dining Experience</h2>
      </header>
        <hr>
      <p>
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

      <?php include "mosCol.html" ?>
    </article>


    <div class="indexCollum2">
      <h2 class="center" style="font-size: 2em; line-height: 0.1em;">Quote of the Day</h2>
      <h3 class="center quote-of-the-day"> <?php $sql = "SELECT quote FROM quotes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $row["quote"];
          }
      } ?> </h3>
      <hr style="margin-bottom: 1.6em;">
      <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d512.6164235245642!2d174.77424871609506!3d-41.24768394493158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae021e9fde63%3A0x7e428be96eb1f47f!2sCafe%20Villa!5e0!3m2!1sen!2snz!4v1574049143522!5m2!1sen!2snz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <h3 class="center">
          61, Ottawa Road <br>
          Ngaio, Wellington
        </h3>
      </div>
      <hr>
      <h2 class="center" style="font-size: 2em; margin:0.6em 0 0 0;">Job Openings</h2>
      <p>
        <strong>Trained Barista (2019)<br></strong>
        We are looking for an experienced barista that can make great coffee and do the front of house thing. We are wanting someone to start asap, so if you are looking to relocate to Wellington your timeframe will probably be too slow.
       </p>

       <hr>

       <p>
         <strong>Waiter (2020)<br></strong>
         We are currently looking for a new set of waiters for 2020 as some of our staff are leaving.
       </p>

       <div class="center">
        <?php include 'get-in-touch.html' ?>
       </div>

       <br>


    </div>

    </section>

    <?php include 'footer.html' ?>

  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){

    // $("#home").hover(
    //   function() {
    //     console.log("a")
    //   }, function() {
    //     console.log("b")
    //   }
    // );

    // $("#home").hover(function(){
    //   $("#home").animate({color: "white"});
    //   }, function(){
    //   $("#contact").animate({color: "white"}, 500);
    // });

    // $("#home").hover(
    //   function() {
    //     $("#contact").animate({color: "green"}, 500);
    //   }, function() {
    //     $("#contact").animate({color: "white"}, 500);
    //   }
    // );

    // jQuery End
  });

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
