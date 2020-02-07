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
      <div class="slider-res" data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
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
          <h1>GET IN TOUCH</h1>
        </div>
        <div class="header-button" style="margin-top:12em;">
          <button onclick="window.location.href = 'menu.php';" type="button" name="button">CHECK OUT OUR MENU</button>
        </div>
      </div>

  </div>
  <script type="text/javascript">jssor_1_slider_init();</script>

  <div class="contactContainer">
    <h2 style="font-size: 3em; margin-bottom: 0;">Contact us</h2>
    <hr style="margin: 1.2em auto 1.4em auto;">
    <p style="line-height: 1.5em;">
      <address>61, Ottawa Road Ngaio, Wellington</address> <br>
      wojo@cafevilla.co.nz <br>
      04 479 5707
    </p>

    <form class="" action="https://formspree.io/xqkqqypn" method="post">
      <input style="outline: 1px solid #B71041;" type="text" name="firstname" value="" placeholder="  Name"><br>
      <input style="outline: 1px solid #B71041;" type="text" name="email" value="" placeholder="  Email"><br>
      <input style="outline: 1px solid #B71041;" type="text" name="number" value="" placeholder="  Phone Number"><br>
      <textarea style="outline: 1px solid #B71041; padding-left: 0.6em;" name="name" placeholder="  Message" rows="8" cols="20"></textarea><br>

      <input type="submit" value="SUBMIT">
    </form>
  </div>

  <?php include 'footer.html' ?>

  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
