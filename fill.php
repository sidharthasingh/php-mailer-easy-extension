<?php
   //the follwoing code has been successfully tested on a windows 8 pc
   //make sure to remove '<' and '>'.
   //this file makes a mail object for easy use and object isolation
   require("autoload.php");
   function Smail()
   {
      $mail=new PHPMailer();
      $mail->IsSMTP();
      $mail->Mailer = "smtp";
      $mail->Host = "smtp.gmail.com";
      $mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Username = "<your email id here>";
      $mail->Password = "<your password id here>";
       
      $mail->From     = "<your email id here>";
      $mail->FromName = "<your name id here>";
      return $mail;
   }
?>