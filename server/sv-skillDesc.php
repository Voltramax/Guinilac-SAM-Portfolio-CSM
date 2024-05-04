<?php
include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skill-submit'])) {
 
    $html_css = $_POST['html'];
    $javascript = $_POST['javascript'];
    $db_management = $_POST['dbms'];
    $analytics = $_POST['analytics'];

    $sql_html_css = "INSERT INTO html (skill_desc) VALUES ('$html_css')";
    $sql_javascript = "INSERT INTO javascript (skill_desc) VALUES ('$javascript')";
    $sql_db_management = "INSERT INTO dbms (skill_desc) VALUES ('$db_management')";
    $sql_analytics = "INSERT INTO admin (skill_desc) VALUES ('$analytics')";

    if ($conn->query($sql_html_css) === TRUE &&
        $conn->query($sql_javascript) === TRUE &&
        $conn->query($sql_db_management) === TRUE &&
        $conn->query($sql_analytics) === TRUE) {
        $_SESSION['message'] = "Data inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

