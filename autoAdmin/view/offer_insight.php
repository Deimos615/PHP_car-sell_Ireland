<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/header.css">
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css" />
<script src="../assets/js/offer_insight.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>Offers Insight</h2>	
	<div>   		
		<!-- <div class="panel-heading">
			<div class="row" style="display: flex;">
				<div class="col-md-12">
					<h3 class="panel-title"></h3>
				</div>
			</div>
		</div> -->
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Car Name</th>
					<th>Car ID</th>					
					<th>User Name</th>					
					<th>User Email</th>
					<th>Esti_Price</th>
					<th>Offer</th>					
					<th>Offered_at</th>
					<th></th>		
					<th></th>				
				</tr>
			</thead>
		</table>
	</div>
</div>	
<?php include('inc/footer.php');?>