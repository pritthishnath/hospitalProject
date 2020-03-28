<?php
   session_start();
	// if(isset($_SESSION['LOGGED_IN']))
	// {
	// 	header('admin-panel.php');
	// 	exit();
	// }
 $email = $_POST['username'];
 $pw = $_POST['password'];
//  if (isset($_POST['submit_btn'])) {

 
$conn = new mysqli('localhost','root','','hospital_demo');
if($conn) {
	echo "connection done";
	$select = "SELECT EMAIL FROM ADMIN WHERE PASSWORD = '$pw'" ;
	$result = $conn->query($select);
    if($conn->affected_rows  != 0) {
		 echo "success";
		 $status = "success";
		// $_SESSION['LOGGED_IN'] ='1';
		// $_SESSION['email'] = $email;
		exit();
		
		 }
		 else{
			echo "Error";
				die();
		 }
		}
?>
