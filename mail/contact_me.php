<?php

use PHPMailer\PHPMailer\PHPMailer;

require "../lib/vendor/autoload.php";
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'dahunsi.fehinti@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

date_default_timezone_set('Africa/Lagos');

// Create the email and send the message
$mail = new PHPMailer;
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 3;
//Set the hostname of the mail server
$mail->Host = 'send.one.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = ssl;
//Username to use for SMTP authentication
$mail->Username = 'mailer@3dtrance.com';
//Password to use for SMTP authentication
$mail->Password = '3DTRANCe1!';

$mail->setFrom('mailer@3dtrance.com', '3DTrance Mail Daemon');
//    $mail->addAddress("info@3dtrance.com", "Communications Director, 3DTrance");
//Set an alternative reply-to address
$mail->addReplyTo($email_address, 'Reply');
//Set who the message is to be sent to
$mail->addAddress($to, "Webmaster");
//Set the subject line
$mail->Subject = $email_subject;
$mail->Body = $email_body;
if (array_key_exists('attachment', $_FILES)) {
    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['attachment']['name']));
    if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadfile)) {

        $mail->addAttachment($uploadfile, 'My uploaded file');

    } else {
        $data['failure']['message'] = "failed to move file to " . $uploadfile;
    }
}

//send the message, check for errors
if (!$mail->send()) {
    $data['sendmailerror'] = $mail->ErrorInfo;
} else {
    $data['sendmailsuccess'] = "Message sent";
}

echo json_encode($data);
return true;