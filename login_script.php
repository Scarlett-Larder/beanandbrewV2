<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $cook = isset($_POST['cookie']) ? $_POST['cookie'] : '';

    $sql = "SELECT * FROM user WHERE name = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $stored_hashed_password = trim($row['password']);
                echo ''.$stored_hashed_password;
                if (password_verify($password, $stored_hashed_password)) {
                    if ($cook == 'cookie') {
                        setcookie("user", $username, time() + 3000, "/", "", true, true);
                        setcookie("pass", $password, time() + 3000, "/", "", true, true);
                    } else {
                        session_start();
                        $_SESSION["user"] = $username;
                        $_SESSION["pass"] = $password;
                        echo "Session variables are set.";
                    }
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo '<script>
                            alert("Login failed. Invalid password!");
                            window.location.href = "page.php";
                          </script>';
                }
            } else {
                echo '<script>
                        alert("Login failed. User not found!");
                        window.location.href = "page.php";
                      </script>';
            }
        } else {
            echo '<script>
                    alert("Login failed. Database error!");
                    window.location.href = "page.php";
                  </script>';
        }

        mysqli_stmt_close($stmt);
    } else {
        echo '<script>
                alert("Login failed. Database error!");
                window.location.href = "page.php";
              </script>';
    }
}
?>