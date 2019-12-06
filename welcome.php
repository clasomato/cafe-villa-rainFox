<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your dashboard</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="index.php" class="btn btn-warning">Return To Home</a>
    </p>

    <form class="" action="submit.php" method="post">
      <input type="" name="quote" value=" <?php getQuote(1); ?> ">

      <button type="submit" name="button">Update Quote</button>
    </form>

    <style media="screen">
      input {
        width: 20%;
        height: 5%;
        font-size: 1.2em;
        font: 14px sans-serif;
      }
    </style>

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


      $sql = "UPDATE quotes SET quote=$quote WHERE id=$id";

      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }



    // GETING THE DAM QUOTE
    function getQuote($id){
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


      $sql = "SELECT id, quote FROM quotes WHERE $id = id";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_array()) {
              echo $row["quote"];
          }
      }
    }



     ?>

     <script>
     var button = document.getElementById("button");

     button.onclick = function () {
       document.write(" <?php changeQuote(); ?> ");
     };
     </script>


</body>
</html>
