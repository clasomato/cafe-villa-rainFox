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
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <button type="button" id="changeQuoteButton" class="btn">Change Quote</button>
    </p>

    <script>
      // var button1 = document.getElementById("changeQuoteButton");
      //
      //
      // button1.onclick = function() {
      //   var newQuote = prompt("What is the new quote?")
      // }

    </script>

    <?php
    function changeQuote() {
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


      $sql = "UPDATE quotes SET quote='beeeee' WHERE id=1";

      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
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
