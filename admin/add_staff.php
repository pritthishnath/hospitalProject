<?php
 
 include 'action_admin.php';
 require "fpdf.php";

?>


<!-- <!DOCTYPE html>
<![if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <style>
       section {
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(bg.jpg);
    background-size:cover;
    height:100%;
       }
   </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Medica Superspeciality Hospital</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin-Portel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log out</a>
                    </li>
           </ul>

  </div>
</nav>
<section>
    <div class="container-fluid">
       <div class="row justify-content-center">
        <?php if(isset($_SESSION['response'])){?>

        <div class="alert alert-<?= $_SESSION['res_type'] ; ?> alert-dismissible text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
       <?= $_SESSION['response'] ;?> 
</div>

  <?php      }  unset($_SESSION['response']) ?>
        </div>
  <div class="row" style="margin-left:1px;">
    <div calss="col-md-4" >
            <h3 class="text-center text-info">Add Staff</h3>
            <form method="POST" action="action_admin.php" enctype="multipart/form-data">
            
                <div class="form-group">
                    <input name="sid" class="form-control" type="text" placeholder="Enter the Staff Id"  value="<?= $sid;?>" required>
                    
                </div>
                <div class="form-group">
                    <input name="name" class="form-control" type="text" placeholder="Enter the Name" value="<?= $name;?>" required>
                    
                </div>
                <div class="form-group">
                    <input name="address" class="form-control" type="text" placeholder="Enter the Address" value="<?= $add;?>" required>
                    
                </div>
                <div class="form-group">
                    <input name="email" class="form-control" type="text" placeholder="Enter the email" value="<?= $email;?>" required>
                    
                </div>
                <div class="form-group">
                    <input name="phone" class="form-control" type="text" placeholder="Enter the phone" value="<?= $ph;?>" required>
                    
                </div>
                <div class="form-group">
                    <input name="dept" class="form-control" type="text" placeholder="Enter the Department" value="<?= $dept;?>" required>
                    
                </div>
                <div class="form-group">
                    <?php

                    if($update == true){
                        ?>
                    <input type="submit" name="update-staff" class="btn btn-success btn-block"   value="update" required>
                    <?php }
                    else{
                        ?>
                    <input type="submit" name="add-staff" class="btn btn-primary"   value="submit" required>
                    <?php } ?>
                </div>                    
               </form>
    </div>
                    <div class="col-md-8" style="margin-top:45px;margin-right:20px;left:5px;">


                     <?php 
                         $show = "SELECT SID,NAME,ADDRESS,PHONE,DEPT FROM STAFF";
                         $result = $conn->query($show);

                    ?>
                              <table class="table hover-table">
                                                <thead>
                                                <tr>
                                                    <th>Sid</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Dept</th>
                                                    
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                     <?php 
                                                    
                                                     while($row = $result->fetch_assoc()){
                                                    
                                                    ?>
                                                    <tr>
                                                    <td><?=$row['SID']?></td>
                                                    <td><?=$row['NAME']?></td>
                                                    <td><?=$row['ADDRESS']?></td>
                                                    <td><?=$row['PHONE']?></td>
                                                    <td><?=$row['DEPT']?></td>
                                                    
                                                    <td>
                                                    <a href="add_staff.php?edit-staff=<?=$row['SID'];?>" class="badge badge-success p-2">Edit</a> |
                                                    <a href="action_admin.php?delete-staff=<?=$row['SID'];?>" onclick="return confirm('Do You want to delete this record?');" class="badge badge-danger p-2">Delete</a></td>
                                                    </tr>  
                                                    <?php } ?>
                                                </tbody>
                                                    
                                                
                        </table>
                        <form method="post">
                        <div class="text-center">
                                <button type="submit" class="btn btn-info" name="pdf">download pdf</button>
                        </div>
                        </form>
                               </div>
                            </div>
                        </div>
                        <?php
       
        // if(isset($_POST['pdf'])) { 

        //     // echo "This is Button1 that is selected"; 
        //     // header('location:test_manage.php');
        //     include_once("../db_connect.php");
        //     $sql = "SELECT * FROM TEST_DETAILS";
        //     $resulset = $conn->query($sql);
        //     require('fpdf.php');
        //     $pdf = new FPDF();
        //     $pdf->AddPage();
        //     $pdf->SetFont('Arial','B',12);
        //     while($rows = $resultset->fetch_assoc()) {
        //     $pdf->SetFont('Arial','',12);
        //     $pdf->Ln();
        //     foreach($rows as $column) {
        //     $pdf->Cell(47,12,$column,1);
        //     }
        //     }
        //     $pdf->Output();
            
        //     class myPDF extends FPDF{
        //         function header(){
        //             $this->Image('medica.png',10,5);
        //             $this->SetFont('Arial','8',14);
        //             $this->Cell(276,5,'Medica Test Details',0,0,'c');
        //             $this->Ln();
        //             $this->Cell(276,5,'219/1,VivekanadanaNagar,Kolaka',0,0,'c');
        //             $this->Ln(20);

        //         }
        //         function footer(){
        //             $this->SetY(-15);
        //             $this->SetFont('Arial','',8);
        //             $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'c');
        //         }
        //         function headerTable(){
        //             $this->SetFont('Times','B',12);
        //             $this->Cell(20,10,'Pid',1,0,'c');
        //             $this->Cell(40,10,'Tid',1,0,'c');
        //             $this->Cell(40,10,'Name',1,0,'c');
        //             $this->Cell(60,10,'Address',1,0,'c');
        //             $this->Cell(60,10,'Email',1,0,'c');
        //             $this->Cell(30,10,'Phone',1,0,'c');
        //             $this->Cell(30,10,'Test',1,0,'c');
        //             $this->Cell(30,10,'Payment',1,0,'c');
        //             $this->Cell(50,10,'Date-Time',1,0,'c');
        //             $this->Ln();
        //             function viewTable(){
        //                 $this->SetFont('Times','',12);
            
        //                 $all = "SELECT * FROM TEST_DETAILS";

        //                $result = $conn->query($all);
        //                 while($row = $result->fetch_assoc()){
        //                     $this->SetFont('Times','B',12);
        //                     $this->Cell(20,10,$row['PID'],1,0,'c');
        //                     $this->Cell(40,10,$row['TID'],1,0,'c');
        //                     $this->Cell(40,10,$row['NAME'],1,0,'c');
        //                     $this->Cell(60,10,$row['ADDRESS'],1,0,'c');
        //                     $this->Cell(60,10,$row['EMAIL'],1,0,'c');
        //                     $this->Cell(30,10,$row['PHONE'],1,0,'c');
        //                     $this->Cell(30,10,$row['TEST'],1,0,'c');
        //                     $this->Cell(30,10,$row['PAYMENT'],1,0,'c');
        //                     $this->Cell(50,10,$row['DATE'],1,0,'c');
        //                     $this->Ln();
        //                 }

        //             }
        //         }
        //     }
        // } 
        // }
        // ?>
                                                    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        </section>
    </body>
</html>