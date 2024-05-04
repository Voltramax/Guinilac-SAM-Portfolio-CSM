<?php
include_once('../server/config.php');

if (isset($_GET['id'])) {

    $contentsID = $_GET['id'];
    $query = "DELETE FROM aboutme WHERE contentsID = ?";
    $stmt = mysqli_prepare($conn, $query);
    
    mysqli_stmt_bind_param($stmt, "i", $contentsID);
    
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Record deleted successfully.";
    } else {
        echo "Failed to delete record.";
    }
} else {
    echo "contentsID not provided.";
}

