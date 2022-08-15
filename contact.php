<?php 
    if(!isset($_POST['submit'])){
        echo "ERROR! you need to fill the form";
    }
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($name) || empty($visitor_email)){
        echo "Name and email are mandatory!";
        exit;
    }

    // $email_from = 'adhipsashi@gmail.com';
    $email_subject = "New form submission.";
    $email_body =  "Received new mail from" .$name. " \r\n";
        "email address:" .$visitor_email. " \r\n";
        "Here is the message: \n" .$message.   ;                                                                              


    $to = "adhipsashi@gmail.com"; // this is your Email address
    $headers = "From: " .$email_from. " \r\n"; // this is the sender's Email address
    
    mail($to, $email_subject, $email_body, $headers)
    or die("ERROR!");

    echo'
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body style="background-color: #191d2b ; ">
    <h1 class="con" style="margin:20px 40px 20px; font-size:40px; text-align:center;">
        Thank you for contacting me. <br>I will get back to you as soon as possible.
    </h1>
    <p class="back" style="text-align:center; color:#454e56;">Go back to the <span style="color:#27AE60"><a href="index.html" style="text-decoration:none; " rel="noreferrer noopener" target="_blank">homepage</a></span> .</p>
</body>
</html>
    
    
    
    ';

    // $firstname = $_POST['firstname']; 
    // $subject = $_POST['subject']; 
    // $subject = "Form submission";
    // $subject2 = "Copy of your form submission";
    // $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    // $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>

