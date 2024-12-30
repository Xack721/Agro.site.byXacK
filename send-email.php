<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Налаштування пошти
    $to = "illaykunhir@gmail.com"; // Замість цього введіть свій емейл
    $subject = "Нове замовлення від $name";
    $body = "Ім'я: $name\nЕлектронна пошта: $email\nПовідомлення:\n$message";

    // Заголовки пошти
    $headers = "From: $email";

    // Надсилання пошти
    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Ваше повідомлення успішно відправлено!</h1>";
    } else {
        echo "<h1>Виникла помилка при відправці повідомлення. Спробуйте ще раз.</h1>";
    }
}
?>
