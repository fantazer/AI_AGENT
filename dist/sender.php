<? 
 //если проблемы с кодировкой файла сохранить его в другой
    $name = $_POST['name']; // пришедшие переменные
    $phone = $_POST['phone'];
    $text = $_POST['comment'];
   
    echo $name;
    echo $phone;
    echo $text;

    $to = 'support@itexpert.ru';
    //$to = 'kuznecovs45@gmail.com';
    if ($name) {$mainName="Имя: <strong>$name</strong><br>"  ;}
    if ($phone) {$mainPhone="Телефон: <strong>$phone</strong><br>"  ;}
    if ($text) {$mainText="Сообщение: <strong>$text</strong><br>"  ;}
    $subject = 'Заявка с сайта AIAGENT';
    $body = "Информация:<br><br>          
            $mainName
            $mainPhone
            $mainText
            ";

    $headers = array(); 
    $headers[] = "MIME-Version: 1.0"; 
    $headers[] = "Content-type: text/html; charset=utf-8"; 
    $headers[] = "Subject: {$subject}"; 
    $headers[] = "From: mail@aiagent.ru";
    $headers[] = "X-Mailer: PHP/".phpversion();

       
    mail($to,  $subject, $body, implode("\r\n", $headers));
   
?>

http://demo.итэксперт.рф
