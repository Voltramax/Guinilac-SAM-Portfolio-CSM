<?php
include_once('config.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../auth/admin.php");
        exit();
    } else {
		header("Location: ../index.php");
        echo "Invalid username or password";
    }
}

$conn->close();
