<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tarifs extends CI_Controller {



		public function viewcarte() {
			$this->load->model('Tarifs_model');
			$data['cate'] = $this->Tarifs_model->getAll_tarif();
      $data['opts'] = $this->Tarifs_model->getAll_option();

      $this->load->view('templates/header');
			$this->load->view('pages/tarifs',$data);
			// $this->load->view('templates/footer');


		}


}
