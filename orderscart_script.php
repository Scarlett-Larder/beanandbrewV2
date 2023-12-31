<?php 
    include('connection.php');
    session_start();
    if (isset($_POST['submit'])) {
        $name2 = [];
        $loc = $_POST['location'];
        $time = $_POST['time'];
        foreach ($_SESSION['cart'] as $item) {
            $wow = $item['name'];
            $name2[] = $wow;
            $quantity = $item['qty'];
            $price = $item['price'];
        }
        if (isset($_COOKIE["id"])) {
            $id = $_COOKIE["id"];
        } 
        elseif (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
        }
        else {
            echo "No users are logged in!";
        }
        $name = implode(" | ",$name2); 
        $sql = "INSERT INTO orders (Order_Contents, Total, Location, Order_date, id) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
    
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $price, $loc, $time, $id);
    
            if (mysqli_stmt_execute($stmt)) {
                echo "Order placed successfully.";
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }
    
            mysqli_stmt_close($stmt);
        } else {
            echo "Error in preparing SQL statement.";
        }
    
        mysqli_close($conn);
    }
?>