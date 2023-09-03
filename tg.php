<?php
// Замените 'YOUR_BOT_TOKEN' на ваш токен бота
$botToken = '6509754174:AAFKGPLygkdPYAfWGg0Lf28PoEyoVF0r1GA';

// Замените 'YOUR_CHAT_ID' на chat_id, куда вы хотите отправить сообщение
$chatId = '-848592909';

// Текст сообщения
$message = $_POST['message'];

// Формируем URL для отправки сообщения
$apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

// Используем cURL для отправки запроса к Telegram API
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
if ($response === false) {
    // В случае ошибки
    echo 'Ошибка отправки сообщения: ' . curl_error($ch);
} else {
    // В случае успешной отправки
    echo 'Сообщение успешно отправлено!';
}

// Закрываем cURL соединение
curl_close($ch);
?>
