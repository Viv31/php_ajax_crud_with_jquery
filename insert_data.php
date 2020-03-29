<?php include_once('conn/connection.php'); ?>
<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$chk_email = "SELECT email FROM users WHERE email ='".$email."'";
$result = mysqli_query($conn,$chk_email);
if(mysqli_num_rows($result) > 0){

echo "Email exist";
}
else{

	$insert_data = "INSERT INTO users(`first_name`,`last_name`,`email`) VALUES('".$first_name."','".$last_name."','".$email."')";
$res = mysqli_query($conn,$insert_data);

if($res === true){
	echo "data inserted";

}
else{
	echo "failed to insert data";
}

}
?>