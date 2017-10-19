<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{

		$this->load->helper('url');
		// $this->load->view('templates/header');
		$this->load->view('templates/header', $_SESSION);
		$this->load->model('Gallery_model');
		$data['slides']=$this->Gallery_model->slide();
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}



  public function login() {
    $this->load->view('pages/login');
  }

  public function members() {
    $this->load->view('pages/members');
  }

  public function login_validation() {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

    if ($this->form_validation->run()) {
      redirect('main/members');

    } else {
      $this->load->view('pages/login');
    }
  }

	public function tarif()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/tarifs');
	}

	public function services()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/services');
		// $this->load->view('templates/footer');

	}
	public function nettoyage()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/nettoyage');
	}

}
