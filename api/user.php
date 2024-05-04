<?php
$sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 1";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
	$row = $result->fetch_assoc();
	if ( !empty( $row[ 'profile_image' ] ) && !empty( $row[ 'image_type' ] ) ) {
		$imageData = base64_encode( $row[ 'profile_image' ] );
		$imageType = $row[ 'image_type' ];
		echo '<img src="data:image/' . $imageType . ';base64,' . $imageData . '" class="card-img-top img-fluid" alt="Profile Picture>';
	} else {
		echo '<img src="../admin-include/style/assets/img/default.png" class="card-img-top img-fluid" alt="Default Profile Picture">';
	}
} else {
	echo '<img src="../admin-include/style/assets/img/default.png" class="card-img-top img-fluid" alt="Default Profile Picture">';
}
?>
</div>