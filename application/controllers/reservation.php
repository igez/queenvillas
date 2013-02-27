<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Reservation extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function do() {
		$this->load->library('PHPMailer');
		define('GUSER', 'robbiejobs@gmail.com'); // GMail username
		define('GPWD', 'nithnoth'); // GMail password
		
		$user = 'Robby Prima S';
		
		//$message = file_get_contents('/assets/email_templates/register.html');
		//$message = str_replace('%username%', $user, $message);
		
		$message = "aw";
		
		if ($this->smtpmailer('robbiejobs@gmail.com', 'robbiejobs@gmal.com', 'Revervation From Aw !', 'Hello', $message)) {
			return true;
		}
		if (!empty($error)) return false;
		
		
		
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