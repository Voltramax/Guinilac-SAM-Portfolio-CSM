<?php
include 'config.php';

$sql = "SELECT skill_desc FROM dbms LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['skill_desc'];
} else {
    echo "No Database Management skill description found";
}

$conn->close();

