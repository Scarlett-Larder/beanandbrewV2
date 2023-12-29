<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST['email'];
    $bday = $_POST['bday'];
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