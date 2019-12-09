<!doctype html>
<?
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

 ?>



<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Console</title>
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
  <style>

  </style>

  <form class="" action="changeRemove.php" method="post">
    <h2>Add Item</h2>
    <input type="" name="name" value="">
    <input type="" name="description" value="">
    <input type="" name="price" value="">
    <input type="" name="image" value="">
    <button type="submit" name="button">Submit</button>
  </form>

  <div class="menuContainer">



    <div class="col1">

      <div class="menuItem" id="menuText1">
        <img src="<?php getImage(2); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(2); ?></h2>
          <p id="menuPara1">
            <?php getDescription(2); ?>
          </p>
          <h3>$<?php getPrice(2); ?></h3>
        </div>
      </div>



      <div class="menuItem" id="menuText2">
        <img src="<?php getImage(3); ?>" alt="" class="menuImg">
        <div class="menuText">
          <h2><?php getName(3); ?></h2>
          <p id="menuPara2">
            <?php getDescription(3); ?>
          </p>
          <h3>$<?php getPrice(3); ?></h3>
        </div>
      </div>







    </div>
  </div>




  <!-- Javascript Area -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script>
    function paraShowHide() {
      // var para = document.getElementsByClassName("menuPara");
      // var menuItem = document.getElementsByClassName("menuItem");
      console.log('ooo')
      if (document.getElementById("menuPara1").innerText === ""){
        document.getElementById("menuText1").style.display = "none";
      }
    }

    function paraShowHide() {
      // var para = document.getElementsByClassName("menuPara");
      // var menuItem = document.getElementsByClassName("menuItem");
      console.log('ooo')
      if (document.getElementById("menuPara2").innerText === ""){
        document.getElementById("menuText2").style.display = "none";
      }
    }


    paraShowHide();
  </script>

</body>
