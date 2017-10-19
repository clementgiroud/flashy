<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function all()
	{
		$result = $this->db->get('images');
		return $result;
	}

	public function getAll_images()
	{
		$query = $this->db->get('images');


	 return $query->result();
	}

	public function getAll_slide()
	{
		$result = $this->db->get('slide');
		return $result;
	}
	public function slide()
	{
		$query = $this->db->get('slide');


	 return $query->result();
	}

	public function find($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('images');
		return $row;
	}

	public function find_slide($id)
	{
		$row = $this->db->where('id',$id)->limit(1)->get('slide');
		return $row;
	}

	public function create($data)
	{
		try{
			$this->db->insert('images', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function create_slide($data)
	{
		try{
			$this->db->insert('slide', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function update($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('images', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function update_slide($id, $data)
	{
		try{
			$this->db->where('id',$id)->limit(1)->update('slide', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function delete($id)
	{
		try {
			$this->db->where('id',$id)->delete('images');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}

	public function delete_slide($id)
	{
		try {
			$this->db->where('id',$id)->delete('slide');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}

}
