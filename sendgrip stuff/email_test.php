<?php

	$sendgrid = new SendGrid(); 	
	$mail = new SendGrid\Mail();
	$mail->
		addTo('nick543219876@yahoo.com')->
		setFrom('nick.barrett54321@gmail.com')->
		setSubject('SendGrid Test')->
		setText('sfjaslgjfsl');
		
		$sendgrid->
		smtp->
			send($mail);
?>