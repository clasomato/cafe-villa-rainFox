<?php
function getJobsItems(){
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


  $sql = "SELECT * FROM jobs";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $rows = [];
      while($row = mysqli_fetch_array($result)) {
          $rows[] = $row;
      }
      return $rows;
  }
};



function getNumberOfJobsItems(){
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


  $sql = "SELECT * FROM jobs";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // var_dump($result);
    // var_dump(array($result));
    return mysqli_num_rows($result);
  }
};


 ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cafe Villa</title>
<meta name="description" content="A  FILL THIS OUTTTTT!!!!!!!!!!!!">
<meta name="keywords" content="   ">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="css/magnific-popup.css">
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
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:300px;overflow:hidden;visibility:hidden;">
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
      <div class="header-content">
        <div class="header" style="margin-top:4em;">
          <h1>LEARN ABOUT US</h1>
        </div>
        <div class="header-button" style="margin-top:12em;">
          <button onclick="window.location.href = 'menu.php';" type="button" name="button">CHECK OUT OUR MENU</button>
        </div>
      </div>

  </div>
  <script type="text/javascript">jssor_1_slider_init();</script>

  <div class="splash1">
    <h2 class="splash2" style="float: left">Friendly with delicious food!</h2>
    <h2 class="splash2" style="float: right; margin-right: 15%;">61, Ottawa Road. Ngaio, Wellington</h2>
  </div>
  <div class="indexContainer">
    <div class="indexCollum1">

<!--  -->

      <p>
        <strong>Cafe Villa</strong> is open for breakfast, brunch and lunch Monday to Friday from 8.30am  to 4.00pm and
        Saturday and Sunday 9.30am to 4.00pm, as well as for delicious take-away lunch and snack food.
      </p>
      <p>
        We have chosen to use free range eggs in all of our recipes and menu items.
      </p>
      <p>
        Our cafe dining covers a wide range of delicious cafe style food and the cafe atmosphere is friendly and welcoming.
      </p>
      <p>
        Come and enjoy  breakfast, brunch or lunch as well as morning or afternoon tea or just relax with a cup of  coffee..
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
      <?php
        $i = 0;
        $items = getJobsItems();
        while ($i < getNumberOfJobsItems()):
      ?>
        <?php $item = $items[$i]; ?>
        <p> <strong style="font-size: 1.5em;"><?php echo $item['position'] ?></strong> <br>
          <?php echo $item['description'] ?>
        </p>

        <hr>
        <?php $i = $i + 1; ?>
      <?php endwhile; ?>

       <div class="center">
         <?php include 'get-in-touch.html' ?>
       </div>
    </div>



  </div>

  <?php include 'footer.html' ?>




  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script>

  // J Query STARTS

  // Magnific Popup
  $(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
  });

  $('.test-popup-link').magnificPopup({
    type: 'image'
    // other options
  });

  $('.parent-container').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    // other options
    gallery: {
      enabled: true
    }
  });
  </script>


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
