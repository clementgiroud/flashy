<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  var $new_user = 'users';

  public function __construct()
	{
		parent::__construct();

	}

  public function get_all_user()
  {
  $this->db->from('users');
  $query=$this->db->get();
  return $query->result();
  }

  public function get_by_id($id)
	{
		$this->db->from($this->new_user);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

  public function delete_user_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->new_user);
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

  public function create_user($data)
	{
		$this->db->insert($this->new_user, $data);
		return $this->db->insert_id();
	}

  public function user_update($where, $data)
	{
		$this->db->update($this->new_user, $data, $where);
		return $this->db->affected_rows();
	}

  public function get_all_galerie()
  {
  $this->db->from('galerie');
  $query=$this->db->get();
  return $query->result();
  }


}
