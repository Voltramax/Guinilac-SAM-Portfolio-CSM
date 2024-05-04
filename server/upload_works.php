<?php
include ('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['title']) && isset($_FILES['workImage'])) {
        $title = $_POST['title'];
        $image_data = file_get_contents($_FILES['workImage']['tmp_name']);
        $timestamp = date('Y-m-d H:i:s');
        
        $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
        $file_type = $_FILES['workImage']['type'];
        if (!in_array($file_type, $allowed_types)) {
            echo "Error: Only JPG, PNG, and GIF files are allowed.";
            exit;
        }

        $sql = "INSERT INTO myworks (title, image_data, timestamp) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $image_data, $timestamp);
        
        if ($stmt->execute()) {
            echo "Work uploaded successfully.";
            header('Location:../auth/mywork.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "Error: Title or file is missing.";
    }
} else {
    echo "Invalid request method.";
}
