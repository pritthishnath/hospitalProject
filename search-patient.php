<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Medica Patient Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
    section {
    background: url(bg.jpg);
    background-size:cover;
    height:150%;
	   }
	   span{
		   top:20px;
		   margin-left: 10px;
	   }
	</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand">Medica Superspeciality Hospital</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="nav nav-pills ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="admin-panel.php">Admin-Portel</a>
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
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center" style = "bottom: 50px;">Medica Patient List</h2><br />
			<div class="form-group">
				<div class="input-group" style = "top : 30px; ">
					<input type="text"style = "bottom: 50px;" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result">
			<table class="table table bordered">
				<thead>
					<tr>
						<th>patient_name</th>
						<th>Address</th>
						<th>gender</th>
						<th>Phone</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody id="table-body">

			    </tbody>
		  	</table>	
			</div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />

		</section>
	</body>
</html>
<script>
$(document).ready(function(){
	$(".table").hide();
      $('#search_text').keyup(function(){
                var txt = $(this).val();
				if (txt) {
                        $.ajax({
							url: "fetch_patient.php",
							method: "POST",
							data:{search: txt},
							// datatype: "html",
							success:function(data)
							{	
								$(".table").show();
                            	$('#table-body').html(data);
								console.log(data);
							}
						})
				}
				else
				{
					$(".table").hide();
						
				}

	  })
})
</script>




