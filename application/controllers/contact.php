<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model', 'gallery_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}

	public function index() {
		//$this->load->library('recaptchalib');
		$this->load->view('contact_page');
	}

	public function sendMessage() {
		if (!empty($_POST['fname'])) {
			$this->load->config('admin');
			$this->load->library('PHPMailer');
			$guser = $this->config->item('info_email_username');
			$gpwd = $this->config->item('info_email_password');
			$hrd = $this->config->item('hrd_email');
			$this->load->model('message_model');
			$message = $_POST['body'];
			$target = $_POST['email'];
			if ($this->message_model->saveMessage($_POST) === TRUE) {
				// send thank you email to client
				if ($this->smtpmailer($target, $guser, 'donotreply@queenvillas.com', 'Thank You For Contacting Us', $message, $guser, $gpwd) === TRUE) {
					// send email to admin_info
					if ($this->smtpmailer($target, $guser, 'donotreply@queenvillas.com', $_POST['subject'], $message, $guser, $gpwd) === TRUE) {
						return true;
					}
				}
			}
			else {
				return false;
			}
		}
		else {
			$result = array(
						"status" => 'Access Violation',
						"response" => 'You cannot directly access this page'
						);
			echo json_encode($result);
		}
	}

	public function testSend() {
		$this->load->library('PHPMailer');
		$this->load->config('admin');
		$guser = $this->config->item('info_email_username');
		$gpwd = $this->config->item('info_email_password');
		$message = $_GET['body'];
		$target = $_GET['target'];
		if ($this->smtpmailer($target, $guser, 'donotreply@queenvillas.com', 'Thank You For Contacting Us', $message, $guser, $gpwd)) {
			$result = array("status" => $error);
			echo json_encode($result);
		}
	}

	function smtpmailer($to, $from, $from_name, $subject, $message, $guser, $gpwd) { 
		global $error;
		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; 
		$mail->Username = $guser;  
		$mail->Password = $gpwd;           
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