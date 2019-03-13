<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$visitor_email = $POST['email'];
$message = $_POST['message'];

$to= 'amina_rehman@outlook.com';
$headers = "From: ".$visitor_email;
$txt = "Message from ".$name.".\n\n".$message;

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");

}


?>