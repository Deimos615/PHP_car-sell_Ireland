<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/header.css">
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css" />
<script src="../assets/js/car_manage.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>Car Management</h2>	
	<div>   		
		<div class="panel-heading">
			<div class="row" style="display: flex;">
				<div class="col-md-12">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2">
					<a href="new_car.php"><button type="button" name="add" id="addRecord" class="btn btn-success">Add New Car</button></a>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>					
					<th>Esti Price</th>					
					<th>Buy Price</th>
					<th>Timer</th>
					<th>Premium</th>					
					<th>Offers</th>
					<th>Watching</th>
					<th>Grade</th>
					<th></th>
					<th>Activate</th>
					<th>Feature</th>					
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Car</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>			
						</div>
						<div class="form-group">
							<label for="esti_price" class="control-label">Estimation Price</label>							
							<input type="number" class="form-control" id="esti_price" name="esti_price" placeholder="Estimation Price">							
						</div>	   	
						<div class="form-group">
							<label for="buy_price" class="control-label">Buy Now Price</label>							
							<input type="number" class="form-control"  id="buy_price" name="buy_price" placeholder="Buy Now Price" required>							
						</div>	 
						<div class="form-group">
							<label for="timer" class="control-label">Timer</label>							
							<input type="text" class="form-control" id="timer" name="timer" placeholder="timer">							
						</div>
						<div class="form-group">
							<label for="premium" class="control-label">Premium</label>							
							<input type="number" class="form-control" id="premium" name="premium" placeholder="Premium">			
						</div>		
						<div class="form-group">
							<label for="offers" class="control-label">Offers</label>							
							<input type="number" class="form-control" id="offers" name="offers" placeholder="Offers">			
						</div>
						<div class="form-group">
							<label for="watching" class="control-label">Watching</label>							
							<input type="number" class="form-control" id="watching" name="watching" placeholder="Watching">			
						</div>
						<div class="form-group">
							<label for="grade" class="control-label">Grade</label>							
							<select name="grade" id="grade" class="form-control" required>
								<option value="" disabled selected>Select the grade</option>
								<option value="Grade 1">Grade 1</option>
								<option value="Grade 2">Grade 2</option>
								<option value="Grade 3">Grade 3</option>
								<option value="Grade 4">Grade 4</option>
							</select>	
						</div>
						<div class="form-group">
							<label for="years" class="control-label">Year</label>							
							<input type="text" class="form-control" id="years" name="years" placeholder="Year">							
						</div>
						<div class="form-group">
							<label for="color" class="control-label">Color</label>							
							<input type="text" class="form-control" id="color" name="color" placeholder="Color">			
						</div>		
						<div class="form-group">
							<label for="doors" class="control-label">Doors</label>							
							<input type="number" class="form-control" id="doors" name="doors" placeholder="Doors">			
						</div>
						<div class="form-group">
							<label for="fuel" class="control-label">Fuel</label>							
							<input type="text" class="form-control" id="fuel" name="fuel" placeholder="Fuel">			
						</div>	
						<div class="form-group">
							<label for="transmission" class="control-label">Transmission</label>							
							<input type="text" class="form-control" id="transmission" name="transmission" placeholder="Transmission">							
						</div>
						<div class="form-group">
							<label for="engine" class="control-label">Engine</label>							
							<input type="text" class="form-control" id="engine" name="engine" placeholder="Engine">			
						</div>		
						<div class="form-group">
							<label for="mileage" class="control-label">Mileage</label>							
							<input type="number" class="form-control" id="mileage" name="mileage" placeholder="Mileage">			
						</div>
						<div class="form-group">
							<label for="car_comment" class="control-label">Comment</label>							
							<textarea type="text" class="form-control" id="car_comment" name="car_comment" rows="4" required></textarea>		
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('inc/footer.php');?>