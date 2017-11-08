<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{

		$this->load->helper('url');
		$this->load->view('templates/header', $_SESSION);
		$this->load->model('Gallery_model');
		$data['slides']=$this->Gallery_model->slide();
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}



	public function tarif()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/tarifs');
	}

	public function services()
	{
		$this->load->helper(['url','html','form']);
		$this->load->model('Admin_model');
		$data['services']=$this->Admin_model->show_service();
		$this->load->view('templates/header');
		$this->load->view('pages/services', $data);
		$this->load->view('templates/footer');

	}
	public function nettoyage()
	{
		$data['slides']=$this->Admin_model->show_nettoyage();
		$data['slides2']=$this->Admin_model->show_carrosserie();
		$data['slides3']=$this->Admin_model->show_interieur();
		$this->load->view('templates/header');
		$this->load->view('pages/nettoyage', $data);
		$this->load->view('templates/footer');

	}

}
