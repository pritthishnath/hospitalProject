
<?php
 $name = $_POST['name'];
$add = $_POST['add'];
 $gender = $_POST['gender'];
$ph = $_POST['ph'];
$email = $_POST['email'];
$passwrd = $_POST['cpw'];
$pwd = md5($passwrd);
 
//connection_database
   $conn = new mysqli('localhost','root','','hospital_demo');
   if($conn)
  {
  	$insert = "INSERT INTO patient_data (name , address ,gender, phone, email, password) VALUES ('$name', '$add','$gender', '$ph', '$email', '$pwd')";
     //prepare statement
  	$conn->query($insert) or die ($conn->error);
}
else
 {
 	die(mysqli_error($conn));
 }
 if (!$conn->error) {
  echo "Successfully added";
 }
 else{
  echo "Something went wrong";
 }

?>
