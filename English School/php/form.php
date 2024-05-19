<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = "This is an alert message";
    // Адрес, на который будет отправлено письмо
    $to = "englishschool_schap@mail.ru";

    // Тема письма
    $subject = "Заявка - Englishschool.ru";

    // Формирование тела письма
    $body = "От: $name $surname\n";
    $body .= "Email: $email\n";
    $body .= "Номер телефона: $phone\n";

    // Отправка письма
    $mail_sent = mail($to, $subject, $body);

    // Проверка успешности отправки
    if ($mail_sent) {
        header("Location: ../index.html");
    } else {
        echo "<p>Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.</p>";
    }
} else {
    // Если скрипт был вызван напрямую, а не методом POST
    echo "<p>Доступ запрещен.</p>";
}
?>