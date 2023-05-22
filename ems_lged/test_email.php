<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $pass = (rand(10,100));


    $from = "engr.matin.com@gmail.com";
    $to = "matin.xn.lged@gmail.com";
    $subject = "Your Registration Successfully Completed";
    $message = "Your User ID : Test and Password :".$pass;
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) 
    {
        echo "The email message was sent.";
    } 
    else 
    {
        echo "The email message was not sent.";
    }
?>