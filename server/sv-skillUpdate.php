<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skill-update'])) {
   
    $htmlSkill = $_POST['htmlSkill'];
    $jsSkill = $_POST['jsSkill'];
    $dbmsSkill = $_POST['dbmsSkill'];
    $adminSkill = $_POST['adminSkill'];

    $sql = "UPDATE html SET skill_desc = '$htmlSkill' WHERE id = 1";
    $conn->query($sql);

    $sql = "UPDATE javascript SET skill_desc = '$jsSkill' WHERE id = 1";
    $conn->query($sql);

    $sql = "UPDATE dbms SET skill_desc = '$dbmsSkill' WHERE id = 1";
    $conn->query($sql);

    $sql = "UPDATE admin SET skill_desc = '$adminSkill' WHERE id = 1";
    $conn->query($sql);

    $conn->close();

    header("Location: ../auth/admin.php");
    exit;
}

