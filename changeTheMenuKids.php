<!doctype html>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


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


  $sql = "SELECT * FROM menuKids";

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


  $sql = "SELECT * FROM menuKids";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // var_dump($result);
    // var_dump(array($result));
    return mysqli_num_rows($result);
  }
};
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
  <div class="menuContainer" style="overflow: auto;">
    <a href="changeTheMenu.php">Go Back</a>
    <form class="" action="changeRemove-kids.php" method="post" enctype="multipart/form-data">
      <h2>Add Item</h2>
      <h4>Name</h4> <input type="" name="name" value=""> <br>
      <h4>Description</h4> <input type="" name="description" value=""> <br>
      <h4>Price</h4> <input type="" name="price" value=""> <br>
      <h4>Image</h4>
      <input type="file" name="imageToUpload" id="imageToUpload" style="width: 90%;"> <br>
      <button type="submit" name="button">Submit</button>
    </form>
    <br>
    <h1 style="text-align: center;">Kids Menu</h1>
    <br>
    <div class="col1" style="overflow: auto;">
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
              <form class="" action="removeItemKids.php" method="post">
                <input name="id" style="display: none;" value="<?php echo $item['id'] ?>">
                <button type="submit" name="button">Remove</button>
              </form>
            </div>
          </div>
          <?php $i = $i + 3; ?>
        <?php endwhile; ?>
    </div>
    <div class="col2">
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
            <form class="" action="removeItemKids.php" method="post">
              <input name="id" style="display: none;" value="<?php echo $item['id'] ?>">
              <button type="submit" name="button">Remove</button>
            </form>
          </div>
        </div>
        <?php $i = $i + 3; ?>
      <?php endwhile; ?>
    </div>
    <div class="col3">
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
            <form class="" action="removeItemKids.php" method="post">
              <input name="id" style="display: none;" value="<?php echo $item['id'] ?>">
              <button type="submit" name="button">Remove</button>
            </form>
          </div>
        </div>
        <?php $i = $i + 3; ?>
      <?php endwhile; ?>
    </div>

  </div>













  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- <script>
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

  </script> -->

</body>
