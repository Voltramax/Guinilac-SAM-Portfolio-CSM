<?php
include( 'admin-include/header.php' );
?>

<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">MY SKILLS</li>
	</ol>

	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>HTML & CSS</th>
					</tr>
				</thead>
			<tbody>
                    <?php
                        $sql = "SELECT skill_desc FROM html LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<td>' . $row['skill_desc'] . '</td>';
                        } else {
                            echo "<tr><td>No HTML skill description found</td></tr>";
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container-fluid px-4">
	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>JAVASCRIPT</th>
					</tr>
				</thead>
			<tbody>
                    <?php
                        $sql = "SELECT skill_desc FROM javascript LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<td>' . $row['skill_desc'] . '</td>';
                        } else {
                            echo "<tr><td>No HTML skill description found</td></tr>";
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container-fluid px-4">
	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>DATABASE MANAGEMENT</th>
					</tr>
				</thead>
			<tbody>
                    <?php
                        $sql = "SELECT skill_desc FROM dbms LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<td>' . $row['skill_desc'] . '</td>';
                        } else {
                            echo "<tr><td>No HTML skill description found</td></tr>";
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="container-fluid px-4">
	<div class="row">
		<div class="container">
			<table id="aboutMeTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>DATA ANALYTICS</th>
					</tr>
				</thead>
			<tbody>
                    <?php
                        $sql = "SELECT skill_desc FROM admin LIMIT 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<td>' . $row['skill_desc'] . '</td>';
                        } else {
                            echo "<tr><td>No HTML skill description found</td></tr>";
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include( 'admin-include/footer.php' );
include( 'admin-include/scripts.php' );
?>