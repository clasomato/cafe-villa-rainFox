<?php
function getJobsItems(){
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


  $sql = "SELECT * FROM jobs";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $rows = [];
      while($row = mysqli_fetch_array($result)) {
          $rows[] = $row;
      }
      return $rows;
  }
};


function getNumberOfJobsItems(){
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


  $sql = "SELECT * FROM jobs";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // var_dump($result);
    // var_dump(array($result));
    return mysqli_num_rows($result);
  }
};
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="welcome.php">Go Back</a>
    <hr>
    <form class="" action="jobs.php" method="post">
      <input type="" name="position" value="Position">
      <input type="" name="description" value="Description">
      <button type="submit" name="button">Submit</button>
    </form>





    <br>
    <?php
      $i = 0;
      $items = getJobsItems();
      while ($i < getNumberOfJobsItems()):
    ?>
      <?php $item = $items[$i]; ?>
      <div class="menuItem">
        <div class="menuText">
          <h2><?php echo $item['position'] ?></h2>
          <p>
            <?php echo $item['description'] ?>
          </p>
          <form class="" action="removeJob.php" method="post">
            <input name="id" style="display: none;" value="<?php echo $item['id'] ?>">
            <button type="submit" name="button">Remove</button>
          </form>
        </div>
      </div>
      <hr>
      <?php $i = $i + 1; ?>
    <?php endwhile; ?>
  </body>
</html>
