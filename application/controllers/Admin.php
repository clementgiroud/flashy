<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Admin_model');
			// $this->load->library('form_validation','session');

	 	}




	public function index()
	{
		$this->load->view('admin/restricted');

	}

	public function success()
	{
		$this->load->view('admin/admin');
	}

	public function compte(){
		$data['compte']=$this->Admin_model->get_all_user();
		$this->load->view('admin/compte',$data);
	}



	public function create_user()
	{
		
		$data = array(
				'id' => $this->input->post('id'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'type' => $this->input->post('type'),

			);
		$insert = $this->Admin_model->create_user($data);
		echo json_encode(array("status" => TRUE));
	}

	public function user_update()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'type' => $this->input->post('type'),
		);
		$this->Admin_model->user_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function user_delete($id)
	{
		$this->Admin_model->delete_user_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	public function ajax_edit_user($id)
	{
		$data = $this->Admin_model->get_by_id($id);

		echo json_encode($data);
	}


	public function tarifs()
	{
		$data['tarif']=$this->Members_model->get_all_tarif();
			$this->load->view('admin/admin_tarifs',$data);
	}

	public function reservation()
	{
			$this->load->view('admin/calendrier');
	}


	public function tarif_add()
		{
			$data = array(
					'id_tarif' => $this->input->post('id_tarif'),
					'prix_tarif_ttc' => $this->input->post('prix_tarif_ttc'),
					'nom_tarif' => $this->input->post('nom_tarif'),
					'prix_tarif_ht' => $this->input->post('prix_tarif_ht'),
					'tarif_description' => $this->input->post('tarif_description'),
				);
			$insert = $this->Members_model->tarif_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->Members_model->get_by_id($id);

			echo json_encode($data);
		}

		public function tarif_update()
	  {
		  $data = array(
				'prix_tarif_ttc' => $this->input->post('prix_tarif_ttc'),
				'nom_tarif' => $this->input->post('nom_tarif'),
				'prix_tarif_ht' => $this->input->post('prix_tarif_ht'),
				'tarif_description' => $this->input->post('tarif_description'),
			);
		  $this->Members_model->tarif_update(array('id_tarif' => $this->input->post('id_tarif')), $data);
		  echo json_encode(array("status" => TRUE));
	  }

	public function tarif_delete($id)
	{
		$this->Members_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
