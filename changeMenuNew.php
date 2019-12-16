<!doctype html>
<?
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}




function getName($id){
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


  $sql = "SELECT id, name FROM menu WHERE $id = id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
          echo $row["name"];
      }
  }
}


function getDescription($id){
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


  $sql = "SELECT id, description FROM menu WHERE $id = id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
          echo $row["description"];
      }
  }
}

function getPrice($id){
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


  $sql = "SELECT id, price FROM menu WHERE $id = id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
          echo $row["price"];
      }
  }
}

function getImage($id){
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


  $sql = "SELECT id, image FROM menu WHERE $id = id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_array()) {
          echo $row["image"];
      }
  }
}

  function removeItem($id){
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

    $sql = "DELETE FROM menu WHERE $id = id";

    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
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



  <div class="menuContainer">
    <a href="welcome.php">Go Back</a>
    <form class="" action="changeRemove.php" method="post">
      <h2>Add Item</h2>
      <h4>Name</h4> <input type="" name="name" value=""> <br>
      <h4>Description</h4> <input type="" name="description" value=""> <br>
      <h4>Price</h4> <input type="" name="price" value=""> <br>
      <h4>Image code <a href="https://www.base64-image.de/" target="_blank">Click this to get a code</a></h4> <input type="" name="image" value="" style="width: 90%;"> <br>
      <button type="submit" name="button">Submit</button>
    </form>


    <div class="col1">
      <div class="menuItem" id="menuText1">
        <img src="<?php getImage(1); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(1); ?></h2>
          <p id="menuPara1">
            <?php getDescription(1); ?>
          </p>
          <h3>$<?php getPrice(1); ?></h3>
          <form class="" action="<?php removeItem(1); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <!-- Bacon and Avocado Gourmet Sandwich -->
      <div class="menuItem" id="menuText4">
        <img src="<?php getImage(4); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(4); ?></h2>
          <p id="menuPara4">
            <?php getDescription(4); ?>
          </p>
          <h3>$<?php getPrice(4); ?></h3>
          <form class="" action="<?php removeItem(4); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText7">
        <img src="<?php getImage(7); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(7); ?></h2>
          <p id="menuPara7">
            <?php getDescription(7); ?>
          </p>
          <h3>$<?php getPrice(7); ?></h3>
          <form class="" action="<?php removeItem(7); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText10">
        <img src="<?php getImage(10); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(10); ?></h2>
          <p id="menuPara10">
            <?php getDescription(10); ?>
          </p>
          <h3>$<?php getPrice(10); ?></h3>
          <form class="" action="<?php removeItem(10); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText13">
        <img src="<?php getImage(13); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(13); ?></h2>
          <p id="menuPara13">
            <?php getDescription(13); ?>
          </p>
          <h3>$<?php getPrice(13); ?></h3>
          <form class="" action="<?php removeItem(13); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText16">
        <img src="<?php getImage(16); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(16); ?></h2>
          <p id="menuPara16">
            <?php getDescription(16); ?>
          </p>
          <h3>$<?php getPrice(16); ?></h3>
          <form class="" action="<?php removeItem(16); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText19">
        <img src="<?php getImage(19); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(19); ?></h2>
          <p id="menuPara19">
            <?php getDescription(19); ?>
          </p>
          <h3>$<?php getPrice(19); ?></h3>
          <form class="" action="<?php removeItem(19); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText22">
        <img src="<?php getImage(22); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(22); ?></h2>
          <p id="menuPara22">
            <?php getDescription(22); ?>
          </p>
          <h3>$<?php getPrice(22); ?></h3>
          <form class="" action="<?php removeItem(22); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText25">
        <img src="<?php getImage(25); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(25); ?></h2>
          <p id="menuPara25">
            <?php getDescription(25); ?>
          </p>
          <h3>$<?php getPrice(25); ?></h3>
          <form class="" action="<?php removeItem(25); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText28">
        <img src="<?php getImage(28); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(28); ?></h2>
          <p id="menuPara28">
            <?php getDescription(28); ?>
          </p>
          <h3>$<?php getPrice(28); ?></h3>
          <form class="" action="<?php removeItem(28); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText31">
        <img src="<?php getImage(31); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(31); ?></h2>
          <p id="menuPara31">
            <?php getDescription(31); ?>
          </p>
          <h3>$<?php getPrice(31); ?></h3>
          <form class="" action="<?php removeItem(31); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

    </div>


    <div class="col2">


      <div class="menuItem" id="menuText2">
        <img src="<?php getImage(2); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(2); ?></h2>
          <p id="menuPara2">
            <?php getDescription(2); ?>
          </p>
          <h3>$<?php getPrice(2); ?></h3>
          <form class="" action="<?php removeItem(2); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText5">
        <img src="<?php getImage(5); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(5); ?></h2>
          <p id="menuPara5">
            <?php getDescription(5); ?>
          </p>
          <h3>$<?php getPrice(5); ?></h3>
          <form class="" action="<?php removeItem(5); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText8">
        <img src="<?php getImage(8); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(8); ?></h2>
          <p id="menuPara8">
            <?php getDescription(8); ?>
          </p>
          <h3>$<?php getPrice(8); ?></h3>
          <form class="" action="<?php removeItem(8); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText11">
        <img src="<?php getImage(11); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(11); ?></h2>
          <p id="menuPara11">
            <?php getDescription(11); ?>
          </p>
          <h3>$<?php getPrice(11); ?></h3>
          <form class="" action="<?php removeItem(11); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText14">
        <img src="<?php getImage(14); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(14); ?></h2>
          <p id="menuPara14">
            <?php getDescription(14); ?>
          </p>
          <h3>$<?php getPrice(14); ?></h3>
          <form class="" action="<?php removeItem(14); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText17">
        <img src="<?php getImage(17); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(17); ?></h2>
          <p id="menuPara17">
            <?php getDescription(17); ?>
          </p>
          <h3>$<?php getPrice(17); ?></h3>
          <form class="" action="<?php removeItem(17); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText20">
        <img src="<?php getImage(20); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(20); ?></h2>
          <p id="menuPara20">
            <?php getDescription(20); ?>
          </p>
          <h3>$<?php getPrice(20); ?></h3>
          <form class="" action="<?php removeItem(20); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText23">
        <img src="<?php getImage(23); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(23); ?></h2>
          <p id="menuPara23">
            <?php getDescription(23); ?>
          </p>
          <h3>$<?php getPrice(23); ?></h3>
          <form class="" action="<?php removeItem(23); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText26">
        <img src="<?php getImage(26); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(26); ?></h2>
          <p id="menuPara26">
            <?php getDescription(26); ?>
          </p>
          <h3>$<?php getPrice(26); ?></h3>
          <form class="" action="<?php removeItem(26); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText29">
        <img src="<?php getImage(29); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(29); ?></h2>
          <p id="menuPara29">
            <?php getDescription(29); ?>
          </p>
          <h3>$<?php getPrice(29); ?></h3>
          <form class="" action="<?php removeItem(29); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText32">
        <img src="<?php getImage(32); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(32); ?></h2>
          <p id="menuPara32">
            <?php getDescription(32); ?>
          </p>
          <h3>$<?php getPrice(32); ?></h3>
          <form class="" action="<?php removeItem(32); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>


    </div>


    <div class="col3">
      <div class="menuItem" id="menuText3">
        <img src="<?php getImage(3); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(3); ?></h2>
          <p id="menuPara3">
            <?php getDescription(3); ?>
          </p>
          <h3>$<?php getPrice(3); ?></h3>
          <form class="" action=<?php removeItem(3); ?> method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText6">
        <img src="<?php getImage(6); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(6); ?></h2>
          <p id="menuPara6">
            <?php getDescription(6); ?>
          </p>
          <h3>$<?php getPrice(6); ?></h3>
          <form class="" action="<?php removeItem(6); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText9">
        <img src="<?php getImage(9); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(9); ?></h2>
          <p id="menuPara9">
            <?php getDescription(9); ?>
          </p>
          <h3>$<?php getPrice(9); ?></h3>
          <form class="" action="<?php removeItem(9); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText12">
        <img src="<?php getImage(12); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(12); ?></h2>
          <p id="menuPara12">
            <?php getDescription(12); ?>
          </p>
          <h3>$<?php getPrice(12); ?></h3>
          <form class="" action="<?php removeItem(12); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText15">
        <img src="<?php getImage(15); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(15); ?></h2>
          <p id="menuPara15">
            <?php getDescription(15); ?>
          </p>
          <h3>$<?php getPrice(15); ?></h3>
          <form class="" action="<?php removeItem(15); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText18">
        <img src="<?php getImage(18); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(18); ?></h2>
          <p id="menuPara18">
            <?php getDescription(18); ?>
          </p>
          <h3>$<?php getPrice(18); ?></h3>
          <form class="" action="<?php removeItem(18); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText21">
        <img src="<?php getImage(21); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(21); ?></h2>
          <p id="menuPara21">
            <?php getDescription(21); ?>
          </p>
          <h3>$<?php getPrice(21); ?></h3>
          <form class="" action="<?php removeItem(21); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText24">
        <img src="<?php getImage(24); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(24); ?></h2>
          <p id="menuPara24">
            <?php getDescription(24); ?>
          </p>
          <h3>$<?php getPrice(24); ?></h3>
          <form class="" action="<?php removeItem(24); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText27">
        <img src="<?php getImage(27); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(27); ?></h2>
          <p id="menuPara27">
            <?php getDescription(27); ?>
          </p>
          <h3>$<?php getPrice(27); ?></h3>
          <form class="" action="<?php removeItem(27); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>

      <div class="menuItem" id="menuText30">
        <img src="<?php getImage(30); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(30); ?></h2>
          <p id="menuPara30">
            <?php getDescription(30); ?>
          </p>
          <h3>$<?php getPrice(30); ?></h3>
          <form class="" action="<?php removeItem(30); ?>" method="post">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>




    </div>
  </div>





  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    if (document.getElementById("menuPara1").innerText === ""){
      document.getElementById("menuText1").style.display = "none";
    }

    if (document.getElementById("menuPara2").innerText === ""){
      document.getElementById("menuText2").style.display = "none";
    }

    if (document.getElementById("menuPara3").innerText === ""){
      document.getElementById("menuText3").style.display = "none";
    }

    if (document.getElementById("menuPara4").innerText === ""){
      document.getElementById("menuText4").style.display = "none";
    }

    if (document.getElementById("menuPara5").innerText === ""){
      document.getElementById("menuText5").style.display = "none";
    }

    if (document.getElementById("menuPara6").innerText === ""){
      document.getElementById("menuText6").style.display = "none";
    }

    if (document.getElementById("menuPara7").innerText === ""){
      document.getElementById("menuText7").style.display = "none";
    }

    if (document.getElementById("menuPara8").innerText === ""){
      document.getElementById("menuText8").style.display = "none";
    }

    if (document.getElementById("menuPara9").innerText === ""){
      document.getElementById("menuText9").style.display = "none";
    }

    if (document.getElementById("menuPara10").innerText === ""){
      document.getElementById("menuText10").style.display = "none";
    }

    if (document.getElementById("menuPara11").innerText === ""){
      document.getElementById("menuText11").style.display = "none";
    }

    if (document.getElementById("menuPara12").innerText === ""){
      document.getElementById("menuText12").style.display = "none";
    }

    if (document.getElementById("menuPara13").innerText === ""){
      document.getElementById("menuText13").style.display = "none";
    }

    if (document.getElementById("menuPara14").innerText === ""){
      document.getElementById("menuText14").style.display = "none";
    }

    if (document.getElementById("menuPara15").innerText === ""){
      document.getElementById("menuText15").style.display = "none";
    }

    if (document.getElementById("menuPara16").innerText === ""){
      document.getElementById("menuText16").style.display = "none";
    }

    if (document.getElementById("menuPara17").innerText === ""){
      document.getElementById("menuText17").style.display = "none";
    }

    if (document.getElementById("menuPara18").innerText === ""){
      document.getElementById("menuText18").style.display = "none";
    }

    if (document.getElementById("menuPara19").innerText === ""){
      document.getElementById("menuText19").style.display = "none";
    }

    if (document.getElementById("menuPara20").innerText === ""){
      document.getElementById("menuText20").style.display = "none";
    }

    if (document.getElementById("menuPara21").innerText === ""){
      document.getElementById("menuText21").style.display = "none";
    }

    if (document.getElementById("menuPara22").innerText === ""){
      document.getElementById("menuText22").style.display = "none";
    }

    if (document.getElementById("menuPara23").innerText === ""){
      document.getElementById("menuText23").style.display = "none";
    }

    if (document.getElementById("menuPara24").innerText === ""){
      document.getElementById("menuText24").style.display = "none";
    }

    if (document.getElementById("menuPara25").innerText === ""){
      document.getElementById("menuText25").style.display = "none";
    }

    if (document.getElementById("menuPara26").innerText === ""){
      document.getElementById("menuText26").style.display = "none";
    }

    if (document.getElementById("menuPara27").innerText === ""){
      document.getElementById("menuText27").style.display = "none";
    }

    if (document.getElementById("menuPara28").innerText === ""){
      document.getElementById("menuText28").style.display = "none";
    }

    if (document.getElementById("menuPara29").innerText === ""){
      document.getElementById("menuText29").style.display = "none";
    }

    if (document.getElementById("menuPara30").innerText === ""){
      document.getElementById("menuText30").style.display = "none";
    }

    if (document.getElementById("menuPara31").innerText === ""){
      document.getElementById("menuText31").style.display = "none";
    }

    if (document.getElementById("menuPara32").innerText === ""){
      document.getElementById("menuText32").style.display = "none";
    }

  </script>

</body>
