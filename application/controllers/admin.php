<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $data = array();

	public function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in())	{
			redirect('admin/login');
		}
		$this->load->model(array('post_model', 'category_model', 'page_model', 'setting_model'));
		$this->load->vars($this->data);
		
	}
	
	public function index()	{
		$this->load->model('message_model');
		$data['message_check'] = $this->message_model->message_total();
		$data['content'] = "dashboard";
		$this->load->view('admin/index', $data);
	}
	
	public function posts() {
		// load the post_model library
		// if action not exist or null
		if ($this->input->get('action') == NULL) {
			// if category not exist
			if ($this->input->get('category') == NULL) {
				// throw 404 page
				show_404();
			}
			// if category has data and empty
			else {
				if ($this->post_model->fetchByCategory($this->input->get('category')) !== FALSE) {
					$data['data'] = $this->post_model->fetchByCategory($this->input->get('category'));
					if ($this->input->get('category') == 'Accomodation') {
						$data['offers'] = $this->post_model->fetchOffer();
						$data['content'] = "posts_accomodation";
					}
					else {
						$data['content'] = "posts";
					}
				}

				else {
					$data['content'] = "404";
				}
				// fetch necessary data from post_model according to category and add them variable $data
			}
			$this->load->view('admin/index', $data);
		}
		elseif ($this->input->get('action') == 'add' && ($this->input->get('category') == 'Accomodation' || $this->input->get('category') == 'Facility')) {
			$data['content'] = "post_add_form";
			$data['category'] = $this->category_model->fetchAll();
			$this->load->view('admin/index', $data);
		}
		elseif ($this->input->get('action') == 'add' && $this->input->get('category') == 'Package') {
			$data['content'] = "post_package_add_form";
			$data['category'] = $this->category_model->fetchAll();
			$this->load->view('admin/index', $data);
		}
		elseif ($this->input->get('action') == 'edit' && ($this->input->get('id') != NULL)) {
			
			$data['data'] = $this->post_model->fetchById($this->input->get('id'));
			$data['category'] = $this->category_model->fetchAll();
			// check if category is package
			if ($this->input->get('category') == 4) {
				$data['content'] = "post_package_edit_form";
			}
			else {
				$data['content'] = "post_edit_form";
			}
			//var_dump($data->data);
			$this->load->view('admin/index', $data);
			
		}
		elseif ($this->input->get('action') == 'delete' && ($this->input->get('id') != NULL)) {
			// begin delete process
			// die("Begin Delete Process id=".$this->input->get('id'));
			$cat = $this->input->get('category');
			if ($this->post_model->deletePost($this->input->get('id'))) {
				$this->session->set_flashdata('success', '<b>Success!</b> Your post has been deleted.');
				redirect("/admin/posts?category=$cat", 'refresh');
			}
		}
		else {
			$data['content'] = "post_addEvent_form";
			$data['category'] = $this->category_model->fetchAll();
			$this->load->view('admin/index', $data);
		}
		
	}
	
	public function post_update() {
		if ($this->input->post('submit') === 'doSave') {
			$targetFolder = "/assets/uploads/images/cover/";
			$rtrn = $this->post_model->categoryById($_POST['category']);
			if ($_FILES['cover'] && $_FILES['cover']['error'] == 0) {
				$tempFile = $_FILES['cover']['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetFile = rtrim($targetPath,'/') . '/' . $this->input->post('slug').".".pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
				
				// Validate the file type
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['cover']['name']);
				
				if (move_uploaded_file($tempFile,$targetFile)) {
					if ($this->post_model->updatePost($this->input->post(), $this->input->post('slug').".".pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION))) {
						$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
						redirect('/admin/posts?category='.$rtrn, 'refresh');
					}
					else {
						$this->session->set_flashdata('success', '<b>Failed!</b> Something went wrong.');
						redirect('/admin/posts?category='.$rtrn, 'refresh');
					}
				}
				else {
					die('Error While Uploading Image');
				}
			}
			else {
				if ($this->post_model->updatePost($this->input->post())) {
					$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
					redirect("/admin/posts?category=".$rtrn, 'refresh');
				}
				else {
					$this->session->set_flashdata('success', '<b>Failed!</b> Something went wrong.');
					redirect('/admin/posts?category='.$rtrn, 'refresh');
				}
			}
		}
	}
	
	public function post_save() {
		$rtrn = $this->post_model->categoryById($_POST['category']);
		if ($this->input->post('submit') === 'doSave') {
			$targetFolder = "/assets/uploads/images/cover/";
			if (isset($_FILES['cover']) && $_FILES['cover'] && $_FILES['cover']['error'] == 0) {
				$tempFile = $_FILES['cover']['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetFile = rtrim($targetPath,'/') . '/' . $this->input->post('slug').".".pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
				
				// Validate the file type
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['cover']['name']);
				
				if (move_uploaded_file($tempFile,$targetFile)) {
					if ($this->post_model->savePost($this->input->post())) {
						$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
						redirect("/admin/posts?category=$rtrn", 'refresh');
					}
				}

				else {
					die('Error While Uploading Image');
				}
			}

			else {
				if ($this->post_model->savePost($this->input->post())) {
					$this->session->set_flashdata('success', "<b>Success!</b> New $rtrn has been saved.");
					redirect("/admin/posts?category=$rtrn", 'refresh');
				}
			}
		}
	}
	
	/*
	public function page() {
		if (empty($_GET['action'])) {
			$data['pages'] = $this->page_model->fetchAll();
			//var_dump($this->page_model->fetchAll());
			$data['content'] = 'contents/page_index';
		}
		elseif ($_GET['action'] == 'edit' && !empty($_GET['id'])) {
			$id = $_GET['id'];
			$data['page'] = $this->page_model->fetch($id);
			$data['content'] = 'contents/page_edit';
		}
		else {
			show_404();
		}
		$this->load->view('admin/index', $data);
	}
	*/
	
	public function setting() {
		$target = $this->input->get('target');
		$this->load->library('thumbify');
		
		// if target is empty
			if (empty($target)) {
				// throw 404 page
				show_404();
			}
			elseif ($target == 'landing-page') {
				$data['data'] = $this->setting_model->fetchSetting();
				/*
				$this->thumbify->load('/assets/img/01.jpg');
				$this->thumbify->resizeToWidth(200);
				$this->thumbify->save($_SERVER['DOCUMENT_ROOT'].'/assets/img/thumb_01.jpg');
				*/
				$data['content'] = 'contents/setting_landing';
				$this->load->view('admin/index',$data);
			}
			// execute setting_landing.php view
	}

	public function message() {
		$this->load->model('message_model');
		$data['data'] = $this->message_model->fetchAllMessage();
		$data['content'] = 'contents/message';
		$this->load->view('admin/index', $data);
	}

	public function msgIsRead() {
		$this->load->model('message_model');
		$id = $this->uri->segment(4);
		$d = $this->message_model->chkIsRead($id);

		if ($d->read == NULL) {
			$this->message_model->isRead($id);
		}

		$result = array("status" => 1);

		echo json_encode($result);
	}

	public function setting_landing() {
		
	}

	// Slideshow Manager Function :
	public function setting_slideshow () {
		// some comment
		if ($_POST) {
			if ($_FILES['img']['size'] != 0) {
				$width = getimagesize($_FILES['img']['tmp_name']);
				if ($width[0] < 1281) {
					die('Please upload another image, minimum image width is 1280px');
				}
				else {
					if (file_exists($_SERVER['DOCUMENT_ROOT']."/assets/img/sliders/".$_FILES['img']['name'])) {
						$_FILES['img']['name'] = $_FILES['img']['name']."-".strtotime('now');
					}
					
					if(move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/img/sliders/".$_FILES['img']['name'])) {
						$this->setting_model->insertNewSlide($_FILES['img']);
						redirect('admin/setting/slideshow');
					}
					
				}
			}
			else {
				
				$i=0;
				$c=0;
				$dd = array();
				foreach ($_POST['id'] as $row) {
					$dd[$i]['id'] = $_POST['id'][$i];
					$dd[$i]['caption'] = $_POST['caption'][$i];
					$dd[$i]['status'] = $_POST['status'][$i];
					$dd[$i]['weight'] = $_POST['weightFor'][$i];
					if ($this->setting_model->saveSlider($dd[$i])) {
						$c++;
					}
					$i++;
				}
				//print_r('<pre>');
				//print_r($dd);
				//print_r('</pre>');
				//die();
				if ($c==$i) {
					redirect('admin/setting/slideshow');
				}
				
			}
		}
		else {
			$data['content'] = 'contents/setting_slideshow';
			$data['sliders'] = $this->setting_model->fetchAllSlide();
			$this->load->view('admin/index', $data);
		}
	}

	public function setting_slideshow_delete() {
		if ($this->setting_model->deleteSlide($_POST['id'])) {
			return true;
		}
		else {
			die('Error!');
		}
	}

	public function setting_general() {
		$this->load->config('admin');
		$data['content'] = 'setting/setting_general';
		$this->load->view('admin/index', $data);
	}

	public function comment_index() {
		$this->load->model('comment_model');

		$data['contents'] = $this->comment_model->fetchAll();
		$data['content'] = 'comment_index';
		$this->load->view('admin/index', $data);
	}

	public function comment_add() {
		$this->load->model('comment_model');
		if (isset($_POST['submit'])) {
			if (!$this->comment_model->add($_POST)) {
				$this->session->set_flashdata('success', '<b>Error!</b> Something went wrong, please contact your Administrator.');
				redirect('/admin/comment', 'refresh');
			}
			else {
				$this->session->set_flashdata('success', '<b>Success!</b> Comment has been saved.');
				redirect('/admin/comment', 'refresh');
			}
		}

		else {
			$data['content'] = 'comment_add';
			$this->load->view('admin/index', $data);
		}
	}

	public function comment_view() {
		$id = $this->uri->segment(4);
		$this->load->model('comment_model');
		$data['data'] = $this->comment_model->fetch($id);
		$data['content'] = 'comment_view';
		$this->load->view('admin/index', $data);
	}

	public function comment_edit() {
		$this->load->model('comment_model');
		if (isset($_POST['submit'])) {
			if (!$this->comment_model->update($_POST)) {
				$this->session->set_flashdata('success', '<b>Error!</b> Something went wrong, please contact your Administrator.');
				redirect('/admin/comment', 'refresh');
			}
			else {
				$this->session->set_flashdata('success', '<b>Success!</b> Comment has been saved.');
				redirect('/admin/comment', 'refresh');
			}
		}
		else {
			$id = $this->uri->segment(4);
			$data['data'] = $this->comment_model->fetch($id);
			$data['content'] = 'comment_edit';
			$this->load->view('admin/index', $data);
		}
	}

	public function comment_delete() {
		$this->load->model('comment_model');
		$id = $this->uri->segment(4);
		if ($this->comment_model->delete($id)) {
			$this->session->set_flashdata('success', '<b>Success!</b> Comment has been successfully deleted.');
			redirect('/admin/comment', 'refresh');
		}
		else {
			$this->session->set_flashdata('success', '<b>Error!</b> Something went wrong, please contact your Administrator.');
				redirect('/admin/comment', 'refresh');
		}
	}

	// Users !
	public function user_index() {

		$this->load->model('user_model');

		if (isset($_GET['action']) && $_GET['action'] == 'add') {
			$data['content'] = 'contents/setting_user_add';
		}
		else {
			$data['users'] = $this->user_model->get_all();
			$data['content'] = 'contents/setting_user';
		}

		$this->load->view('admin/index',$data);
	}

	public function user_save() {
		var_dump($_POST);
		$user = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$conf = $_POST['passconf'];
		$group = array('1');
		if ($pass !== $conf) {
			die('Password and Password Confirmation mismatch, please press back button on your browser!');
		}
		else if (empty($user)) {
			die('Username cannot be empty!');
		}
		$additional_data = array(
								'first_name' => $_POST['firstname'],
								'last_name' => $_POST['lastname'],
								);

		if ($this->ion_auth->register($user, $pass, $email, $additional_data, $group)) {
			redirect('/admin/setting/users');
		}
	}

	public function mail_test() {
		$this->load->library('PHPMailer');
		define('GUSER', 'root@gezdev.com');
		define('GPWD', 'gez0104');
		$target = 'robbiejobs@hotmail.com';

		$message = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/assets/email_templates/email_draft.html');
		// Footer
		$message = str_replace('*|CURRENT_YEAR|*', '2013', $message);
		$message = str_replace('*|LIST:COMPANY|*', 'QueenVillas Resorts & Spas', $message);
		$message = str_replace('*|UNSUB|*', 'http://robbyprima.com/unsubscribe/ASd8UASHDiods909ASdjlas9ASASd4556asd5a6sd4', $message);

		// send email to RSVP MANAGER
		if ($this->smtpmailer($target, 'root@gezdev.com', 'Relay Server Test', 'Relay Test', $message)) {
			echo 'Success!';
		}
		//if (!empty($error)) return false;
	}

	function smtpmailer($to, $from, $from_name, $subject, $message) { 
		global $error;
		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		// $mail->SMTPSecure = ''; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'mail.gezdev.com';
		$mail->Port = 25; 
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
