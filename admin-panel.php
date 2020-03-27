<html>
    <head>
            <title>
              Admin_panel
            </title>

            <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(bgadmin.jpeg);
        background-size: cover;
          }
          .list-group{
            top:50px;
          }
  </style>

    </head>
    <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  
  <a class="navbar-brand"><img src="medica.png" alt="" style="height:60px; width:110px;float:left;">Medica Superspeciality Hospital</a>

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
      <div class="navbar navbar-inverse" style="background:url('bgadmin.jpg')"></div>
   <div class="container-fluid">
    <div class="row">
       <div class="col-md-3">
               <div class="list-group">
             <a href="" class="list-group-item active">Categories</a>
             <a href="search-patient.php" class="list-group-item">Patients Details</a>
             <a href="appointment_Admin.php" class="list-group-item">Appointments</a>
             <a href="test_manage.php" class="list-group-item">Test management</a>
             <a href="add_appoint_ment.php" class="list-group-item">Apoointment</a>
                </div>
        <hr>
              <div class="list-group">
             <a href="add_doctor.php" class="list-group-item">Add doctor</a>
             <a href="add_staff.php" class="list-group-item">Add staff</a>
             <a href="salary.php" class="list-group-item">salary</a>
               </div>
        </div>
        <div class="col-md-8">
        </div>
        <div class="col-md-1"></div>
    </div>
        </section>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>