<?php
function getMenuItems(){
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


  $sql = "SELECT * FROM menu";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $rows = [];
      while($row = mysqli_fetch_array($result)) {
          $rows[] = $row;
      }
      return $rows;
  }
};

function getNumberOfMenuItems(){
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


  $sql = "SELECT * FROM menu";

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
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="media/ico.png">
</head>

<body>
  <!--Navigation Bar-->
<?php include 'nav.html' ?>

<?php include 'menuslider.html' ?>

  <div class="menuContainer">
    <!-- Mobile Nav -->
    <div class="mobileMenuNav">
      <div class="menuButtonD mobile" id="menuactive">
        <a href="menu.php" class="menuButton">Mains</a>
      </div>

      <div class="menuButtonD mobile">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>

      <div class="menuButtonD mobile" style="margin-bottom: 13%;">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>
    </div>
    <br>
    <div class="col1">
      <div class="menuButtonD desktop">
        <a href="kids.php" class="menuButton">Kids</a>
      </div>
        <?php
          $i = 0;
          $items = getMenuItems();
          while ($i < getNumberOfMenuItems()):
        ?>
          <?php $item = $items[$i]; ?>
          <div class="menuItem">
            <img src="<?php echo $item['image']; ?>" alt="" class="menuImg">
            <div class="menuText">
              <h2><?php echo $item['name'] ?></h2>
              <p>
                <?php echo $item['description'] ?>
              </p>
              <h3>$<?php echo $item['price'] ?></h3>
            </div>
          </div>
          <?php $i = $i + 3; ?>
        <?php endwhile; ?>
    </div>






    <div class="col2">
      <div class="menuButtonD desktop" id="menuactive">
        <a href="menu.php" class="menuButton">Mains</a>
      </div>
      <?php
        $i = 1;
        $items = getMenuItems();
        while ($i < getNumberOfMenuItems()):
      ?>
        <?php $item = $items[$i]; ?>
        <div class="menuItem">
          <img src="<?php echo $item['image']; ?>" alt="" class="menuImg">
          <div class="menuText">
            <h2><?php echo $item['name'] ?></h2>
            <p>
              <?php echo $item['description'] ?>
            </p>
            <h3>$<?php echo $item['price'] ?></h3>
          </div>
        </div>
        <?php $i = $i + 3; ?>
      <?php endwhile; ?>
    </div>





    <div class="col3">
      <div class="menuButtonD desktop">
        <a href="drinks.php" class="menuButton">Drinks</a>
      </div>
      <?php
        $i = 2;
        $items = getMenuItems();
        while ($i < getNumberOfMenuItems()):
      ?>
        <?php $item = $items[$i]; ?>
        <div class="menuItem">
          <img src="<?php echo $item['image']; ?>" alt="" class="menuImg">
          <div class="menuText">
            <h2><?php echo $item['name'] ?></h2>
            <p>
              <?php echo $item['description'] ?>
            </p>
            <h3>$<?php echo $item['price'] ?></h3>
          </div>
        </div>
        <?php $i = $i + 3; ?>
      <?php endwhile; ?>
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
