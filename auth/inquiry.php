<?php
include( 'admin-include/header.php' );
?>

<div class="container-fluid px-4">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">INQUIRY</li>
	</ol>
	<div class="row">
		<div class="container">
			<h3>Inquiries Table</h1>
			<table id="inquiriesTable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$inquiries = array();
					$sql = "SELECT * FROM inquiries";
					$result = $conn->query( $sql );
					if ( $result->num_rows > 0 ) {
						while ( $row = $result->fetch_assoc() ) {
							$inquiries[] = $row;
						}
					} else {
						echo "No inquiries found.";
					}
					foreach ($inquiries as $inquiry) {
						echo "<tr>";
						echo "<td>".$inquiry['name']."</td>";
						echo "<td>".$inquiry['email']."</td>";
						echo "<td>".$inquiry['subject']."</td>";
						echo "<td>".$inquiry['message']."</td>";
						echo "<td>".$inquiry['date_stamp']."</td>";
						echo "</tr>";
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
?>