<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{
		$this->login();
	}

  public function login() {
    $this->load->view('pages/login');
  }

  public function members() {
    $this->load->view('pages/members');
  }

  public function login_validation() {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|md5');

    if ($this->form_validation->run()) {
      redirect('login/members');

    } else {
      $this->load->view('pages/login');
    }
  }
}
