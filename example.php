<?php
	//the follwoing code has been successfully tested on a windows 8 pc
	//before running the code, make sure to change the info in 'fill.php' file
	//'fill.php' file makes a mail object for easy use and object isolation
	require("fill.php");
	$mail=Smail();
    $mail->AddAddress($_GET["email"]);
    $mail->AddReplyTo("<your email id here>", "<your name here>");
    $mail->Subject  = "AmiShouts Registration Completion.";
    $mail->Body = "Hey there... This is just a test text.";
    $mail->WordWrap = 50;
    if(!$mail->Send()) 
    	echo "E-Mail not sent";
    else 
        echo "E-Mail sent";
?>