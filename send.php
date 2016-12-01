

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$check_msg='';
foreach($_POST['connect'] as $value) {
$check_msg .= $value.' ';
}

$formcontent=" От: $name \n Телефон: $phone \n Сайт: $website \n Сообщение: $message";

$recipient = "bulanzheri@mail.ru";
$subject = "Форма обратной связи. Пользователь - $name";   
$mailheader = "Отправитель: $email \r\n";  
$info = mail($recipient, $subject, $formcontent, $mailheader, "Content-type:text/plain; Content-type:text/plain; charset = UTF-8\r\n") or die("Error!");

echo "Спасибо!" . " -" . "<a href='/demos/myform' style='text-decoration:none;color:#ff0099;'> Назад</a>";
?>


   