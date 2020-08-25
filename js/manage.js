$(document).ready(function(){
	var DOMAIN = "http://localhost/girinka";

    //----------------------------------------------Manage Doner-----------------------------------
    manageDoner(1);
    function manageDoner(pn){
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {manageDoner:1,pageno:pn},
            success : function(data){
                $("#get_doner").html(data);		
            }
        });
    }

    $("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageDoner(pn);
	});

	//----------------Delete Doner ----------------------------------------------------

	$("body").delegate(".del_doner","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure? You want to delete a doner..!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deleteDoner:1,id:did},
				success : function(data){
					if (data == "DEPENDENT_DONER") {
						alert("Sorry!, this doner is refered to some other cow(s)");
					}else if(data == "DONER_DELETED"){
						alert("Doner Deleted Successfully..!");
						manageDoner(1);
					}else if(data == "DELETED"){
						alert("Deleted Successfully");
					}else{
						alert(data);
					}						
				}
			});
		}else{

		}
	});
    

	//----------------Update Doner ---------------------------------------------------------------------------

	//----------------Fetching Information into a doner form --------------------------

	$("body").delegate(".edit_doner","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateDoner:1,id:eid},
			success : function(data){
				console.log(data);
				$("#don_id").val(data["don_id"]);
				$("#update_doner_name").val(data["name"]);
				$("#update_select_donerSector").val(data["sector"]);
				$("#update_doner_description").val(data["description"]);
			}
		});
	});

	$("#update_doner_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_doner_form").serialize(),
				success : function(data){
					if (data == "UPDATED") {
						alert("Doner Updated Successfully..!");
						window.location.href = "";
					}else{
						alert(data);
					}
				}
			})
	});

	//--------------------Manage Cows-----------------

	manageCow(1);
	function manageCow(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageCow:1,pageno:pn},
			success : function(data){
				$("#get_cow").html(data);		
			}
		});
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageCow(pn);
	});

	//------------- Delete Cow --------------------------------

		$("body").delegate(".del_cow","click",function(){
			var did = $(this).attr("did");
			if (confirm("Are you sure? You want to delete a cow..!")) {
				$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : {deleteCow:1,id:did},
					success : function(data){
						if (data == "DELETED") {
							alert("Cow is deleted");
							manageCow(1);
						}else{
							alert(data);
						}
							
					}
				});
			}
		});


		//----------------Fetching Information into a cow form --------------------------
	$("body").delegate(".edit_cow","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateCow:1,id:eid},
			success : function(data){
				console.log(data);
				$("#update_cow_id").val(data["cow_id"]);
				$("#update_select_doner").val(data["don_id"]);
				$("#update_ctype").val(data["ctype"]);
				$("#update_csex").val(data["sex"]);
			}
		});
	});


	$("#update_cow_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_cow_form").serialize(),
				success : function(data){
					if (data == "UPDATED") {
						alert("Cow Updated Successfully..!");
						window.location.href = "manage_cow.php";
					}else{
						alert(data);
					}
				}
			});
	});		

	//--------------------Manage Families-----------------
	manageFamily(1);
	function manageFamily(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageFamily:1,pageno:pn},
			success : function(data){
				$("#get_family").html(data);		
			}
		});
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageFamily(pn);
	});

		//---Delete Family---

	$("body").delegate(".del_family","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure? You want to delete a family..!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deleteFamily:1,id:did},
				success : function(data){
					if (data == "DELETED") {
						alert("Family is deleted");
						manageFamily(1);
					}else{
						alert(data);
					}
						
				}
			});
		}
	});

			//----------------Fetching Information into a Family form --------------------------

	$("body").delegate(".edit_family","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateFamily:1,id:eid},
			success : function(data){
				console.log(data);
				$("#id").val(data["id"]);
				$("#update_id_no").val(data["id_no"]);
				$("#update_fname").val(data["fname"]);
				$("#update_lname").val(data["lname"]);
				$("#update_phone").val(data["phone"]);
				$("#update_sex").val(data["sex"]);
				$("#update_sector").prepend('<option selected="selected">'+ data["sector"]+'</option>');	
				$("#update_cell").prepend('<option>'+ data["cell"]+'</option>');
				$("#update_village").prepend('<option>'+ data["village"]+'</option>');	
				$("#update_village").val(data["village"]);
				$("#update_status").val(data["status"]);
			}
		});
	});

	$("#update_family_form").on("submit",function(){
		$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_family_form").serialize(),
				success : function(data){
					if (data == "UPDATED") {
						alert("Family Info Updated Successfully..!");
						window.location.href = "";
					}else{
						alert(data);
					}
				}
			});
	});		



	//-------------------View Transactions-----------------
	manageTrans(1);
	function manageTrans(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageTrans:1,pageno:pn},
			success : function(data){
				$("#get_transactions").html(data);		
			}
		});
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageTrans(pn);
	});


	//-------------------View Log activities-----------------
	manageHistory(1);
	function manageHistory(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageHistory:1,pageno:pn},
			success : function(data){
				$("#get_history").html(data);		
			}
		});
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageHistory(pn);
	});
});