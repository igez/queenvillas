<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('category_model');
	}
	
	public function fetchAll() {
		$q = $this->db->get('posts');
		
		return $q->result();
	}
	
	public function fetchByCategory($cat) {
		$q = $this->db->get_where('posts', array('category_id' => $cat));
		
		return $q->result();
	}
	
	public function fetchById($id) {
		$q = $this->db->get_where('posts', array('id' => $id));
		
		return $q->row();
	
	}
	
	public function findBySlug($slug) {
		$q = $this->db->get_where('posts', array('slug' => $slug));
		
		return $q->row('id');
	}
	
	public function updatePost($post, $fn=NULL) {
		if ($fn) {
		$data = array(
					'title' => $post['title'],
					'content' => $post['desc'],
					'category_id' => $post['category'],
					'slug' => $post['slug'],
					'images' => $post['files'],
					'cover_image' => $fn
				);
		}
		else {
		$data = array(
					'title' => $post['title'],
					'content' => $post['desc'],
					'category_id' => $post['category'],
					'slug' => $post['slug'],
					'images' => $post['files'],
				);
		}
		$this->db->where('id', $post['id']);
		if ($this->db->update('posts', $data)) {
			return TRUE;
		}

		
	}
	
	public function savePost($post) {
		$data = array(
					'title' => $post['title'],
					'content' => $post['desc'],
					'category_id' => $post['category'],
					'slug' => $post['slug'],
					'images' => $post['files']
				);
				
		if ($this->db->insert('posts', $data)) {
			return TRUE;
		}
	}
	
	public function deletePost() {
		$id = $this->input->get('id');
		
		if (empty($id)) {
			return false;
		}
		
		else {
			$q = $this->db->delete('posts', array('id' => $id));
			if ($q) {
				return true;
			}
			else {
				return false;
			}
		}
	}
}