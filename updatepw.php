<?php
$email = $_POST['email'];
$cpw = $_POST['cpw'];
$cpw = md5($cpw);
 $conn = new mysqli('localhost','root','','hospital_demo');
 if($conn)
  {
    if($cpw==' ' || $_POST['pw']==' ' || $email == ' '){
       echo"Please fill out this fields";
       die();
    }
      echo"connection done";
       $update = "update patient_data set password='$cpw' where email='$email'";
       $result = $conn->query($update);
       if($conn->affected_rows != 0)
       {
            echo "Successfuly updated";
            die();
       }
       else  {
           echo "Email is not registered yet";
           die();
  }
}
  else
  {
      echo "something is went wrng";
  }
?>