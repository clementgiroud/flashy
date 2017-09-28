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

	/*Check Login*/
   	public function validate($email, $password)
	{
		// $this->db->where('status',1);
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		return $query->result();
	}
	/*Get Session values */

	public function get_id($email, $password)
	{

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get('users')->result();

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
