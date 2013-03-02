<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MailMan {

	public function sendMail($to, $from, $from_name, $subject, $message, $user, $password) { 
		global $error;
		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; 
		$mail->Username = $user;  
		$mail->Password = $password;           
		$mail->SetFrom($from, $from_name);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->AltBody = strip_tags($message);
		$mail->AddAddress($to);
		if(!$mail->Send()) {
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else {
			$error = 'Message sent!';
			return true;
		}
	}
}