<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting_model extends CI_Model {


	public function fetchSetting() {
		$q = $this->db->get('settings');
		
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
	}
	
	public function fetchSlide($id) {
		$q = $this->db->get_where('sliders', array('id' => $id));
		
		if ($q) {
			return $q->row();
		}
	}
}