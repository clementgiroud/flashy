<?php
class Tarifs_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getLast($n = 4) {
        $query = $this->db->get('tarif', $n);
        return $query->result();
    }
    public function getList($offset, $count) {
        $query = $this->db->get('tarif', $offset, $count);
        return $query->result();
    }
    public function count() {
        return $this->db->count_all_results('tarif');
    }
    
    public function getAll_tarif() {
         $query = $this->db->get('tarif');


        return $query->result();
    }

    public function getAll_option() {
         $query = $this->db->get('option');


        return $query->result();
    }

}
