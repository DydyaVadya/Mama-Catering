<?php

add_action('wp_ajax_callme', 'callme');
add_action('wp_ajax_nopriv_callme', 'callme');
function callme(){
    $phone = (isset($_POST['phone'])) ? trim(strip_tags($_POST['phone'])) : '';
    $event = (isset($_POST['event'])) ? trim(strip_tags($_POST['event'])) : '';
    $post_id = 16;
    $fields = get_fields($post_id);
    $admm = (isset($fields['correspondence_mail'])) ? $fields['correspondence_mail'] : '';
    if($admm){
        $message = '<p>Новая заявка с сайта Mama-Catering!</p>';
        if($phone) {
            $message .= '<p>Пользователь с телефоном <a href="tel:'.$phone.'"><b>'.$phone.'</b></a> хочет рассчитать мероприятие.</p>';
        }
        if($event) {
            $message .= '<p>Мероприятие "'.$event.'"</p>';
        }
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= 'From: Mama-Catering <' . $admm . '>' . "\r\n";
        mail($admm, 'Заявка с сайта Mama-Catering!', $message ,$headers);
        echo json_encode(array('success' => true));
        $msg = "Новая заявка с сайта Mama-Catering!"."%0A"."Пользователь с телефоном: $phone хочет рассчитать мероприятие."."%0A"."Мероприятие: $event"."%0A"."Ключевое слово: $utm";
        file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=@mamacatering&text=$msg");
        exit;
    }
}


add_action('wp_ajax_getmenu', 'getmenu');
add_action('wp_ajax_nopriv_getmenu', 'getmenu');
function getmenu(){
    $menuphone = (isset($_POST['menuphone'])) ? trim(strip_tags($_POST['menuphone'])) : '';
    $menu = (isset($_POST['menu'])) ? trim(strip_tags($_POST['menu'])) : '';

    $post_id = 16;
    $fields = get_fields($post_id);
    $admm = (isset($fields['correspondence_mail'])) ? $fields['correspondence_mail'] : '';
    if($admm){
        $message = '<p>Новая заявка с сайта Mama-Catering!</p>';
        if($menuphone) {
            $message .= '<p>Пользователь с телефоном <a href="tel:'.$menuphone.'"><b>'.$menuphone.'</b></a> хочет рассчитать меню.</p>';
        }
        if($menu) {
            $message .= '<p>Мероприятие "'.$menu.'"</p>';
        }
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= 'From: Mama-Catering <' . $admm . '>' . "\r\n";
        mail($admm, 'Заявка с сайта Mama-Catering!', $message ,$headers);
        echo json_encode(array('success' => true));
        $msg = "Новая заявка с сайта Mama-Catering!"."%0A"."Пользователь с телефоном: $menuphone хочет рассчитать меню."."%0A"."Мероприятие: $menu"."%0A"."Ключевое слово: $utm";
        file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=@mamacatering&text=$msg");
         exit;
    }
}



add_action('wp_ajax_getbox', 'getbox');
add_action('wp_ajax_nopriv_getbox', 'getbox');
function getbox(){
    $boxphone = (isset($_POST['boxphone'])) ? trim(strip_tags($_POST['boxphone'])) : '';
    $box = (isset($_POST['box'])) ? trim(strip_tags($_POST['box'])) : '';
    $post_id = 16;
    $fields = get_fields($post_id);
    $admm = (isset($fields['correspondence_mail'])) ? $fields['correspondence_mail'] : '';
    if($admm){
        $message = '<p>Новая заявка с сайта Mama-Catering!</p>';
        if($boxphone) {
            $message .= '<p>Пользователь с телефоном <a href="tel:'.$boxphone.'"><b>'.$boxphone.'</b></a> сделал заказ.</p>';
        }
        if($box) {
            $message .= '<p>Заказ: "'.$box.'"</p>';
        }
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= 'From: Mama-Catering <' . $admm . '>' . "\r\n";
        mail($admm, 'Заявка с сайта Mama-Catering!', $message ,$headers);
        echo json_encode(array('success' => true));
        $msg = "Новая заявка с сайта Mama-Catering!"."%0A"."Пользователь с телефоном: $boxphone сделал заказ."."%0A"."Заказ: $box"."%0A"."Ключевое слово: $utm";
        file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=@mamacatering&text=$msg");
        exit;
    }
}




add_action('wp_ajax_orbox', 'orbox');
add_action('wp_ajax_nopriv_orbox', 'orbox');
function orbox(){
    $boxphone = (isset($_POST['boxphone'])) ? trim(strip_tags($_POST['boxphone'])) : '';
    $boxname = (isset($_POST['boxname'])) ? trim(strip_tags($_POST['boxname'])) : '';
    $boxprice = (isset($_POST['boxprice'])) ? trim(strip_tags($_POST['boxprice'])) : '';
    $boxweight = (isset($_POST['boxweight'])) ? trim(strip_tags($_POST['boxweight'])) : '';
    $post_id = 16;
    $fields = get_fields($post_id);
    $admm = (isset($fields['correspondence_mail'])) ? $fields['correspondence_mail'] : '';
    if($admm){
        $message = '<p>Новая заявка с сайта Mama-Catering!</p>';

        if($boxphone) {
            $message .= '<p>Пользователь с телефоном <a href="tel:'.$boxphone.'"><b>'.$boxphone.'</b></a> сделал заказ.</p>';
        }

        if($boxname) {
            $message .= '<p>Заказ: "'.$boxname.'"</p>';
        }

        if($boxprice) {
            $message .= '<p>Цена: "'.$boxprice.'"</p>';
        }
        if($boxweight) {
            $message .= '<p>Вес: "'.$boxweight.'"</p>';
        }
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= 'From: Mama-Catering <' . $admm . '>' . "\r\n";
        mail($admm, 'Заявка с сайта Mama-Catering!', $message ,$headers);
        echo json_encode(array('success' => true));
        $msg = "Новая заявка с сайта Mama-Catering!"."%0A"."Пользователь с телефоном: $boxphone сделал заказ."."%0A"."Заказ: $boxname"."%0A"."Цена: $boxprice"."%0A"."Вес: $boxweight"."%0A"."Ключевое слово: $utm";
        file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=@mamacatering&text=$msg");
        exit;
    }
}



?>