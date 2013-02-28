<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Reservation extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function booking() {
		$this->load->library('PHPMailer');
		define('GUSER', 'robbiejobs@gmail.com'); // GMail username
		define('GPWD', 'nithnoth'); // GMail password
		
		$message = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/assets/email_templates/rsvp_client.html');
		$message = str_replace('%title%', $_POST['name'], $message);
		$message = str_replace('%name%', $_POST['name'], $message);
		$message = str_replace('%surname%', $_POST['surname'], $message);
		$message = str_replace('%email%', $_POST['email'], $message);
		$message = str_replace('%ph%', $_POST['ph'], $message);
		$message = str_replace('%fax%', $_POST['fax'], $message);
		$message = str_replace('%address%', $_POST['address'], $message);
		$message = str_replace('%city%', $_POST['city'], $message);
		$message = str_replace('%country%', $_POST['country'], $message);
		
		//$message = "aw";
		
		if ($this->smtpmailer('robbiejobs@gmail.com', 'gez@gmail.com', 'Queen Villas & Spa Reservation', 'Reservation Success', $message)) {
			return true;
		}
		else {
			return false;
		}
		//if (!empty($error)) return false;
		
		
		
	}
	
	function smtpmailer($to, $from, $from_name, $subject, $message) { 
		global $error;
		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; 
		$mail->Username = GUSER;  
		$mail->Password = GPWD;           
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