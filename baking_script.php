<?php 
    include ("connection.php"); 
    if (isset($_POST['submit'])) {
        $time = $_POST["time"];
        $Location = $_POST["location"];
        $Lesson = $_POST["lesson"];

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
    $sql = "INSERT INTO baking (id, Lesson_time, Location, Lesson_type) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $id, $time, $Location, $Lesson);

        if (mysqli_stmt_execute($stmt)) {
            echo "Order placed successfully.";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing SQL statement.";
    }
?>