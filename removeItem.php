<?php
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
  if ($conn->query($sql) === TRUE) {
    echo "Record Deleted successfully";
  } else {
    echo "Error Deleting record: " . $conn->error;
  }
};

$id = $_POST["id"];
removeItem($id);

 ?>
 <script>
  window.setTimeout(() => window.history.back(), 2000);
 </script>
