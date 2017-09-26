<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	public function cek_user($data){
		$query = $this->db->get_where('users',$data);
		return $query;
	}


	public function can_log_in(){

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}

	}

	// public function login($email, $password)
	// {
	// 	$query = $this->db->get_where(
	// 		'email' => $email,
	// 		'password' => $password
	// 	);
	// 	return $query->result();
	// 	}
	// }

	// public function add_temp_user($key) {
	// 	$data = array(
	// 		'username' => $this->input->post('username'),
	// 		'email' => $this->input->post('email'),
	// 		'password' => md5($this->input->post('password')),
	// 		'key' => $key
	// 	);
	//
	// 	$query = $this->db->insert('temp_users', $data);
	// 	if ($query) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
	//
	// public function is_key_valid($key) {
	// 	$this->db->where('key', $key);
	// 	$query = $this->db->get('temp_users');
	//
	// 	if ($query->num_rows() == 1) {
	// 		return true;
	// 	} else return false;
	// }

	public function add_user($username, $email, $password) {
		$data = array(
			  'username' => $this->input->post('username'),
			  'email' => $this->input->post('email'),
			  'password' => md5($this->input->post('password')),
		 		'created_at' => date('Y-m-j H:i:s'),
		 	);

		 	return $this->db->insert('users', $data);

	}



}
