<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$from = $_REQUEST['email'];
$name = $_REQUEST['first_name'] . ' ' . $_REQUEST['last_name'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$body = '
<html lang="en">
<head>
  <title>Emanate Software</title>
</head>
<body>
  <h3>Email from Emanate Software Website.</h3>
  <table>
    <tr>
      <td>Full Name :</td>
      <td></td>
	 <td>' . $name . '</td>
    </tr>
     <tr>
      <td>Subject :</td>
      <td></td>
	 <td>' . $subject . '</td>
    </tr> 
    <tr>
      <td>Message :</td>
      <td></td>
	 <td>' . $message . '</td>
    </tr>
  </table>
</body>
</html>
';

$mail = new PHPMailer(TRUE);

try {
    /* Set the mail sender. */
    $mail->setFrom($from, $name);

    /* Add a recipient. */
    $mail->addAddress('hello@emanate.software', 'Emanate Software');

    /* Set the subject. */
    $mail->Subject = $subject;

    /* check if body is html, then set body property */
    $mail->isHTML(TRUE);
    $mail->Body = $body;

    /* Tells PHPMailer to use SMTP. */
    $mail->isSMTP();

    /* SMTP server address. */
    $mail->Host = 'smtp-relay.sendinblue.com';
    /* Use SMTP authentication. */
    $mail->SMTPAuth = TRUE;

    /* Set the encryption system. */
    $mail->SMTPSecure = 'tls';

    /* SMTP authentication username. */
    $mail->Username = 'jamesemanuel99@gmail.com';

    /* SMTP authentication password. */
    $mail->Password = 'AgJ74LZS5k1D0xIh';

    /* Set the SMTP port. */
    $mail->Port = 587;

    /* Enable SMTP debug output. 0 - no output is generated, 4 - low level info is generated */
    $mail->SMTPDebug = 4;

    /* Finally, send the mail. */
    $mail->send();
} catch (Exception $e) {
    echo $e->errorMessage();
} catch (\Exception $e) {
    echo $e->getMessage();
}