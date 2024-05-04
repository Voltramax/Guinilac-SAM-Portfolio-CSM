			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-bar me-1"></i> INQUIRIES
				</div>
				<?php
						$sql = "SELECT DATE(date_stamp) AS inquiry_date, COUNT(*) AS total_inquiries FROM inquiries GROUP BY DATE(date_stamp)";
						$result = $conn->query($sql);
						$inquiry_data = array();

						if ($result && $result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								$inquiry_data[$row['inquiry_date']] = $row['total_inquiries'];
							}
						} else {
							echo "No inquiries found.";
						}
				?>
				<div class="card-body"><canvas id="inquiriesChart" width="100%" height="40"></canvas>
				</div>
			</div>
		</div> 