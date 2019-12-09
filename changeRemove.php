<?php
function newItem($id, $name, $description, $price, $image) {

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

  $sql = "INSERT INTO menu SET name='$name', description='$description', price='$price', image='$image' ";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}



$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];

newItem(1, $name, $description, $price, $image);
?>
