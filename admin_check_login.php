<?php
 $email = $_POST['username'];
 $pw = $_POST['password'];
//  if (isset($_POST['submit_btn'])) {

 
$conn = new mysqli('localhost','root','','hospital_demo');
if($conn) {
	echo "connection done";
	$select = "SELECT EMAIL FROM ADMIN WHERE PASSWORD = '$pw'" ;
	$result = $conn->query($select);
    if($conn->affected_rows  != 0) {
		echo "Successfuly Logged In";
		 }
		 else{
                echo "Wrong username or password";
		 }
		}
?>
