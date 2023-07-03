<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/header.css">
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css" />
<script src="../assets/js/faqs.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>FAQs Management</h2>	
	<div>   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addRecord" class="btn btn-success">Add New FAQ</button>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>FAQ</th>					
					<th>Description</th>					
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
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit FAQ</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="faq" class="control-label">FAQ</label>
							<input type="text" class="form-control" id="faq" name="faq" placeholder="FAQ" required>			
						</div>
						<div class="form-group">
							<label for="description" class="control-label">Description</label>							
							<textarea rows="5" class="form-control" id="description" name="description" placeholder="Description"></textarea>							
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