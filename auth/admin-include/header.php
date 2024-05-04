<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - My Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="admin-include/style/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    </head>
	
	<body class="sb-nav-fixed">		
		<?php 
				include('admin-include/topnav.php');
		?>
		<div id="layoutSidenav">
			<?php 
					include('admin-include/sidenav.php');
			 ?>
			 <div id="layoutSidenav_content">			 
                <main>