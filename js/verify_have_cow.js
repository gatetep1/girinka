$(document).ready(function(){  
	// code to get all records from table via select box
	$("#form_verify").hide();
	$("#verify").click(function() { 

		var id_no = $("#id_no").val('1');
		var cow_id = $("#cow_id").val('1');

    	//console.log(dataString);
		$.ajax({
			url: 'num_rows.php',
			dataType: "json",
			type:'POST',
			data:{
				filter_cell:filter_cell, filter_village:filter_village
			  }, 
			cache: false,
			success: function(fmlyFormData) {
			   if(fmlyFormData) {
					$("#form_data").show();		
					$("#id_no").val(fmlyFormData.id_no);
          			$("#fname").val(fmlyFormData.fname);		
					$("#lname").val(fmlyFormData.lname);				
					$("#cow_id").val(fmlyFormData.cow_id);	
				} 
	
			} 
			
		});
  
	 });

});