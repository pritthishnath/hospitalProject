<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Ubuntu:400,500,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <!-- NAVIGATION -->
    <?php 
        $firstBtn = "Admin Portal";
        include "layout/header.php"; 
    ?>

    <!-- CONTENT AREA -->
    <div class="content-area">
        <!-- SIDE BAR -->
        <?php include "layout/sidebar.php" ?>

        <!-- MAIN BODY -->
        <main class="main-body">
            Main Body
        </main>
    </div>
    


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</body>
</html>