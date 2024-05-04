<?php
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $timestamp = date("Y-m-d H:i:s");

        $sql = "INSERT INTO inquiries (name, email, subject, message, date_stamp) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $email, $subject, $message, $timestamp);

        if ($stmt->execute()) {
            header('Location: ../index.php?-Your message has been sent successfully');
            echo "Your message has been sent successfully.";
        } else {
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
        $stmt->close();
        $conn->close();
    } else {

        echo "No form submission detected.";
    }
} else {
    echo "Sorry, only POST requests are allowed.";
}
