<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/header.css">
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css" />
<script src="../assets/js/user.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>User Management</h2>	
	<div>   		
		<div class="panel-heading">
			<div class="row" style="display: flex;">
				<div class="col-md-12">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2">
					<a href="new_user.php"><button type="button" name="approve" id="approveRecord" class="btn btn-primary">Approve New User</button></a>
				</div>
				<div class="col-md-2">
					<button type="button" name="add" id="addRecord" class="btn btn-success">Add New User</button>
				</div>
			</div>
		</div>
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
					<th>Approved_at</th>
					<th></th>
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
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>			
						</div>
						<div class="form-group">
							<label for="dealership" class="control-label">Dealership Name</label>							
							<input type="text" class="form-control" id="dealership" name="dealership" placeholder="Dealership Name">							
						</div>	   	
						<div class="form-group">
							<label for="link" class="control-label">Website Link</label>							
							<input type="url" class="form-control"  id="link" name="link" placeholder="Website Link" required>							
						</div>	 
						<div class="form-group">
							<label for="email" class="control-label">Email Address</label>							
							<input type="email" class="form-control" id="email" name="email" placeholder="Email Address"></input>							
						</div>
						<div class="form-group">
							<label for="vat" class="control-label">Vat registered</label>							
							<input type="number" class="form-control" id="vat" name="vat" placeholder="Vat registered">			
						</div>		
						<div class="form-group">
							<label for="garage" class="control-label">Garage Code</label>							
							<input type="text" class="form-control" id="garage" name="garage" placeholder="Garage Code">			
						</div>
						<div class="form-group">
							<label for="bank" class="control-label">What Bank Used</label>							
							<input type="text" class="form-control" id="bank" name="bank" placeholder="What Bank Used">			
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>							
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">			
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