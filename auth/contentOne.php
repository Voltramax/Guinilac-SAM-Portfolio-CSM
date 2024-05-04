<?php 
include('admin-include/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">CONTENTS</li>
    </ol>

    <div class="row">
        <div class="container">
           <form id="addContentForm" action="../server/sv-contentOne.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="contents" class="form-label">Contents:</label>
                    <textarea class="form-control" id="contents" name="contents" rows="3"required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" name="contentOne-submit" class="btn btn-primary">Add Content</button>
            </form>
        </div>
    </div>
</div>

<?php

include('admin-include/footer.php');
include('admin-include/scripts.php');
?>
