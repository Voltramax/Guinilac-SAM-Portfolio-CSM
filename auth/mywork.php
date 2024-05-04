<?php
include( 'admin-include/header.php' );
?>

<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">MY WORKS</li>
	</ol>

	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Title</th>
						<th>Image</th>
						<th>Timestamp</th>
                        <th>ACTION</th>
					</tr>
				</thead>
			<tbody>
            <?php
                $sql = "SELECT id, title, image_data, timestamp FROM myworks ORDER BY timestamp DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td><img src='data:image/png;base64," . base64_encode($row['image_data']) . "' alt='Work Image' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td>" . $row['timestamp'] . "</td>";
                        echo "<td><a href='../auth/api/delete_work.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Delete</a>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No works found</td></tr>";
                }
            ?>

				</tbody>
			</table>
            <button class='btn btn-primary btn-sm' data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Works</button>
		</div>
	</div>
</div>

<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Works</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadWorksForm" action="../server/upload_works.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <select class="form-select" id="title" name="title" required>
                            <option value="">Select a title</option>
                            <option value="HTML & CSS">HTML & CSS</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Database Management">Database Management</option>
                            <option value="Analytics">Analytics</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="workImage" class="form-label">Work Image</label>
                        <input type="file" class="form-control" id="workImage" name="workImage" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include( 'admin-include/footer.php' );
include( 'admin-include/scripts.php' );
?>