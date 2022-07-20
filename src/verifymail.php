
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 $eemail=$_GET['email'];
require 'Exception.php'; 
require 'PHPMailer.php'; 
require 'SMTP.php'; 
include('db.php');
$sql=mysqli_query($con,"SELECT `email`, `pass` FROM `login` WHERE `email`='$eemail'");
$rows=mysqli_fetch_array($sql);
$pwd=$rows['pass'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'smartpwd98@gmail.com';                     //SMTP username
    $mail->Password   = 'lapjzghowyarwoyg';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('smartpwd98@gmail.com', 'Smart Pwd');
    $mail->addAddress($eemail);     //Add a recipient
  //  $mail->addAddress('ellen@example.com');               //Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   /// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'You Are An Executive Officer Now';
    $mail->Body    = 'Your Application Is approved your can login now <br>Username : '.$eemail.' <br> Password :'.$pwd;
    $mail->AltBody = 'Thanks For your Interest';

    $mail->send();
    echo "<script>alert('Message has been Sent');window.location.href='../admin/viewofficers.php';</script>";
   
} catch (Exception $e) {
    echo $eemail;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}