<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  private $tableName;

  public function __construct()
	{
		parent::__construct();
		$this->tableName='admin';
	}

  public function checkUser($email, $password)
  {
    $r= $this->db->get_where($this->tableName, array('email'=>$email, 'password'=>$password))->row_array();
    if($r!=NULL){
      return $r;
    } else {
      return false;
    }
  }

  public function add_admin($email, $password)
  {
    $data = array(

			  'email' => $this->input->post('email'),
			  'password' => md5($this->input->post('password')),

		 	);

		 	return $this->db->insert('admin', $data);
  }

  public function can_log_in(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('admin');

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}

	}


}
