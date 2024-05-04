<?php

  $sql = "SELECT image_data FROM aboutme ORDER BY timestamp DESC LIMIT 1";
  $result = $conn->query($sql);
if ( $result === false ) {

	echo "Error: " . $conn->error;
	
} else {
	if ( $result->num_rows > 0 ) {
		$row = $result->fetch_assoc();
		$imageData = $row[ 'image_data' ];
		$base64 = base64_encode( $imageData );
		$imageType = 'jpeg';
		$src = "data:image/" . $imageType . ";base64," . $base64;
		echo "<img src='$src'width='300' height='300'><br>";
	} else {

		echo "<h3>No image uploaded yet.</h3>";
	}
}
?>

</div>