<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $subject = "This is Your OTP";
        $random = $_POST['random'];
        $body = "This is Your one time password - ".$random;

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "soumyo.chak1999@gmail.com";
        $mail->Password = 'Chak2096@';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress("$email");
        $mail->Subject = $subject;
        $mail->Body = $body;

        // class Otp {
        //     public $otp;
        //     public $email;

        
        // }

        if ($mail->send()) {
            $status = "success";
            $response[] = [$random, $email];
            
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
