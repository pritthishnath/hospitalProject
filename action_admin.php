<?php
include 'config_admin.php';
$update = false ;
$sid="";
$did = "";
$tid="";
$pay="";
$test="";
$name = "";
$add = "";
$email = "";
$ph = "";
$dept = "";
$image = "";
session_start();
 if(isset($_POST['add']))
 {
     $tid = $_POST['tid'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $test = $_POST['test'];
     $pay = $_POST['payment'];
     $query = "INSERT INTO TEST_DETAILS(TID,NAME,ADDRESS,PHONE,EMAIL,TEST,PAYMENT) VALUES ('$tid','$name','$address','$phone','$email','$test','$pay')";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
          header('location:test_manage.php');
          $_SESSION['response'] = "successfully Added";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }
 if(isset($_POST['add-doctor']))
 {
     $did = $_POST['did'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $dept = $_POST['dept'];
     $photo = $_FILES['image']['name'];
     $upload = "uploads/".$photo;
     $query_dept = "INSERT INTO DOCTOR_DEPT(DOCTOR,DEPT) VALUES ('$name' , '$dept')";
     $conn->query($query_dept);
     $query = "INSERT INTO DOCTOR(DID,IMAGE,NAME,ADDRESS,EMAIL,PHONE,DEPT) VALUES ('$did','$upload','$name','$address','$email','$phone','$dept')";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);
          header('location:add_doctor.php');
          
          $_SESSION['response'] = "successfully Added";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }
 if(isset($_POST['add-staff']))
 {
     $sid = $_POST['sid'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $dept = $_POST['dept'];
     $query = "INSERT INTO STAFF(SID,NAME,ADDRESS,EMAIL,PHONE,DEPT) VALUES ('$sid','$name','$address','$email','$phone','$dept')";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);
          header('location:add_staff.php');
          
          $_SESSION['response'] = "successfully Added";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }

 if(isset($_POST['update']))
 {
     echo "If block update";
     $tid = $_POST['tid'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $test = $_POST['test'];
     $pay = $_POST['payment'];
     $query = "UPDATE TEST_DETAILS SET TID = '$tid', NAME = '$name', ADDRESS = '$address' , PHONE = '$phone', EMAIL = '$email', TEST = '$test' , PAYMENT = '$pay' WHERE TID = '$tid' ";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
          header('location:test_manage.php');
          $_SESSION['response'] = "Updated Successfully";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }

 if(isset($_POST['update-staff']))
 {
     echo "If block update";
     $sid = $_POST['sid'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $dept = $_POST['dept'];
     $query = "UPDATE STAFF SET SID = '$sid', NAME = '$name', ADDRESS = '$address' , PHONE = '$phone', EMAIL = '$email', DEPT = '$dept' WHERE SID = '$sid' ";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
          header('location:add_staff.php');
          $_SESSION['response'] = "Updated Successfully";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }
 if(isset($_GET['delete'])){
      echo "if block";
     $id = $_GET['delete'];
    $delete = "DELETE FROM TEST_DETAILS WHERE TID = '$id'";
    $conn->query($delete);
    if($conn->affected_rows > 0)
       {
           header('location:test_manage.php');
           $_SESSION['response'] = "Successfully deleted";
           $_SESSION['res_type'] = "danger";
       }
 }
 if(isset($_GET['delete-doctor'])){
    echo "if block";
   $id = $_GET['delete-doctor'];
   $imaged= "SELECT IMAGE FROM DOCTOR WHERE DID = '$id'";
   $imagedelete = $conn->query($imaged);
   $row = $imagedelete->fetch_assoc();
   $imagepath = $row['IMAGE'];
   unlink($imagepath);
  $delete = "DELETE FROM DOCTOR WHERE DID = '$id'";
  $conn->query($delete);
  if($conn->affected_rows > 0)
     {
         header('location:add_doctor.php');
         $_SESSION['response'] = "Successfully deleted";
         $_SESSION['res_type'] = "danger";
     }
}

if(isset($_GET['delete-staff'])){
    echo "if block";
   $id = $_GET['delete-staff'];
  $delete = "DELETE FROM STAFF WHERE SID = '$id'";
  $conn->query($delete);
  if($conn->affected_rows > 0)
     {
         header('location:add_staff.php');
         $_SESSION['response'] = "Successfully deleted";
         $_SESSION['res_type'] = "danger";
     }
}
 if(isset($_GET['edit'])){
     
   $id = $_GET['edit'];
   $all = "SELECT * FROM TEST_DETAILS WHERE TID = '$id'";

   $result = $conn->query($all);
   $row = $result->fetch_assoc();
 
       $tid = $row['TID'];
       $name = $row['NAME'];
       $add = $row['ADDRESS'];
       $email = $row['EMAIL'];
       $ph = $row['PHONE'];
       $test = $row['TEST'];
       $pay = $row['PAYMENT'];
       $update =true;
    
 }
 if(isset($_GET['edit-doctor'])){
     
    $id = $_GET['edit-doctor'];
    $all = "SELECT * FROM DOCTOR WHERE DID = '$id'";
 
    $result = $conn->query($all);
    $row = $result->fetch_assoc();
  
        $did = $row['DID'];
        $imageold = $row['IMAGE'];
        $name = $row['NAME'];
        $add = $row['ADDRESS'];
        $email = $row['EMAIL'];
        $ph = $row['PHONE'];
        $dept = $row['DEPT'];
        $update =true;
     
  }
  if(isset($_POST['update-doctor']))
 {
     echo "If block update";
     $did = $_POST['did'];
     $name = $_POST['name'];
     $add = $_POST['address'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $dept = $_POST['dept'];
     $image = $_POST['image'];
     $query = "UPDATE DOCTOR SET NAME = '$name', ADDRESS = '$add' , PHONE = '$phone', EMAIL = '$email', DEPT = '$dept' , IMAGE='$image' WHERE DID = '$did' ";
     $conn->query($query);
     if($conn->affected_rows > 0)
      {
          header('location:test_manage.php');
          $_SESSION['response'] = "Updated Successfully";
          $_SESSION['res_type'] = "Success";
      }
      else{
          echo "Went wrong";
      }
 }

 if(isset($_GET['edit-staff'])){
     
    $id = $_GET['edit-staff'];
    $all = "SELECT * FROM STAFF WHERE SID = '$id'";
 
    $result = $conn->query($all);
    $row = $result->fetch_assoc();
  
        $sid = $row['SID'];
        $name = $row['NAME'];
        $add = $row['ADDRESS'];
        $email = $row['EMAIL'];
        $ph = $row['PHONE'];
        $dept = $row['DEPT'];
        $update =true;
     
  }
 

?>