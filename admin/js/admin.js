$(document).ready(function(){

	getAdmins();
	
	function getAdmins(){
		$.ajax({
			url : '../admin/classes/Admin.php',
			method : 'POST',
			data : {GET_ADMIN:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>' + index + '</td>'+
										'<td>'+ value.name +'</td>'+
										'<td>'+ value.email +'</td>'+
										'<td>'+ value.is_active +'</td>'+
										// '<td><a class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>'+
										'<td><a pid="'+value.product_id+'" class="btn btn-sm btn-danger delete-product" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#admin_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#admin_list").html(resp.message);
				}	

			}
		})
		
	}

	$(".add-brand").on("click", function(){

		alert();

	});

});