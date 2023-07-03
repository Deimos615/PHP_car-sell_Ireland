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
			url:"../controller/faqs_action.php",
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
                    "targets":[ 3, 4 ],
                    "orderable":false,
                },
		],
		"pageLength": 10
	});	
	
	$('#addRecord').click(function(){
		$('#recordModal').modal('show');
		$('#recordForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add FAQ");
		$('#action').val('addRecord');
		$('#save').val('Add');
	});
	$("#recordModal").on('submit','#recordForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"../controller/faqs_action.php",
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
	$("#recordListing").on('click', '.edit', function(){
		var id = $(this).attr("id");
		var action = 'getRecord';
		$.ajax({
			url:'../controller/faqs_action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#recordModal').modal('show');
				$('#id').val(data.id);
				$('#faq').val(data.title);
				$('#description').val(data.text);
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit FAQ");
				$('#action').val('editRecord');
				$('#save').val('Save');
			}
		})
	});
	$("#recordListing").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "deleteRecord";
		if(confirm("Are you sure you want to delete this user?")) {
			$.ajax({
				url:"../controller/faqs_action.php",
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