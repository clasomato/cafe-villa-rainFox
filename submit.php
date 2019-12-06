<?php
  function changeQuote($id, $quote) {
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


    $sql = "UPDATE quotes SET quote='$quote' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }


  $quote = $_POST["quote"];
  changeQuote(1, $quote);
 ?>

 <script>
  window.setTimeout(() => window.history.back(), 2000);

 </script>
