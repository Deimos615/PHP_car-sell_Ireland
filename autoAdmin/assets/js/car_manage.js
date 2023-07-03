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
			url:"../controller/car_action.php",
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
                    targets: [ 2 ],
                    orderData: [ 3 ]
                },
                {
                    targets: [ 3 ],
                    orderData: [ 4 ]
                },
                {
                    targets: [ 5 ],
                    orderData: [ 6 ]
                },
				{
                    targets: [ 6 ],
                    orderData: [ 7 ]
                },
                {
                    "targets":[ 8, 9, 10, 11, 12 ],
                    "orderable":false,
                },
		],
		"pageLength": 10
	});	
	
	$("#recordListing").on('click', '.update', function(){
		var id = $(this).attr("id");
		var action = 'getRecord';
		$.ajax({
			url:'../controller/car_action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#recordModal').modal('show');
				$('#id').val(data.id);
				$('#name').val(data.name);
				$('#esti_price').val(data.esti_price);
				$('#buy_price').val(data.buy_price);				
				$('#timer').val(data.timer);
				$('#premium').val(data.premium);	
				$('#offers').val(data.offers);
				$('#watching').val(data.watching);
				$('#grade').val(data.grade);
				$('#years').val(data.years);
				$('#color').val(data.color);
				$('#doors').val(data.doors);
				$('#fuel').val(data.fuel);
				$('#transmission').val(data.transmission);
				$('#engine').val(data.engine);
				$('#mileage').val(data.mileage);
				$('#car_comment').val(data.comment);
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit User");
				$('#action').val('updateRecord');
				$('#save').val('Save');
			}
		})
	});
	$("#recordModal").on('submit','#recordForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"../controller/car_action.php",
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
		if(confirm("Are you sure you want to deactivate this car")) {
			$.ajax({
				url:"../controller/car_action.php",
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
		if(confirm("Are you sure you want to activate this car")) {
			$.ajax({
				url:"../controller/car_action.php",
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
	$("#recordListing").on('click', '.reject', function(){
		var id = $(this).attr("id");
		var action = 'rejectRecord';
		if(confirm("Are you sure you want to reject this car featured")) {
			$.ajax({
				url:"../controller/car_action.php",
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
	$("#recordListing").on('click', '.feature', function(){
		var id = $(this).attr("id");
		var action = 'featureRecord';
		if(confirm("Are you sure you want to feature this car")) {
			$.ajax({
				url:"../controller/car_action.php",
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
		if(confirm("Are you sure you want to delete this record?")) {
			$.ajax({
				url:"../controller/car_action.php",
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