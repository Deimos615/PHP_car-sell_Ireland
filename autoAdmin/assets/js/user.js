$(document).ready(function(){	
	
	var dataRecords = $('#recordListing').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',		
		"order":[],
		"ajax":{
			url:"../controller/user_action.php",
			type:"POST",
			data:{action:'listRecords'},
			dataType:"json"
		},
		"columnDefs":[
				{
                    targets: [ 0 ],
                    orderData: [ 1 ]
                },
                {
                    targets: [ 1 ],
                    orderData: [ 2 ]
                },
                {
                    targets: [ 5 ],
                    orderData: [ 6 ]
                },
                {
                    "targets":[ 2, 3, 4, 6, 7, 8, 9, 10 ],
                    "orderable":false,
                },
		],
		"pageLength": 10
	});	
	
	$('#addRecord').click(function(){
		$('#recordModal').modal('show');
		$('#recordForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add User");
		$('#action').val('addRecord');
		$('#save').val('Add');
	});
	$("#recordModal").on('submit','#recordForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"../controller/user_action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#recordForm')[0].reset();
				$('#recordModal').modal('hide');				
				$('#save').attr('disabled', false);
				dataRecords.ajax.reload();
			}
		})
	});		
	$("#recordListing").on('click', '.deactivate', function(){
		var id = $(this).attr("id");
		var action = 'deactivateRecord';
		if(confirm("Are you sure you want to deactivate this user")) {
			$.ajax({
				url:"../controller/user_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					dataRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});
	$("#recordListing").on('click', '.activate', function(){
		var id = $(this).attr("id");
		var action = 'activateRecord';
		if(confirm("Are you sure you want to activate this user")) {
			$.ajax({
				url:"../controller/user_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					dataRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});
	$("#recordListing").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "deleteRecord";
		if(confirm("Are you sure you want to delete this user?")) {
			$.ajax({
				url:"../controller/user_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					dataRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});