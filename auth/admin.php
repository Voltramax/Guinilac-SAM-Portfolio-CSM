<?php
include( 'admin-include/header.php' );
?>

<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">MY SKILLS</div>
				<div class="card-footer d-flex align-items-center justify-content-	between">
					<a class="small text-white stretched-link" href="myskills.php">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">CONTENTS</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="aboutme.php">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">MY WORK</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="mywork.php">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">INQUIRY</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="inquiry.php">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6">
			<?php include('api/contents.php')?>
		</div>
		<div class="col-xl-6">
			<?php include('api/inquiries.php')?>
	</div>
</div>

<?php
include( 'admin-include/footer.php' );
include( 'admin-include/scripts.php' );
?>