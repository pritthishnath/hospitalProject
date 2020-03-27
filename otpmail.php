<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }

         body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(a.jpg);
        background-size: cover;
          }
    </style>
</head>
<body>
    <div class="container"style="margin-top:100px";>
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="email" placeholder="Email" class="form-control">
                <input type="button" onclick="sendEmail()" value="Send An Otp" class="btn btn-primary">
                <br>
                <br>
                <input id="otp_box" placeholder="Enter the otp" class="form-control">
                <input id="otp" type="button"value="Submit" class="btn btn-primary" onclick="checkotp()">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script> -->
    <script type="text/javascript">
        function sendEmail() {
          
            var email = $("#email");
            var random = Math.floor(Math.random() * 100000);     // returns a random integer from 0 to 99
            var check = [random,email];
            var otp = document.getElementById("otp").value;
            var otpWithEmail;
            if (isNotEmpty(email)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val(),
                       random : random,
                   }, success: function (response) {
                          console.log(response);
                          otpWithEmail = response;
                          console.log(otpWithEmail);
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }
        function checkotp() {
        
        //   console.log(random);
        
                 if(otpWithEmail.indexOf('otp'))
                    {
                         
                        console.log("matched");
                    }
                    else
                      console.log("do not match");
          
      }
      

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

       
    </script>









</body>
</html>