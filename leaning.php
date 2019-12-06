<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
//
// $sql = "SELECT id, username, password FROM users";
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//         echo "id: " . $row["id"]. " - Name: " . $row["username"]. "     " . $row["password"] .  "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Sending Data To the base

// $sql = "INSERT INTO quotes (quote)
// VALUES ('John')";
//
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }




// Getting Data from the DB
// $sql = "SELECT quote FROM quotes";
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//         echo "Quote of the day!" .  "<br>" . $row["quote"];
//     }
// } else {
//     echo "0 results";
// }


// function changeQuote() {
//   $servername = "localhost";
//   $username = "root";
//   $password = "";
//   $dbname = "login";
//
//   $conn = new mysqli($servername, $username, $password, $dbname);
//   $sql = "SELECT quote FROM quotes";
//   $result = $conn->query($sql);
//
//   if ($result->num_rows > 0) {
//       // output data of each row
//       while($row = $result->fetch_assoc()) {
//           // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//           echo "Quote of the day!" .  "<br>" . $row["quote"];
//       }
//   } else {
//       echo "0 results";
//   }
// }

// changeQuote();

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" id="button" onclick=" <?php changeQuote(); ?> ">Yes</button>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    button = document.getElementById("button");

    button.onclick = function () {
      document.write(" <?php changeQuote(); ?> ");
    };



  </script>

</body>
</html>
