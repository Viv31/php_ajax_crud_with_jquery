<?php include('inc/header.php'); ?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8" style="margin-top: 50px;">
		
		<a href="add_data.php" class="btn btn-primary">Add New</a>
		<h4>All Data</h4>
		<div id="response_data"></div>
		
	</div>
	<div class="col-md-2"></div>
	
</div>

<?php include('inc/footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type:"GET",
			url:"getdata.php",
			dataType:"html",
			success:function(response){
					$("#response_data").html(response);
			}

		});

	});
</script>