


<!DOCTYPE html>
<html>
<head>
    <title>OTP</title>
    <link rel="stylesheet" type="text/css" href="styleotp.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center"><form id="ver">
                <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
                <input type="password" id="pw" placeholder="pssword" class="form-control" name="pw" required>
                <input type="password" id="cpw" placeholder="confirm pssword" class="form-control" name="cpw" required>
                <input type="submit" value="submit" name="submit_btn" class="btn btn-primary">
    </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <script>
$("#ver").submit(function(event) {
    event.preventDefault(); 
    var pw = document.getElementById("pw").value;
     var cpw = document.getElementById("cpw").value;
      if(pw == cpw)
        {   
      $.ajax({
        url: "updatepw.php",
        type: "POST",
        data: $(this).serialize(),
        success: function (res) {
             console.log(res);
             swal.fire(
                res,
                  )
         }
            
         })
        }
        else
        {
            Swal.fire({
  title: 'Oops...',
  text: 'Please Enter Same password'
        })
        }
})
      function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
     </script>
     </html>