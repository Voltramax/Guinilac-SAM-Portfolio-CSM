<?php
include ('admin-include/header.php');
?>

<div class="container-fluid px-0">
	<ol class="breadcrumb mb-4">
		<h1></h1>
	</ol>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<hr>
			<div class="row">
				<div class="col-md-4">
					<!-- Profile Picture Card -->
					<div class="card mt-1">
						<?php
						$sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 1";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							if (!empty($row['profile_image']) && !empty($row['image_type'])) {
								$imageData = base64_encode($row['profile_image']);
								$imageType = $row['image_type'];
								echo '<img src="data:image/' . $imageType . ';base64,' . $imageData . '" class="card-img-top img-fluid" alt="Profile Picture" style="width: 100%; height: 350px;">';
							} else {
								echo '<img src="../admin-include/style/assets/img/default.png" class="card-img-top img-fluid" alt="Default Profile Picture">';
							}
						} else {
							echo '<img src="../admin-include/style/assets/img/default.png" class="card-img-top img-fluid" alt="Default Profile Picture">';
						}
						?>
					</div>
				</div>
				<div class="col-md-8">
					<div class="profile-info border rounded p-3">
						<div class="row">
							<div class="col-md-8">
								<h1 class="mt-3"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></h1>
							</div>
							<div class="col-md-8">
								<p><?php echo $row['job']; ?></p>
							</div>
							<div class="col-md-8">
								<h6>Contact Info</h6>
							</div>
							<div class="col-md-8">
								<div class="line-dec"></div>
								<p><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></p>
							</div>
							<div class="col-md-8">
								<div class="line-dec"></div>
								<p><i class="fa fa-phone"></i> <?php echo $row['phone']; ?></p>
							</div>
							<div class="col-md-8">
								<div class="line-dec"></div>
								<p><i class="fab fa-linkedin"></i> <?php echo $row['linkin']; ?></p>
							</div>
							<div class="col-md-8">
								<p><i class="fab fa-github"></i> <?php echo $row['github']; ?></p>
							</div>
							<div class="col-md-8">
								<p><i class="fab fa-facebook"></i> <?php echo $row['fb']; ?></p>
							</div>
							<div class="col-md-8">
								<p><i class="fab fa-youtube"></i> <?php echo $row['yt']; ?></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit
						Profile</a>
				</div>

			</div>
			<hr>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="api/updateProfile.php" method="POST" enctype="multipart/form-data">
					<div class="mb-2">
						<label for="firstName" class="form-label">FirstName:</label>
						<input type="text" class="form-control" id="firstName" name="firstName">
					</div>
					<div class="mb-2">
						<label for="lastName" class="form-label">LastName:</label>
						<input type="text" class="form-control" id="lastName" name="lastName">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">Job:</label>
						<input type="text" class="form-control" id="job" name="job">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">Email:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">Phone:</label>
						<input type="number" class="form-control" id="number" name="phone">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">LinkedIN:</label>
						<input type="text" class="form-control" id="linkin" name="linkin">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">GitHub:</label>
						<input type="text" class="form-control" id="github" name="github">
					</div>
					<div class="mb-3">
						<label for="job" class="form-label">Facebook:</label>
						<input type="text" class="form-control" id="fb" name="fb">
					</div>

					<div class="mb-3">
						<label for="job" class="form-label">Youtube:</label>
						<input type="text" class="form-control" id="yt" name="yt">
					</div>
					<div class="mb-3">
						<label for="profileImage" class="form-label">Profile Image</label>
						<input type="file" class="form-control" id="profileImage" name="profileImage">
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include ('admin-include/footer.php');
include ('admin-include/scripts.php');
?>