<?php
include_once('../server/config.php');
include_once('admin-include/header.php');

?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">CONTENTS</li>
    </ol>
	<?php 
		$query = "SELECT contentsID FROM aboutme";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
           
            $row = mysqli_fetch_assoc($result);
            $contentsID = $row['contentsID'];
		} else {
			echo('"No contentsID found in the aboutme table."');
		}
	?>
    <div class="row">
        <div class="container">
             <form action="api/contentUpdate.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="contentsID" value="<?php echo $contentsID; ?>">
                <div class="mb-3">
                    <label for="contents" class="form-label">Contents:</label>
                    <textarea class="form-control" id="contents" name="contents" rows="3" required></textarea>
                </div>
                <div class="mb-3">
					<label for="image" class="form-label">Update Image:</label>
					<input type="file" class="form-control" id="image" name="image">
       			</div>
                <button type="submit" name="submit_button" class="btn btn-primary">Update Content</button>
            </form>
            <?php
            if (!empty($updateSuccessMessage)) {
                echo '<div class="alert alert-success mt-3" role="alert">' . $updateSuccessMessage . '</div>';
            } elseif (!empty($updateFailureMessage)) {
                echo '<div class="alert alert-danger mt-3" role="alert">' . $updateFailureMessage . '</div>';
            }
            ?>
        </div>
    </div>
</div>

<?php
include('admin-include/footer.php');
include('admin-include/scripts.php');
?>
