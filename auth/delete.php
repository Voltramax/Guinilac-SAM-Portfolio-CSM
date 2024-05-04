<?php
include('../server/config.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['contentsID'])) {
        $contentsID = intval($_GET['contentsID']); 
        
        $sql = "DELETE FROM aboutme WHERE contentsID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $contentsID); 
        
        if ($stmt->execute()) {
            session_start();
            $_SESSION['delete_success'] = true;
            header('Location: aboutme.php');
            exit();
        } else {
            http_response_code(500);
            echo "Error deleting content: " . $stmt->error;
        }
    } else {
        http_response_code(400); 
        echo "Bad request: contentsID is missing.";
    }
} else {
    http_response_code(405); 
    echo "Method not allowed: Only GET requests are accepted.";
}

