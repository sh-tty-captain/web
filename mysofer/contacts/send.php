<?php
if(isset($_POST['submit'])){
  $to = "justaway@superpeace.ru";
  $from = $_POST['email'];

  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = "Что это, весточка с корабля?";

  /* Проверка правильного написания e-mail адреса */
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
  {
    show_error("<br /> Е-mail адрес не существует");
  }

  /* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
  $mail_to_myemail = "<b>Кто:</b> $first_name
                      <br><br>
                      $message";

  $headers = "From: $email \r\n";

  /* Отправка сообщения, с помощью функции mail() */
  mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/html; charset=utf-8');

  $sparams = array(
    'name' => $_POST['first_name']
  );

  header('Location: success.php?' . http_build_query($sparams));
  exit;
}
?>