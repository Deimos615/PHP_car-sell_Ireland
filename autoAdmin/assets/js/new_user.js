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
			url:"../controller/new_user_action.php",
			type:"POST",
			data:{action:'listRecords'},
			dataType:"json"
		},
		"columnDefs":[
                        {
                            targets: [ 8 ],
                            orderData: [ 10 ]
                        },
                        {
                            "targets":[0, 1, 2, 3, 4, 5, 6, 7, 9 ,10 ],
                            "orderable":false,
                        },
                    ],
                    "pageLength": 10
                });	
	
	$("#recordListing").on('click', '.approve', function(){
		var id = $(this).attr("id");		
		var action = "approveRecord";
		if(confirm("Are you sure you want to approve this user?")) {
			$.ajax({
				url:"../controller/new_user_action.php",
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
		if(confirm("Are you sure you want to reject this user?")) {
			$.ajax({
				url:"../controller/new_user_action.php",
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