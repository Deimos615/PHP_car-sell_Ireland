<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/header.css">
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css" />
<script src="../assets/js/new_user.js"></script>
<style>
	.dataTables_filter {
		display: none;
	}
</style>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>New User Management</h2>	
	<div>   		
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>					
					<th>Dealership Name</th>					
					<th>Website Link</th>
					<th>Email</th>
					<th>Vat</th>					
					<th>Garage Code</th>
					<th>What Bank Used</th>
					<th>Created at</th>
					<th></th>
					<th></th>					
				</tr>
			</thead>
		</table>
	</div>
</div>	
<?php include('inc/footer.php');?>