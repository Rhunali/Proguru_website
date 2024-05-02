<?php

 
echo("Email sending failed...");
$send_to= $_POST['email'];

$name=$_POST['fname'];

$msg=$_POST['phone'];

$message='From:'.$send_to.', Name:'.$name.',   Message:'.$msg;

//echo $send_to.$name.$msg;

if (isset($send_to)) {

        ini_set("SMTP", "relay-hosting.secureserver.net");

        ini_set("smtp_port", "25");

        ini_set("sendmail_from", $send_to);

        $from = "From:".$send_to;

        $send_to="shindepavan11@gmail.com";

        $subject = "The Balmoral Reverside Enquiry";

        $message=$message;

        mail($send_to, $subject, $message, $from);

        echo "mail sent thank you $name";

        // header("location:index.html");

}

 

?>