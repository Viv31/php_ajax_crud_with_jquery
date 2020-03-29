<?php include('inc/header.php'); ?>
<div class="col-md-4"></div>

<div class="col-md-4">
	<div class="jumbotron">
	<div class="form-group">
		<input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control">
		<span id="first_name_error_msg"></span>
	</div>
	<div class="form-group">
		<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control">
		<span id="last_name_error_msg"></span>
	</div>
	<div class="form-group">
		<input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
		<span id="email_error_msg"></span>
	</div>
	<button type="button" id="insert" class="btn btn-primary">Insert</button>
	<p id="success_msg"></p>
</div>
</div>
<div class="col-md-4"></div>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click","#insert",function(){

			var first_name = $("#first_name").val();
			var last_name = $("#last_name").val();
			var email = $("#email").val();

if(first_name == ""){
$("#first_name_error_msg").text("Please Enter First Name");
return false;
}

if(last_name == ""){
$("#last_name_error_msg").text("Please Enter Last Name");
return false;
}

if(email == ""){
$("#email_error_msg").text("Please Enter Email");
return false;
}


		var data = { 
				"first_name":first_name,
				"last_name":last_name,
				"email":email

			};
			//alert(data);

			$.ajax({
				url:'insert_data.php',
				method:'POST',
				data:data,
				success:function(res){
						//alert(res);
						$("#success_msg").text(res);
						 $("#first_name").val('');
						$("#last_name").val('');
						 $("#email").val('');
						 window.location.href = "index.php";
				}

			});

		});


	});
</script>