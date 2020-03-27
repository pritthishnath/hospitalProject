<?php
 $email = $_POST['uname'];
 $pw = $_POST['pwc'];
 $pwd = md5($pw);
//  if (isset($_POST['submit_btn'])) {

 
$conn = new mysqli('localhost','root','','hospital_demo');
if($conn) {
	$select = "SELECT EMAIL FROM patient_Data WHERE PASSWORD = '$pwd'" ;
	$result = $conn->query($select);
    if($conn->affected_rows  != 0) {
		 echo" success";
		echo "Successfuly Logged In";
		 }
		 else{
                echo "Wrong username or password";
		 }
		}
?>
