<?php
if (isset($_POST['token']) && isset($_POST['action'])) {
  $captcha_token = $_POST['token'];
  $captcha_action = $_POST['action'];
} else {
  die('The captcha doesn\'t work correctly.');
}

$url = 'https://www.google.com/recaptcha/api/siteverify';
$params = [
  'secret' => '6LfmN9YZAAAAAIVrVKC9sq4tG9wL7U8UOf1Ypz3p',
  'response' => $captcha_token,
  'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
if (!empty($response)) $decoded_response = json_decode($response);

$success = false;

if(isset($_POST['submit'])){
  $to = "max@qlogic.io";

  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $subject = "Qlogic Form";
  $subject  = '=?utf-8?b?'. base64_encode($subject) .'?=';

  $date = date(DATE_RFC2822);
  $messageId='<'.time().'-'.md5($email.$to).'@'.$_SERVER['SERVER_NAME'].'>';

  /* Check */
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
  {
    show_error("<br /> Е-mail doesn't exist.");
  }

  /* Variable that will be sent to the mail with the values entered in the fields */
  $body     = "<table bgcolor='#f9f9f9' cellpadding='5' width='600px' style='margin: 0 auto;'>
                  <tr valign='top'>
                    <td width='30%' bgcolor='#3f60a9' style='color: #ffffff;'>
                      <p><strong>Name:</strong> $first_name</p>
                    </td>
                    <td><p>$message</p></td>
                  </tr>
                </table>";

  $headers  = "From: $email \r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "Content-type: text/html; charset=utf-8". "\r\n";
  $headers .= "From: ". $first_name ." <". $email ."> \r\n";
  $headers .= "Date: ". $date ." \r\n";
  $headers .= "Message-ID: ". $messageId ." \r\n";

  /* Send mail() */
  mail($to, $subject, $body, $headers);

  $sparams = array(
    'name' => $_POST['first_name']
  );

  header('Location: success.php?' . http_build_query($sparams));
  exit;
} else {
  exit;
}


?>