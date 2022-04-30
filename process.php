<?php
$to = "amigohmccclurkin98@gmail.com";
$from = $_REQUEST['email'];
$name = $_REQUEST['first_name'] . ' ' . $_REQUEST['last_name'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
//$headers = "From: $from";

//$fields = array();
//$fields["name"] = "Name";
//$fields["email"] = "E-mail";
//$fields["subject"] = "Subject";
//$fields["message"] = "Message";

$body = '
<html lang="en">
<head>
  <title>Emanate Software</title>
</head>
<body>
  <h1>Here is the message from Emanate Software!</h1>
  <table>
    <tr>
      <td>Name</td>
	 <td>' . $name . '</td>
    </tr>
     <tr>
      <td>Subject</td>
	 <td>' . $subject . '</td>
    </tr> 
    <tr>
      <td>Message</td>
	 <td>' . $message . '</td>
    </tr>
  </table>
</body>
</html>
';

//$body = "Here is the message from Emanate Software:\n\n";
//foreach ($fields as $a => $b) {
//    $body .= sprintf("%20s: %s\n", $b, $_REQUEST[$a]);
//}

$send = sendHtmlMail(toAddress: $to, subject: $subject, fromMail: $from, mailMessage: $body);

if (!$send) {
    print_r(false);
    $errorMessage = error_get_last()['message'];
}

function sendHtmlMail(
    string $toAddress,
    string $subject,
    string $fromMail,
    string $mailMessage,
): bool {

    $to        = $toAddress;
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'Content-Transfer-Encoding: base64';
    $headers[] = 'To: '.$to;
    $headers[] = 'From: '.$fromMail;

    return mail($to, $subject, $mailMessage, implode("\r\n", $headers));
}