<?php
function getNumberOfMenuItemsDrinks(){
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


  $sql = "SELECT * FROM menuDrinks";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // var_dump($result);
    // var_dump(array($result));
    return mysqli_num_rows($result);
  }
};

function newItemDrinks($id, $name, $description, $price, $image) {

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

  $sql = "INSERT INTO menuDrinks SET name='$name', description='$description', price='$price', image='$image' ";


  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}


$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];

$file = $_FILES["imageToUpload"];

$type = $file['type'];
$data = file_get_contents($file['tmp_name']);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

newItemDrinks(getNumberOfMenuItemsDrinks(), $name, $description, $price, $base64);
?>
