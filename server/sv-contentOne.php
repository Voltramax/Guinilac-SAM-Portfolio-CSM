<?php

include_once('../server/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contentOne-submit'])) {

    if (isset($_POST['contents']) && isset($_FILES['image'])) {
        $contents = $_POST['contents'];
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $timestamp = date("Y-m-d H:i:s"); 

        $query = "INSERT INTO aboutme (contents, image_data, timestamp) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt === false) {
            
            $_SESSION['message'] = 'Error: ' . mysqli_error($conn);
        } else {
           
            $success = mysqli_stmt_bind_param($stmt, "sss", $contents, $imageData, $timestamp);

            if ($success === false) {
                $_SESSION['message'] = 'Error: Unable to bind parameters';
            } else {
                $success = mysqli_stmt_execute($stmt);

                if ($success === false) {
                    $_SESSION['message'] = 'Error: ' . mysqli_error($conn);
                } else {
                    $_SESSION['message'] = "Data inserted successfully!";
					header('Location admin.php');
                }
            }
            mysqli_stmt_close($stmt);
        }
        header('Location: ../auth/contentOne.php');
        exit();
    } else {
        $_SESSION['message'] = "Please fill all required fields.";
        header('Location: ../auth/contentOne.php');
        exit();
    }
}

header('Location: ../auth/contentOne.php');
exit();

