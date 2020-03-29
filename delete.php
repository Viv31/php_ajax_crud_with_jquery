<?php 
include('conn/connection.php');
$uid = $_POST['del_id'];
//echo '$uid';
$delete_query = "DELETE FROM users WHERE id = '$uid'";
$result = mysqli_query($conn,$delete_query);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>