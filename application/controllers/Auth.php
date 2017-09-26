<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {

		parent::__construct();
		$this->load->library(array('session','email', 'form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('User_model');

	}


	public function index()
  {

	}



  public function login($submit = null)
	{
		if ($submit == null)
		{
			$this->load->view('admin_login');
			return true;
		}
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('User_model');
		$result = $this->User_model->login('admin', $email, $password);

		if($result == true)
		{
			// echo "login";
		}
	}

  public function login_validation()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
    $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

    if ($this->form_validation->run())
    {
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
      redirect('user/members');

    } else {
      $this->load->view('pages/login');
    }
  }


  public function members()
  {
		if ($this->session->userdata('is_logged_in'))
    {
			$this->load->view('templates/header');
			$this->load->view('pages/members');

		} else {
			redirect('user/restricted');
		}
		// $this->load->library('calendar');
		// echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
  }

	public function restricted ()
  {
		$this->load->view('pages/restricted');
	}

	public function validate_credentials()
  {
		$this->load->model('User_model');

		if ($this->User_model->can_log_in())
    {
			return true;
	} else {
			$this->form_validation->set_message('validate_credentials', 'Mot de passe incorrect');
			return false;
	  }
	}

	public function logout()
  {
		$this->session->sess_destroy();
		redirect('user/login');
	}

}
