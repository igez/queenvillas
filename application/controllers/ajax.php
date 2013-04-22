<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function accomodation_save() {
		if (!$_POST) {
			show_404();
		}

		else {
			$this->load->model('post_model');
			$data = array(
					'id' => $_POST['id'],
					'sprice' => $_POST['sprice'],
					'nprice' => $_POST['nprice'],
					'q' => $_POST['q'],
					'publish' => ($_POST['publish'] === 'true') ? 1 : 0
				);

			sleep(3);

			if ($this->post_model->update_offer($data)) {
				echo 1;
			}

			else {
				echo 0;
			}
		}
	}

	public function get_image() {
		if($_GET['str']) {
			$im = imagecreate(60, 30);

			// White background and blue text
			$bg = imagecolorallocate($im, 255, 255, 255);
			$textcolor = imagecolorallocate($im, 0, 0, 255);
			$str = base64_decode($_GET['str']);
			// Write the string at the top left
			imagestring($im, 5, 0, 0, $str, $textcolor);

			// Output the image
			header('Content-type: image/png');
			imagepng($im);
			imagedestroy($im);
		}
	}

}