<?php
class Contact_model extends CI_Model {


function add($data)
 {

   $this->db->insert('contact',$data);
   return;
 }



}
