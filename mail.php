<?php
//require_once('phpmailer/class.phpmailer.php');
//include "config/configuration.php";

//unfinished

function send_verification_mail($name, $destination_address, $token){
	$subject="Verifkasi Member";
	$verification_link="http://localhost/campus/user_email_verification_process.php?token=$token";
	$content="Hi, $name\nKlik link di bawah ini untuk mengkonfirmasi registrasi anda:\n$verification_link";
	send_mail($destination_address, $subject, $content);
}

function send_verification_mail_rejected($name, $destination_address){
	$subject="Verifkasi Member";
	$verification_link="http://localhost/campus/user_email_verification_process.php?token";
	$content="Hi, $name maaf anda tidak disetujui untuk bergabung dengan kami, terimakasih";
	send_mail($destination_address, $subject, $content);
}

function send_verification_mail_accepted($name, $destination_address){
	$subject="Verifkasi Member";
	$verification_link="http://localhost/campus/user_email_verification_process.php?token";
	$content="Hi, $name selamat anda telah terdaftar di informasikampus.com, terimakasih";
	send_mail($destination_address, $subject, $content);
}

function send_mail($destination_address, $subject, $content){
	require_once "Mail-1.2.0/Mail.php";

	$from = '<derrydwityapranata7@gmail.com>';
	$to = "<$destination_address>";
	$body = $content;

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'derrydwityapranata7@gmail.com',
			'password' => '034613derry'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		// header('Location:login.php?status=5');
	} else {
		// header('Location:login.php?status=4');
	}
    
}
?>