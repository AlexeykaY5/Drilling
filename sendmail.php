<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php'
    require 'phpmailer/src/PHPMailer.php'

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->setForm('info@fls.guru', 'asdasdasd');
    $mail->addAddress('alexsosnovski21@gmail.com');
    $mail->Subject = 'Hi mi name is Alex';

    $radioB = "Бурение скважины";

    if($_POST['radioB'] == "drill"){

        $radioB = "Бурение скважины"

    }elseif($_POST['radioB'] == "brickwall"){

        $radioB = "Обустройство скважины"

    }elseif($_POST['radioB'] == "cons"){

        $radioB = "Тампонаж и консервация"

    }elseif($_POST['radioB'] == "heater"){
        
        $radioB = "Отопление"
    }

    $body = '<h1>Встречайте супер письмо</h1>';
    
    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong>'.$_POST['name'].'</p>';   
    }

    if(trim(!empty($_POST['phone']))){
        $body.='<p><strong>Номер телефона:</strong>'.$_POST['phone'].'</p>';   
    }

    if(trim(!empty($_POST['text']))){
        $body.='<p><strong>Сообщение:</strong>'.$_POST['text'].'</p>';   
    }

    $mail->Body = $body;

    if (!$mail->send()){
    
        $message = 'Ошибка';
    
    }else{
    
        $message = 'Данные отправлены';
    
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);


?>