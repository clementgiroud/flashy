<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_model extends CI_Model
{

	var $table = 'tarif';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_tarif()
{
$this->db->from('tarif');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_tarif',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function tarif_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function tarif_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_tarif', $id);
		$this->db->delete($this->table);
	}


}
