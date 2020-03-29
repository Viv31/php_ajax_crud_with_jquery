<table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>Sno<?php  $sno=1;?></th>
        <th>First Name</th>
         <th>Last Name</th>
          <th>Email</th>
         <th colspan="2">Action</th>
        
      </tr>
    </thead>
    <tbody>

<?php
include('conn/connection.php');

$GetAll_Data = "SELECT * FROM users";
$res = mysqli_query($conn,$GetAll_Data);
if(mysqli_num_rows($res) > 0){
	 while($rs = mysqli_fetch_assoc($res)){ 

	 	?>
	 	<tr>
        <td><?php echo $sno++; ?></td>
       
        <td><?php echo $rs['first_name']; ?></td>
        <td><?php echo $rs['last_name']; ?></td>
        <td><?php echo $rs['email']; ?></td>
        <?php $id = $rs['id']; ?>
        
         <td><?php echo "<a href='update_disease.php?id=$id'><button class='btn btn-warning'>Edit</button></a>"?></td>
         
         <td><a href="#" id = "<?php echo $rs['id']; ?>" class="trash" >Del</td>
      </tr>
      <?php

  }

}

?>
</tbody>
  </table>
<?php include_once('inc/footer.php'); ?>
<script>
 $(document).ready(function(){
$('.trash').click(function(){
 var del_id = $(this).attr('id');
//alert(del_id);
 var $ele = $(this).parent().parent();

var conf = confirm("Do You want to delete this");
if(conf){
	$.ajax({
                type:'POST',
                url:'delete.php',
                 data:{del_id:del_id},
                success: function(data){
                   if(data == "YES"){
                    $ele.fadeOut().remove();
                 }else{
                        alert("can't delete the row")
                 }
                }

                });

}





});


 });

</script>