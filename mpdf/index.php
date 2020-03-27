<?php
 include ('C:\xampp\htdocs\project\mpdf\vendor\autoload.php');
$conn = new mysqli('localhost','root','','hospital_demo');
$select = "SELECT * FROM TEST_DETAILS";
$result = $conn->query($select);
$row = $result->fetch_assoc();
 
$tid = $row['TID'];
$name = $row['NAME'];
$add = $row['ADDRESS'];
$email = $row['EMAIL'];
$ph = $row['PHONE'];
$test = $row['TEST'];
$pay = $row['PAYMENT'];
$update =true;
 $mpdf = new \Mpdf\Mpdf();
 $mpdf->WriteHTML($tid,$name,$add,$email,$ph);

 $mpdf->output();

?>