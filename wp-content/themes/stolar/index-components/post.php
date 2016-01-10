<?php
include "smtp.php";

header("Content-Type: text/html; charset=utf-8");

$backurl = "http://stolar.by";

$problem = htmlspecialchars($_POST['problem']);
$name = htmlspecialchars($_POST['name']);
$email_address = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

// Create the email and send the message
$to = 'stolar.by@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Форма заказа:  $name";
$email_body = "Вы получили новое сообщение с сайта.\n\n" . "Вот детали:\n\nПроблема: $problem\n\nИмя: $problem\n\nEmail: $email_address\n\nPhone: $phone\n\nПолное сообщение:\n$message";
$headers = "From: noreply@stolar.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
MailSmtp($to, $email_subject, $email_body, $headers);
//return true;
print "
<script language='javascript'>
    function reload() {location = \"$backurl?su=t\"}; reload();
</script>
";
