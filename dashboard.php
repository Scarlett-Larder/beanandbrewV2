<?php 
    include("connection.php");
?>
<?php 
    include("header.php");
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="main.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Aleo&display=swap');
  </style>
</head>

<body>
    <br>
    <a href="logout_script.php" class='header_title size'>Log out</a>
    <br>
    <br>
    <?php 
        session_start();
        if (isset($_COOKIE["user"])) {
            $username = $_COOKIE["user"];
            echo "<h1 class='header_title'>Welcome back, ". $_COOKIE['user']. "</h1>";
        } 
        elseif (isset($_SESSION["user"])) {
            $username = $_SESSION["user"];
            echo "<h1 class='header_title'>Welcome back, ". $_SESSION["user"]. "</h1>";
        }
        else {
            echo "No users are logged in!";
        }
        $sql = "SELECT * FROM orders
        JOIN user ON orders.id = user.id
        WHERE user.name = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<br> <h3 class='dash_order'>ID: ". $row["id"] . " Date: " . $row["Order_date"] . "<br> Contents: " . $row["Order_contents"] . "<br> <br></h3>";
            }
          } 
          else {
              echo "No orders found for the user.";
          }
          $conn->close();
    ?>
</body>

</html>