<!DOCTYPE html>
<html>
<head>
<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form</title>
  <link rel="shortcut icon" type="iamge/x-icon" href="b.ico">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<body>

       <div class="container">
        <p>This is from Pritthish</p>
       	  <div class="formbox">
       	  	  <div class="button">
       	  	  	   <div id="b"></div>
       	  	  	  <button type="button" class="btn" onclick="register()">Register</button>
       	  	  	  <button type="button" class="btn" onclick="login()">Log In</button>
       	  	  </div>
       	  	  	   <form id="register" class="input">
                     <input type="text" class="input-f" id="name" placeholder="Name" name="name" required>
                     <input type="text" class="input-f" id="add" placeholder="address" name="add"required>
                     <br>
                     <br>
                     <p class="gender"><input type="radio" name="gender" id="genderM" value="M" required/>Male</p>
                     <p class="gender"><input type="radio"  name="gender" id="genderF"  value="F" required/>Female</p>
                     <input type="text" class="input-f" id="ph" placeholder="phno" name="ph" required>
                     <input type="email" name="email" class="input-f" placeholder="email" required>
                     <input type="password" name="pw" id="pw" class="input-f" placeholder="password" required>
                     <input type="password" name="cpw" id="cpw" class="input-f" placeholder="confirm password" required>
                     <input type="checkbox" name="checkbox" class="box"><span>Agree turms & conditions</span>
                     <button type="submit" value="register" id="reg" name="submit" class="submit-btn">Register</button>
                 </form>
                 <form id="login" class="input">
                     <input type="text" class="input-f" placeholder="Username that is email" name="uname" required>
                     <input type="password" name="pwc" id="pwc" class="input-f" placeholder="password" required>
                     <input type="checkbox" name="checkbox" class="box"><span>Remember password</span>
                     <a href="otp.php" class="box" onclick="otp()" name="ver"><span>Forgot Password?</sapn></a>
                     <input type="submit" name="submit_btn" class="submit-btn" value="Log In"/>
                 </form>
       	  	 </div>

       	  </div>
          <script>
    var a = document.getElementById("register");
    var b = document.getElementById("login");
    var c = document.getElementById("b");

       function login()
       {
        a.style.left="-400px";
        b.style.left="50px";
        c.style.left="110px";
       }
       function register()
       {
        a.style.left="40px";
        b.style.left="450px";
        c.style.left="0";
       } 
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
  $("#register").submit(function(event) {
    event.preventDefault();
     var pw = document.getElementById("pw").value;
     var cpw = document.getElementById("cpw").value;
      if(pw == cpw)
        {
      $.ajax({
        url: "insert.php",
        type: "POST",
        data: $(this).serialize(),
        success: function (response){ 
          // $("#alert").html(response);
          console.log(response);
          // window.location.href = "otpmail.php";
          Swal.fire(
    response,
          )
          // window.location.href = "otpmail.php"; 
        }
      })
        }
        else{
          Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Please Enter Same password'
        })
      }
     })
 s
 </script>
</body>
</html>