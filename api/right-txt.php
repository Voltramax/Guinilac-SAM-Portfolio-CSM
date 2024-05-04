<?php
$sql = "SELECT contents FROM aboutme ORDER BY timestamp DESC LIMIT 1 OFFSET 1";
$result = $conn->query( $sql );

if ( $result === false ) {

	echo "Error: " . $conn->error;
} else {

	if ( $result->num_rows > 0 ) {
		$row = $result->fetch_assoc();
		$contents = $row[ 'contents' ];
		echo "<p>" . $contents . "</p>";
	} else {

		echo "<h3>No content available.</h3>";
	}
}
?>
<div class="white-button">
	<a href="#">Read More</a>
</div>
</div>