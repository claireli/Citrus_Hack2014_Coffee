<html>
<body>

Emailing to: 
<?php
$input = $_POST["email"]; 
echo $input; echo "<br>";
?>

<?php
require_once '/unirest-php-master/lib/Unirest.php';
require_once '/sendgrid-php-master/lib/SendGrid.php';
require_once '/smtpapi-php-master/lib/Smtpapi.php';

SendGrid::register_autoloader();
Smtpapi::register_autoloader();

$sendgrid = new SendGrid('rlaw1294', 'trouble123');

$mail = new SendGrid\Email();
$mail->addTo($input)->
       setFrom('rlaw1294@gmail.com')->
       setSubject('Here are your test results')->
       setText('We actually dont know either xD');//->
       //setHtml('<strong>Hello World!</strong>');
	   
$result = $sendgrid->send($mail);
echo "result:";
echo json_encode($result);   
?>

</body>
</html>