<?php

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$message = $_POST['msgContent'];


$mailheader = "From:".$name."<".$email.">\r\n";
$subject = "Enquery From Prshomoeo $name";
$recipient = "prshomoeo@gmail.com";

$mailContent = "Name: $name\r\nEmail: $email \r\nCity: $city \r\nPhone Number: $phone\r\nMessage: $message";



mail($recipient, $subject, $mailContent, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting us. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>