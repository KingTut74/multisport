<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=acehole', 'firsttri', '50trifinish54*');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}



//end reservations content

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//begin insert query to write form data to database
if (array_key_exists('myemail', $_POST)) {

    $event = $_POST['event'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $mylemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mydate = $_POST['mybirthdate'];
    $mycommments = $_POST['mycomments'];

    try {
        $sql = 'INSERT INTO register SET
        event = :event,
        first_name = :first_name,
        last_name = :last_name,
        email = :email,
        phone = :phone,
        birthdate = :birthdate,
        disability = :disability';
        $s = $pdo->prepare($sql);
        $s->bindValue(':event',$_POST['event']);
        $s->bindValue(':first_name',$_POST['myfname']);
        $s->bindValue(':last_name',$_POST['mylname']);
        $s->bindValue(':email',$_POST['myemail']);
        $s->bindValue(':phone',$_POST['myphone']);
        $s->bindValue(':birthdate',$_POST['mybirthdate']);
        $s->bindValue(':disability',$_POST['mycomments']);
        $s->execute();


    } catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
}
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
if (array_key_exists('myemail', $_POST)) {

    $event = $_POST['event'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mydate = $_POST['mybirthdate'];
    $mycomments = $_POST['mycomments'];

    date_default_timezone_set('Etc/UTC');
    
// the message
    $msg = "Your Registration is Confirmed\nGood Luck on Your Race";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail($_POST['myemail'],"Triathlon Registration",$msg);
    echo "Congratulations! You are signed up for the Triathlon.";
   /* require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'relay-hosting.secureserver.net';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 25;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = "none";

    //Whether to use SMTP authentication
    $mail->SMTPAuth = false;

   //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "";

    //Password to use for SMTP authentication
    $mail->Password = "";


    //Set who the message is to be sent from
    $mail->setFrom($myemail, $myfname);

    //Set an alternative reply-to address
    $mail->addReplyTo($myemail, $mylname);

    //Set who the message is to be sent to
    $mail->addAddress('cynthia.writer01@gmail.com', 'beardtoolong68*');

    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';
    $mail->isHTML(true);
    //Build a simple message body
    $mail->Body = 'event:' . $_POST['event'] .'<br>';
    $mail->Body .= 'first name:' .$_POST['myfname'] .'<br>';
    $mail->Body .= 'last name:' .$_POST['mylname'] .'<br>';
    $mail->Body = 'email:' . $_POST['myemail'] .'<br>';
    $mail->Body .= 'phone:' .$_POST['myphone'] .'<br>';
    $mail->Body .= 'birthdate' .$_POST['mybirthdate'].'<br>';
    $mail->Body .= 'accommodations comments' .$_POST['mycomments'] .'<br>';

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Your message was sent";
        // include "success.html.php";
    }
    */
} else {
    include 'register.html.php';
}


