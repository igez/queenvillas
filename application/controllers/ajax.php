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

}