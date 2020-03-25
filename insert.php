
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
     echo "connection established";
     if($name == ' ' || $add == ' ' || $gender == ' ' || $ph == ' ' || $email == ' ' || $passwrd == ' '){
        echo "Please fill all the states";
     }
   $check = "SELECT EMAIL FROM patient_data where email = '$email' limit 1";
   $result = $conn->query($check);
   if($conn->affected_rows == 0)
   {
  	$insert = "INSERT INTO patient_data (name , address ,gender, phone, email, password) VALUES ('$name', '$add','$gender', '$ph', '$email', '$pwd')";
     //prepare statement
     $conn->query($insert) or die ($conn->error);
   }
   else{
         echo "Email already Registered";
         die();
         }
}
else
 {
 	die(mysqli_error($conn));
 }
 if ($conn->affected_rows) {
  echo "Successfully added";
 }
 else{
  echo "Something went wrong";
 }

?>
