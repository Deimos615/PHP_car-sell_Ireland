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
			url:"../controller/offer_action.php",
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
                    targets: [ 4 ],
                    orderData: [ 5 ]
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
                    "targets":[ 7, 8 ],
                    "orderable":false,
                },
		],
		"pageLength": 10
	});	
	$("#recordListing").on('click', '.deactivate', function(){
		var id = $(this).attr("id");
		var action = 'deactivateRecord';
		if(confirm("Are you sure you want to make this offer a competing offer?")) {
			$.ajax({
				url:"../controller/offer_action.php",
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
		if(confirm("Are you sure you want to make this offer a winning offer?")) {
			$.ajax({
				url:"../controller/offer_action.php",
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
		if(confirm("Are you sure you want to delete this offer?")) {
			$.ajax({
				url:"../controller/offer_action.php",
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