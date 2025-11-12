<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $to      = "1132237369@pfur.ru";
    $subject = "Новое сообщение с сайта BrowHarmony";
    $body    = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
    $headers = "From: BrowHarmony <no-reply@browharmony.ru>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Спасибо! Ваше сообщение успешно отправлено.";
    } else {
        echo "Ошибка: не удалось отправить сообщение. Попробуйте позже.";
    }
} else {
    echo "Неверный метод отправки данных.";
}
?>
