<?php
include('../../server/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_button'])) {
    if (isset($_POST['contentsID']) && is_numeric($_POST['contentsID'])) {
        $contentsID = $_POST['contentsID'];
        $contents = $_POST['contents'];
        $timestamp = date('Y-m-d H:i:s');
        
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imageData = file_get_contents($_FILES['image']['tmp_name']);
            
            if ($imageData === false) {
                $updateFailureMessage = "Failed to read image data.";
            } else {
                $updateQuery = "UPDATE aboutme SET contents = ?, image_data = ?, timestamp = ? WHERE contentsID = ?";
                if ($stmt = mysqli_prepare($conn, $updateQuery)) {
                    mysqli_stmt_bind_param($stmt, "sssi", $contents, $imageData, $timestamp, $contentsID);
                    if (mysqli_stmt_execute($stmt)) {
                        $updateSuccessMessage = "Record updated successfully.";
                    } else {
                        $updateFailureMessage = "Failed to update record: " . mysqli_error($conn);
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    $updateFailureMessage = "Failed to prepare the update statement.";
                }
            }
       
                $updateFailureMessage = "Failed to prepare the update statement.";
            
        }
    } else {
        $updateFailureMessage = "Invalid or missing contentsID.";
    }
    
    header("Location: ../aboutme.php");
    exit();
} else {
    header("Location: ../admin.php");
    exit();
}
