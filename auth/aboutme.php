<?php
include ('admin-include/header.php');
?>

<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">CONTENTS</li>
	</ol>

	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Contents</th>
						<th>Image</th>
						<th>Timestamp</th>
						<th>Manage</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include_once ('../server/config.php');

					$query = "SELECT * FROM aboutme ORDER BY timestamp DESC";
					$result = mysqli_query($conn, $query);

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$contentsID = $row['contentsID'];
							echo "<tr>";
							echo "<td>" . $row['contents'] . "</td>";
							if (!empty($row['image_data'])) {
								echo "<td><img src='data:image/png;base64," . base64_encode($row['image_data']) . "' alt='About Me Image' style='max-width: 100px; max-height: 100px;'></td>";
							} else {
								echo "<td>No image</td>";
							}

							echo "<td>" . $row['timestamp'] . "</td>";
							echo "<td>";

							echo "<div style='margin-top: 12px;'></div>";
							echo "<a href='../auth/contentUpdate.php?contentsID=" . $row['contentsID'] . "' class='btn btn-warning btn-sm'>Update</a>";
							echo "<div style='margin-top: 12px;'></div>";
							echo "<a href='../auth/delete.php?contentsID=" . $row['contentsID'] . "' class='btn btn-warning btn-sm'>Delete</a>";
							echo "</td>";
							echo "</tr>";
						}
					} else {
						echo "<tr><td colspan='5'>No data found</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include ('admin-include/footer.php');
include ('admin-include/scripts.php');
?>