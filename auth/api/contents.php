<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-chart-area me-1"></i> MY CONTENTS
	</div>
	<?php 
		$sqlc = "SELECT DATE(timestamp) AS timestamp, COUNT(*) AS total_contents FROM aboutme GROUP BY DATE(timestamp)";
		$resultc = $conn->query($sqlc);
		$contents_data = array();
					
			if ($resultc && $resultc->num_rows > 0){
				while ($row = $resultc->fetch_assoc()){
					$contents_data[$row['timestamp']] = $row['total_contents'];
						}
					} else {
						echo "No Contents Found";
					}
				?>
	<div class="card-body"><canvas id="myContentsChart" width="100%" height="40"></canvas>
	</div>
</div>