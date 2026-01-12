<?php
session_start();
date_default_timezone_set('Asia/Kolkata');


require '../../php-mailer/src/PHPMailer.php';
require '../../php-mailer/src/SMTP.php';
require '../../php-mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sender Data
    $name = str_replace(array("\r","\n"),array(" "," "), strip_tags(trim($_POST["name"])));
    $phone = trim($_POST["phone"]);
    $speciality = trim($_POST["speciality"]);
    $message = trim($_POST["message"]);
    $subject = trim("KIMSHEALTH : ".$speciality);

    if (empty($name) || empty($phone)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }
	
	$userAnswer = isset($_POST['captcha']) ? (int)$_POST['captcha'] : 0;
    $correctAnswer = isset($_SESSION['captcha_answer']) ? (int)$_SESSION['captcha_answer'] : 0;

    if ($userAnswer != $correctAnswer) {
        echo "❌ Wrong answer. Try again.";
        exit;
    }
	

	
	// Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Enable verbose debug output
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // Set the mailer to use SMTP
        $mail->isSMTP();

        // Specify the SMTP server credentials
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kimshealthmailer@gmail.com'; // Your Gmail email address
        $mail->Password = 'xolvoyoaofaqeybd'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
		$mail->isHTML(true);


        // Set the email sender and recipients
        $mail->setFrom('kimshealthmailer@gmail.com', 'KIMSHEALTH');
    
		
		$recipients = [
			'digitaladvt@kimsglobal.com', 'appointments@kimsglobal.com'
        ]; 
		
        foreach ($recipients as $recipient) {
            $mail->addAddress($recipient);
        }

        // Add recipients to BCC
        $bccRecipients = [
            'mohit@healthcaremartech.com'
        ];
        foreach ($bccRecipients as $bccRecipient) {
            $mail->addBCC($bccRecipient);
        }

        // Set the email subject and body
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Phone: $phone<br>Message: $message<br>Speciality: $speciality";

        // Send the email
        $mail->send();
        //echo 'Email sent successfully!';
        //header("location: thank-you.php"); // Redirect to thank-you.php page
		
		echo '<script>
				  window.location.href = "thank-you.php";
				</script>';
        exit;
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
