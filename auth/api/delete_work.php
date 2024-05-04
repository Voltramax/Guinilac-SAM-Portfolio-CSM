<?php
include('../../server/config.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "DELETE FROM myworks WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location:../mywork.php');
            echo "Work deleted successfully.";
        } else {
            echo "Error: Work not found or could not be deleted.";
        }
        
        $stmt->close();
    } else {
        http_response_code(400);
        echo "Error: id is missing.";
    }
} else {
    http_response_code(405);
    echo "Error: Method not allowed.";
}
