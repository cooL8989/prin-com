<?php
//get data from form  
$name = $_POST['Name'];
$nompany = $_POST['Company'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];
$to = "voundiasseng@gmail.com";
$subject = "Mail From TMS";

$txt ="Name = ". $name . "\r\n  Company = " . $company . "\r\n Email =" . $email . "\r\n Phone =" . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" ."CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>