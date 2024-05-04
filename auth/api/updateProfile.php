<?php

	include('../../server/config.php');

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
			
			$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
			$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
			$job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
			$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
			$linkin = filter_var($_POST['linkin'],FILTER_SANITIZE_STRING);
			$github = filter_var($_POST['github'],FILTER_SANITIZE_STRING);
			$fb = filter_var($_POST['fb'],FILTER_SANITIZE_STRING);
			$yt = filter_var($_POST['yt'],FILTER_SANITIZE_STRING);

			if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
	
				$imageData = file_get_contents($_FILES['profileImage']['tmp_name']);
				$imageType = $_FILES['profileImage']['type'];

				$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, job, email, phone, linkin, github, fb, yt, profile_image, image_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("sssssssssss", $firstName, $lastName, $job, $email, $phone, $linkin, $github, $fb, $yt, $imageData, $imageType);
				$stmt->execute();

				if ($stmt->affected_rows > 0) {
					header('Location: ../profile.php');
					echo "Profile updated successfully.";
					exit();
				} else {
					echo "Error updating profile: " . $stmt->error;
				}
			} else {
				echo "Error uploading image.";
			}
		}

