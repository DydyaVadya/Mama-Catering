<?php
//$to = get_field( "correspondence_mail", 16 );
$to = 'alona.redlab@gmail.com';
$subject = 'Новая заявка с сайта Mama Catering';
date_default_timezone_set("UTC"); // Устанавливаем часовой пояс по Гринвичу
$time = time();
$offset = 3;
$time += 3 * 3600; // Добавляем 3 часа к времени по Гринвичу
$today = date("H:i:s || d-m-Y", $time);


if(isset($_POST['chosen'])) {
    foreach ($_POST['chosen'] as $value) {
        $chosen_box .= trim(stripslashes($value)) . ",\n";
    }
} else {
    $chosen_box = "";
}

$form_name = (isset($_POST['form-name'])) ? trim(strip_tags($_POST['form-name'])) : '';
$modal_title = (isset($_POST['modal-title'])) ? trim(strip_tags($_POST['modal-title'])) : '';
$modal_event = (isset($_POST['modal-event'])) ? trim(strip_tags($_POST['modal-event'])) : '';
$form_tel = (isset($_POST['tel'])) ? trim(strip_tags($_POST['tel'])) : '';


$message = '<html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>'.$subject.'</p>';
if($form_name) {
    $message .= '<p>Имя формы: '.$form_name.'</p>';
}
if($modal_title) {
    $message .= '<p>Расчитать меню для: '.$modal_title.'</p>';
}
if($modal_event) {
    $message .= '<p>Мероприятие: '.$modal_event.'</p>';
}
if($form_tel) {
    $message .= '<p>Телефон: '.$form_tel.'</p>';
}
if($chosen_box) {
    $message .= '<p>Выбранная коробка: '.$chosen_box.'</p>';
}
$message .= '<p>Дата: '.$today.'</p>
                    </body>
                </html>';


$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Mama Catering\r\n";
mail($to, $subject, $message, $headers);


?>
