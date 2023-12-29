<?php 
    include('connection.php');

    if (isset($_POST['submit'])) {
        session_start();
        $loca = $_POST['location'];
        $time = $_POST['time'];
        $order = $_SESSION['order'];
        echo''.$order;
        $sql = "INSERT INTO user (name, password, email, birthday) VALUES (?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $bday);
            if (mysqli_stmt_execute($stmt)) {
                header("location: register.php");
                exit();
            } else {
                echo '<script>
                        window.location.href = "index.php";
                        alert("Registration failed. Please try again.")
                    </script>';
            }
        }
    }
?>