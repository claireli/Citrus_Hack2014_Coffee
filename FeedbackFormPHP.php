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
       setText('Question1: What is one difference between a High Level Language (HLL) like C++ and an Assembly Language (AL)?<br>
	   		Your Answer:<br>
	   		Correct Answer: A single HLL statement might compile to many Machine Language instructions, while each AL instruction assembles to a single Machine Language instruction.<br>
	   		Question2: The LC-3 AL program you wrote in lab1 multiplied a number stored in a register by the constant 6. Which of the following best describes the algorithm used?<br>
	   		Your Answer:<br>
	   		Correct Answer: Add the value in the register to itself 6 times<br>
	   		Question3: A label in assembly language code is:<br>
	   		Your Answer:<br>
	   		Correct Answer: A name given to a memory location<br>
	   		Question4: A pseudo-op in assembly language code (e.g. the LC-s .FILL) is:<br>
	   		Your Answer:<br>
	   		Correct Answer: an instruction to the assembler (like a compiler preprocessor directive)<br>');//->
       //setHtml('<strong>Hello World!</strong>');
	   /*
	   		Question1: What is one difference between a High Level Language (HLL) like C++ and an Assembly Language (AL)?<br>
	   		Your Answer:<br>
	   		Correct Answer: A single HLL statement might compile to many Machine Language instructions, while each AL instruction assembles to a single Machine Language instruction.<br>
	   		Question2: The LC-3 AL program you wrote in lab1 multiplied a number stored in a register by the constant 6. Which of the following best describes the algorithm used?<br>
	   		Your Answer:<br>
	   		Correct Answer: Add the value in the register to itself 6 times<br>
	   		Question3: A label in assembly language code is:<br>
	   		Your Answer:<br>
	   		Correct Answer: A name given to a memory location<br>
	   		Question4: A "pseudo-op" in assembly language code (e.g. the LC-s's ".FILL") is:<br>
	   		Your Answer:<br>
	   		Correct Answer: an instruction to the assembler (like a compiler preprocessor directive)<br>
	   		
	   */
$result = $sendgrid->send($mail);
echo "result:";
echo json_encode($result);   
?>

</body>
</html>