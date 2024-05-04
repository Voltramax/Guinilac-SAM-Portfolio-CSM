<?php
session_start();
include( 'admin-include/header.php' );
include( '../server/message.php' );
?>

<?php
if ( !empty( $message ) ) {
	showMessage( $message, $success ? 'success' : 'danger' );
}
?>
<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">SKILL DESCRIPTION</li>
	</ol>
	<script>
		var message = "<?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?>";
		if ( message !== '' ) {
			alert( message );
		}
	</script>
	<div class="row">
		<div class="container">
			<form id="addContentForm" action="../server/sv-skillDesc.php" method="post" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="contents" class="form-label">HTML & CSS</label>
					<textarea class="form-control" id="contents" name="html" rows="2" required></textarea>
				</div>
				<div class="mb-3">
					<label for="contents" class="form-label">JAVASCRIPT</label>
					<textarea class="form-control" id="contents" name="javascript" rows="2" required></textarea>
				</div>
				<div class="mb-3">
					<label for="contents" class="form-label">DATABASE MANAGEMENT</label>
					<textarea class="form-control" id="contents" name="dbms" rows="2" required></textarea>
				</div>
				<div class="mb-3">
					<label for="contents" class="form-label">ANALYTICS</label>
					<textarea class="form-control" id="contents" name="analytics" rows="2" required></textarea>
				</div>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">
				UPDATE DESC
			</button>
			
			</form>
			<!-- Modal -->
			<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateSkillsModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="updateSkillsModalLabel">Update Skills</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form id="updateSkillsForm" action="../server/sv-skillUpdate.php" method="post">
								<div class="mb-3">
									<label for="htmlSkill" class="form-label">HTML:</label>
									<textarea class="form-control" id="htmlSkill" name="htmlSkill" rows="2"></textarea>
								</div>
								<div class="mb-3">
									<label for="jsSkill" class="form-label">JavaScript:</label>
									<textarea class="form-control" id="jsSkill" name="jsSkill" rows="2"></textarea>
								</div>
								<div class="mb-3">
									<label for="dbmsSkill" class="form-label">Database Management:</label>
									<textarea class="form-control" id="dbmsSkill" name="dbmsSkill" rows="2"></textarea>
								</div>
								<div class="mb-3">
									<label for="adminSkill" class="form-label">Admin:</label>
									<textarea class="form-control" id="adminSkill" name="adminSkill" rows="2"></textarea>
								</div>
								<button type="submit" name="skill-update" class="btn btn-primary">Update Skills</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
unset( $_SESSION[ 'message' ] );
include( 'admin-include/footer.php' );
include( 'admin-include/scripts.php' );
?>