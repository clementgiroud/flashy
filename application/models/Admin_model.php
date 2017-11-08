<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  var $table = 'users';

  public function __construct()
	{
		parent::__construct();
      $this->load->database();
	}

  public function get_all_user()
  {
  $this->db->from('users');
  $query=$this->db->get();
  return $query->result();
  }

  public function create_user($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function user_update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }

  public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

  public function delete_user_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
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


  public function get_all_galerie()
  {
  $this->db->from('galerie');
  $query=$this->db->get();
  return $query->result();
  }

  public function show_service()
	{
		$query = $this->db->get('service');


	 return $query->result();
	}

  public function get_all_service()
  {
    $result = $this->db->get('service');
    return $result;
  }

  public function find_service($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('service');
		return $row;
	}

  public function create_service($data)
	{
		try{
			$this->db->insert('service', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function update_service($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('service', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}
public function delete_service($id)
	{
		try {
			$this->db->where('id',$id)->delete('service');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}


  public function show_nettoyage()
	{
		$query = $this->db->get('nettoyage');


	 return $query->result();
	}

  public function get_all_nettoyage()
  {
    $result = $this->db->get('nettoyage');
    return $result;
  }

  public function find_nettoyage($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('nettoyage');
		return $row;
	}

  public function create_nettoyage($data)
	{
		try{
			$this->db->insert('nettoyage', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function update_nettoyage($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('nettoyage', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

public function delete_nettoyage($id)
	{
		try {
			$this->db->where('id',$id)->delete('nettoyage');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}

  public function get_all_carrosserie()
  {
    $result = $this->db->get('carrosserie');
    return $result;
  }

  public function show_carrosserie()
  {
    $query = $this->db->get('carrosserie');


	 return $query->result();
  }


  public function get_all_interieur()
  {
    $result = $this->db->get('interieur');
    return $result;
  }

  public function show_interieur()
  {
    $query = $this->db->get('interieur');


	 return $query->result();
  }

  public function find_carrosserie($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('carrosserie');
		return $row;
	}

  public function find_interieur($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('interieur');
		return $row;
	}

  public function create_carrosserie($data)
	{
		try{
			$this->db->insert('carrosserie', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function create_interieur($data)
	{
		try{
			$this->db->insert('interieur', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function update_carrosserie($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('carrosserie', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function update_interieur($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('interieur', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

  public function delete_carrosserie($id)
  	{
  		try {
  			$this->db->where('id',$id)->delete('carrosserie');
  			return true;
  		}

  		//catch exception
  		catch(Exception $e) {
  		  echo $e->getMessage();
  		}
  	}

    public function delete_interieur($id)
    	{
    		try {
    			$this->db->where('id',$id)->delete('interieur');
    			return true;
    		}

    		//catch exception
    		catch(Exception $e) {
    		  echo $e->getMessage();
    		}
    	}


}
