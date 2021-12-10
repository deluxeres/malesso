<?php

/* https://api.telegram.org/bot5034137323:AAFQHpJcciNBpN9bzG-yOAJDn6tmLm4VVpg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$user_message = $_POST['user_message'];
$email = $_POST['user_email'];
$token = "5034137323:AAFQHpJcciNBpN9bzG-yOAJDn6tmLm4VVpg";
$chat_id = "-652830456";
$arr = array(
  'Имя пользователя: ' => $name,
  'Сообщение: ' => $user_message,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../thank-you.html');
} else {
  echo "Error";
}
?>