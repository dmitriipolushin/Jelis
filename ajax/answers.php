<?php 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $headers = "Form: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if(mail("27102001@bk.ru", $message, $headers))
        echo "Сообщение отправленно";
?>