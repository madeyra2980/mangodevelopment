<?php

// Получаем данные из формы
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// ID вашего чата в Telegram
$chat_id = '7190424780';

// Токен вашего бота в Telegram
$token = 'AAGdsIZuXMNpOQXvYuP3MXkXEHEcPYUv5eQ';

// Формируем сообщение для отправки в Telegram
$text = "Email: $email\nPhone: $phone\nMessage: $message";

// Отправляем запрос к API Telegram для отправки сообщения
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);

$response = file_get_contents($url);

// Обработка ответа, если необходимо
if ($response === FALSE) {
    // В случае ошибки при отправке запроса
    echo "Ошибка при отправке сообщения в Telegram";
} else {
    // В случае успешной отправки
    echo "Сообщение успешно отправлено в ваш чат в Telegram";
}

?>
