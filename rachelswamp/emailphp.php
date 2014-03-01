<?php
require_once '/unirest-php-master/lib/Unirest.php';
require_once '/sendgrid-php-master/lib/SendGrid.php';
require_once '/smtpapi-php-master/lib/Smtpapi.php';

SendGrid::register_autoloader();
Smtpapi::register_autoloader();

$sendgrid = new SendGrid('rlaw1294', 'trouble123');

$mail = new SendGrid\Email();
$mail->addTo('khsie003@ucr.edu')->
       setFrom('rlaw1294@gmail.com')->
       setSubject('Subject goes here')->
       setText('Hello World!')->
       setHtml('<strong>Hello World!</strong>');
	   
$result = $sendgrid->send($mail);
echo json_encode($result);	   
?>