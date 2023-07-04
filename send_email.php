<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получение данных из формы
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Отправка сообщения на почту
  $to = 'diasermekbaev342@gmail.com'; // Замените на свой адрес электронной почты
  $subject = 'Новое сообщение от посетителя сайта';
  $messageBody = "Имя: $name\nEmail: $email\nТелефон: $phone\n\nСообщение:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $messageBody, $headers)) {
    echo 'Сообщение успешно отправлено.';
  } else {
    echo 'Ошибка при отправке сообщения.';
  }
}
?>