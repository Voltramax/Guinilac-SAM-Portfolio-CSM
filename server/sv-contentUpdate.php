<?php
include_once('../server/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['contentsID'])) {
 
        $contentsID = $_POST['contentsID'];
        $contents = $_POST['contents'];

        if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
 
            $imageData = file_get_contents($_FILES['image']['tmp_name']);
            $query = "UPDATE aboutme SET contents = ?, image_data = ? WHERE contentsID = ?";
            $stmt = mysqli_prepare($conn, $query);

            mysqli_stmt_bind_param($stmt, "sbi", $contents, $imageData, $contentsID);
        } else {

            $query = "UPDATE aboutme SET contents = ? WHERE contentsID = ?";
            $stmt = mysqli_prepare($conn, $query);

            mysqli_stmt_bind_param($stmt, "si", $contents, $contentsID);
        }

        if(mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Failed to update record.";
        }
    } else {
        echo "contentsID not provided.";
    }
} else {
    header("Location: ../auth/contentOne.php");
    exit();
}

