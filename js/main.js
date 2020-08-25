$(document).ready(function(){
	var DOMAIN = "http://localhost/girinka";
	$("#register_form").on("submit",function(){
		var status = false;
		var fname = $("#fullname");
		var email = $("#email");
		var pass1 = $("#password1");
		var pass2 = $("#password2");
		var type = $("#usertype");
		//gatetep10@gmail.com
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
		if(fname.val() == ""){
			fname.addClass("border-danger");
			$("#fn_error").html("<span class='text-danger'>Please Enter Fullname</span>");
			status = false;
		}else{
			fname.removeClass("border-danger");
			$("#fn_error").html("");
			status = true;
		}
		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}
		if(pass1.val() == "" || pass1.val().length < 9){
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>");
			status = false;
		}else{
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}
		if(pass2.val() == "" || pass2.val().length < 9){
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>");
			status = false;
		}else{
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		}
		if(type.val() == ""){
			type.addClass("border-danger");
			$("#t_error").html("<span class='text-danger'>Please Select User type</span>");
			status = false;
		}else{
			type.removeClass("border-danger");
			$("#t_error").html("");
			status = true;
		}
		if ((pass1.val() == pass2.val()) && status == true) {
			$(".overlay").show();
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#register_form").serialize(),
				success : function(data){
					if (data == "EMAIL_ALREADY_EXISTS") {
						$(".overlay").hide();
						alert("It seems like you email is already used");
					}else if(data == "SOME_ERROR"){
						$(".overlay").hide();
						alert("Something Wrong");
					}else{
						$(".overlay").hide();
						window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered Now you can login");
					}
				}
			})
		}else{
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password is not matched</span>");
			status = true;
		}
	});

		//For Login Part
		$("#form_login").on("submit",function(){
			var email = $("#log_email");
			var pass = $("#log_password");
			var status = false;
			if (email.val() == "") {
				email.addClass("border-danger");
				$("#e_error").html("<span class='text-danger'>Please Enter Email Address</span>");
				status = false;
			}else{
				email.removeClass("border-danger");
				$("#e_error").html("");
				status = true;
			}
			if (pass.val() == "") {
				pass.addClass("border-danger");
				$("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
				status = false;
			}else{
				pass.removeClass("border-danger");
				$("#p_error").html("");
				status = true;
			}
			if (status) {
				$(".overlay").show();
				$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("#form_login").serialize(),
					success : function(data){
						if (data == "NOT_REGISTERD") {
							$(".overlay").hide();
							email.addClass("border-danger");
							$("#e_error").html("<span class='text-danger'>It seems like you are not registered</span>");
						}else if(data == "PASSWORD_NOT_MATCHED"){
							$(".overlay").hide();
							pass.addClass("border-danger");
							$("#p_error").html("<span class='text-danger'>Please Enter Correct Password</span>");
							status = false;
						}else{
							$(".overlay").hide();
							console.log(data);
							window.location.href = DOMAIN+"/dashboard.php";
						}
					}
				});
			}
		});

	//Add Doner
		$("#doner_form").on("submit",function(){
			var status = false
			if ($("#doner_name").val() == "") {
				$("#doner_name").addClass("border-danger");
				$("#doner_name_error").html("<span class='text-danger'>Please Enter the Name of Doner</span>");
				status = false;
			}
			else{
				$("#doner_name").removeClass("border-danger");
				$("#doner_name_error").html("");
				status = true;
				}
			if ($("#select_donerSector").val() == "") {
				$("#select_donerSector").addClass("border-danger");
				$("#select_donerSector_error").html("<span class='text-danger'>Please Select the Sector of Doner</span>");
				status = false;
			}
			else{
				$("#select_donerSector").removeClass("border-danger");
				$("#select_donerSector_error").html("");
				status = true;
			}

			if ($("#doner_description").val() == "") {
				$("#doner_description").addClass("border-danger");
				$("#doner_description_error").html("<span class='text-danger'>Please Enter Doner Description</span>");
				status = false;
			}
			else{
				$("#doner_description").removeClass("border-danger");
				$("#doner_description").html("");
				status = true;
					
			$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("#doner_form").serialize(),
					success : function(data){
						if (data == "NEW_DONER_ADDED") {
							alert("New Doner Added Successfully..!");
							$("#doner_name").val("");
							$("#select_donerSector").val("");
							$("#doner_description").val("");
							$("#date").val("");
	
						}else{
							console.log(data);
							alert(data);
						}
							
					}
				});
			}
		});


	//Fetch doner
	fetch_doner();
	function fetch_doner(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getDoner:1},
			success : function(data){
				var choose = "<option value=''>Choose Doner</option>";
				$("#select_doner").html(choose+data);
				$("#update_select_doner").html(choose+data);

			}
		});
	}


	//Fetch family holder
	fetch_family();
	function fetch_family(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getFamily:1},
			success : function(data){
				var choose = "<option value=''>Choose Family Holder</option>";
				$("#select_family").html(data);
				$("#select_family").html(choose+data);
			}
		});
	}

	//Add Cow
	$("#cow_form").on("submit",function(){
		var status = false
		if ($("#select_doner").val() == "") {
			$("#select_doner").addClass("border-danger");
			$("#select_doner_error").html("<span class='text-danger'>Please Select a Doner of the Cow</span>");
			status = false;
		}
		else{
			$("#select_doner").removeClass("border-danger");
			$("#select_doner_error").html("");
			status = true;
		}

		if ($("#ctype").val() == "") {
			$("#ctype").addClass("border-danger");
			$("#ctype_error").html("<span class='text-danger'>Please Select type of a cow</span>");
			status = false;
		}
		else{
			$("#ctype").removeClass("border-danger");
			$("#ctype_error").html("");
			status = true;
		}

		if ($("#csex").val() == "") {
			$("#csex").addClass("border-danger");
			$("#csex_error").html("<span class='text-danger'>Please Select Sex of a Cow</span>");
			status = false;
		}
		else{
			$("#csex").removeClass("border-danger");
			$("#csex_error").html("");
			status = true;

			$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("#cow_form").serialize(),
					success : function(data){
						if (data == "NEW_COW_ADDED") {
							alert("New Cow Added Successfully..!");
							$("#ctype").val("");
							$("#csex").val("");
							$("#select_doner").val("");
							$("#date").val("");

						}else{
							console.log(data);
							alert(data);
						}
					}	
				});
			}
	});


	//---------------Add Family-------------------------------
	

	$(document).ready(function(){
		$('#new_family_form').hide();
		$('#load_csv_file_form').hide();
		$('#select_capture_family_form_info').change(function(){
			var capture_info_way = $('#select_capture_family_form_info').val();
			var csv_file = $('#select_capture_family_csvFile_info').val();
			if(capture_info_way == 'filling_form'){
				$('#load_csv_file_form').hide();
				$('#new_family_form').show();
	
			}
			else if(capture_info_way == 'csv_file'){
				$('#new_family_form').hide();
				$('#load_csv_file_form').show();
			}
			else{
				$('#new_family_form').hide();
				$('#load_csv_file_form').hide();
			}
		});
	});

	$("#family_form").on("submit",function(){
	var status = false
	if ($("#id_no").val() == "") {
		$("#id_no").addClass("border-danger");
		$("#id_no_error").html("<span class='text-danger'>Please Enter Nat. ID No.</span>");
		status = false;
	}
	else{
		$("#id_no").removeClass("border-danger");
		$("#id_no_error").html("");
		status = true;
		}
	if ($("#fname").val() == "") {
		$("#fname").addClass("border-danger");
		$("#fname_error").html("<span class='text-danger'>Please Select the Firstname of the family leader</span>");
		status = false;
	}
	else{
		$("#fname").removeClass("border-danger");
		$("#fname_error").html("");
		status = true;
	}

	if ($("#sex").val() == "") {
		$("#sex").addClass("border-danger");
		$("#sex_error").html("<span class='text-danger'>Please Select the Gender of the family leader</span>");
		status = false;
	}
	else{
		$("#sex").removeClass("border-danger");
		$("#sex_error").html("");
		status = true;
	}
	if ($("#sector").val() == "") {
		$("#sector").addClass("border-danger");
		$("#sector_error").html("<span class='text-danger'>Please Select the Sector he/she lives in</span>");
		status = false;
	}
	else{
		$("#sector").removeClass("border-danger");
		$("#sector_error").html("");
		status = true;
	}
	if ($("#cell").val() == "") {
		$("#cell").addClass("border-danger");
		$("#cell_error").html("<span class='text-danger'>Please Select the Cell he/she lives in</span>");
		status = false;
	}
	else{
		$("#cell").removeClass("border-danger");
		$("#cell_error").html("");
		status = true;
	}
	if ($("#village").val() == "") {
		$("#village").addClass("border-danger");
		$("#village_error").html("<span class='text-danger'>Please Select the Village he/she lives in</span>");
		status = false;
	}
	
	else{
		$("#village").removeClass("border-danger");
		$("#village_error").html("");
		status = true;
			
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : $("#family_form").serialize(),
			success : function(data){
				if (data == "NEW_FAMILY_ADDED") {
					alert("New Family Added Successfully..!");
					 $("#id_no").val("");
					$("#fname").val("");
					$("#lname").val("");
					$("#sex").val("");
					$("#phone").val("");
					$("#sector").val("");
					$("#cell").val("");
					$("#village").val("");					
				}
				else
				{
					console.log(data);
					alert(data);
				}		
			}
		});
	}
 });
		
	//---------Serve a Family-----------------------

	$("#serve_form").on("submit",function(){
			var status = false
			if ($("#id_no").val() == "") {
				$("#id_no").addClass("border-danger");
				$("#id_no_error").html("<span class='text-danger'> Nat. ID No. is required</span>");
				status = false;
			}
			else{
				$("#id_no").removeClass("border-danger");
				$("#id_no_error").html("");
				status = true;
				}
			if ($("#fname").val() == "") {
				$("#fname").addClass("border-danger");
				$("#fname_error").html("<span class='text-danger'>FirstName Family Holder is required</span>");
				status = false;
			}
			else{
				$("#fname").removeClass("border-danger");
				$("#fname_error").html("");
				status = true;
			}

			if ($("#cow_id").html("c_id") == "" ) {
				$("#cow_id").addClass("border-danger");
				$("#cow_id_error").html("<span class='text-danger'>Cow ID is required</span>");
				status = false;
			}
			
			else{
				$("#cow_id").removeClass("border-danger");
				$("#cow_id_error").html("");
				status = true;
					
				$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("#serve_form").serialize(),
					success : function(servData){
						if (servData == "NEW_FAMILY_SERVED") {
							alert("New Family Served Successfully..!");
							window.location.href='dashboard.php';
		
						}
						else
						{
							console.log(servData);
							alert(servData);
						}		
					}
				});
			}
		});
});
