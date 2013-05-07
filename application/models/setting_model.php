<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting_model extends CI_Model {


	public function fetchSetting() {
		$this->db->from('sliders');
		$this->db->where('status', 1);
		$this->db->order_by('weight', 'ASC');

		$q = $this->db->get();
		
		return $q->result();

		/*
		$slides = explode(', ',$q->row()->slides);
		$i=0;
		//var_dump($slides);
		foreach ($slides as $row) :
			$newSlide[$i]['img'] = $this->fetchSlide($row)->image;
			$newSlide[$i]['caption'] = $this->fetchSlide($row)->caption;
			$i++;
		endforeach;
		// set newSlide to $q->row()->sliders
		$q->row()->slides = $newSlide;
		
		return $q->row();
		*/
	}
	
	public function fetchSlide($id) {
		$q = $this->db->get_where('sliders', array('id' => $id));
		
		if ($q) {
			return $q->row();
		}
	}

	// Check if Slider already exist or newlyweds
	public function checkSliderById ($id) {
		// some comment
		$q = $this->db->get_where('sliders', array('id' => $id));
		if ($q->row()) {
			return true;
		}
		
	}

	public function fetchAllSlide() {
		// some comment
		$q = $this->db->get('sliders');

		return $q->result();
	}

	public function saveSlider($data) {
		//print_r('<pre>');
		//var_dump($data);
		//print_r('</pre>');
		// check if id already exist
		
		if ($this->checkSliderById($data['id'])) {
			if ($this->updateSlide($data)) {
				return true;
			}
		}
		/*
		else {

		}
		*/
		// if id exist 
			// go to $this->updateSlide(data);
		// else 
			// save the new slider data;

	}

	function updateSlide($data) {
		$dataSet = array(
               'caption' => $data['caption'],
               'status' => $data['status'],
               'weight' => $data['weight']
            );

		$this->db->where('id', $data['id']);
		if ($this->db->update('sliders', $data)) {
			return true;
		}
	}

	public function insertNewSlide ($data) {
		// some comment
		$dataS = array(
				'image' => $data['name']
				);
		$this->db->insert('sliders', $dataS);
	}		

	public function deleteSlide ($id) {
		// some comment
		$this->db->where('id', $id);
		if ($this->db->delete('sliders')) {
			return true;
		}
	}

	public function system_email() {
		$q = $this->db->get('configs');
		return $q->row();
	}

	public function update_email($data) {
		if ($this->db->update('configs', $data)) {
			return TRUE;
		}
	}
}