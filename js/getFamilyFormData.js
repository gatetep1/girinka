$(document).ready(function(){  
	// code to get all records from table via select box
	$("#cell").change(function() {    

		var cell  = $(this).val();
		var village = $("#village").val();
		$.ajax({
			url: 'getV.php',
			dataType: "json",
			type:'POST',
			data: {cell:cell},  
			cache: false,
			success: function(villageData) {
			   if(villageData) {
	
				var len = villageData.length;

				$("#village").empty();
                for(var i = 0; i<len; i++){
					var village = villageData[i]['village'];                    
                    $("#village").append("<option value='"+village+"'>"+village+"</option>");
                }

				}   	
			} 
		});
 	}) 
});

$(document).ready(function(){  
	// code to get all records from table via select box
	$("#form_data").hide();
	$("#filter").click(function() { 
		$("#fname").val("") ;
		$("#lname").val("");
		$("#id_no").val("");
		$("#cow_id").val("");
		$("#form_data").show(); 

		var cell = $("#cell").val();
		var village = $("#village").val();

   		// var dataString = cell+village;    
    
    	//console.log(dataString);
		$.ajax({
			url: 'getFamilyFormData.php',
			dataType: "json",
			type:'POST',
			data:{
				cell:cell, village:village
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