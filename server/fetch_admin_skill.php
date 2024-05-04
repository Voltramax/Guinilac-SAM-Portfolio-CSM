<?php
include 'config.php';

$sql = "SELECT skill_desc FROM admin LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    echo $row['skill_desc'];
} else {
    echo "No Admin skill description found";
}

$conn->close();

