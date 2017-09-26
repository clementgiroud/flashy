<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {


	public function __construct() {

		parent::__construct();
		$this->load->library(array('session','email', 'form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('User_model');

	}


	public function index() {



	}

	public function signup() {
		$this->load->view('templates/header');
		$this->load->view('pages/signup');
	}

  public function signup_validation() {
		$this->load->library('form_validation');

		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Confirmer mot de passe', 'trim|required|min_length[6]|matches[password]');

		$this->form_validation->set_message('is_unique', "Cette adresse email existe déjà");

    if ($this->form_validation->run() === false) {

   		// validation not ok, send validation errors to the view
   		$this->load->view('pages/signup');


   	} else {

   		// set variables from the form
      $data = array(
        $username = $this->input->post('username'),
     		$email    = $this->input->post('email'),
     		$password = $this->input->post('password')

			);



   		if ($this->User_model->add_user($username, $email, $password)) {

   			// user creation ok

   			$this->load->view('pages/login', $data);


   		} else {

   			// user creation failed, this should never happen
   			$data->error = 'There was a problem creating your new account. Please try again.';

   			// send error to the view
   			$this->load->view('templates/header');
   			$this->load->view('pages/signup', $data);
   			$this->load->view('templates/footer');

   		}

   	}


	}

	public function login() {
		$this->load->view('templates/header');
    $this->load->view('pages/login');

  }

	public function cek_login()
	{
		$data = array('email' => $this->input->post('email') ,
					  'password' => $this->input->post('password')
					  );
		$hasil = $this->User_model->cek_user($data);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = '';
              $sess_data['email'] = $sess->email;
              $sess_data['type'] = $sess->type;
              $this->session->set_userdata($sess_data);
            }
			if ($this->session->userdata('type')=='admin'){
				redirect('admin');
			}
			elseif ($this->session->userdata('type')=='user'){
				redirect('member');
			}
		}
		else
		{
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}

	}


	public function login_validation()
	{
		$this->load->library('form_validation');
		$data = array('email' => $this->input->post('email') ,
					  'password' => $this->input->post('password')
					  );
		$hasil = $this->User_model->cek_user($data);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = '';
              $sess_data['email'] = $sess->email;
              $sess_data['type'] = $sess->type;
              $this->session->set_userdata($sess_data);
            }
			if ($this->session->userdata('type')=='admin'){
				redirect('admin');
			}
			elseif ($this->session->userdata('type')=='user'){
				redirect('member');
			}
		}
		else
		{
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}

	}

  // public function login_validation() {
  //   $this->load->library('form_validation');
	//
  //   $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
  //   $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
	//
  //   if ($this->form_validation->run()) {
	// 		$data = array(
	// 			'email' => $this->input->post('email'),
	// 			'is_logged_in' => 1
	// 		);
	// 		$this->session->set_userdata($data);
  //     redirect('user/members');
	// 		// if ($this->session->userdata('type')=='admin'){
	// 		// 	redirect('admin');
	// 		// }
	// 		// elseif ($this->session->userdata('type')=='user'){
	// 		// 	redirect('member');
	// 		// }
	//
  //   } else {
  //     $this->load->view('pages/login');
  //   }
  // }


  public function members() {
		if ($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header');
			$this->load->view('pages/members');

		} else {
			redirect('user/restricted');
		}
		// $this->load->library('calendar');
		// echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
  }

	public function restricted (){
		$this->load->view('pages/restricted');
	}

	public function validate_credentials() {
		$this->load->model('User_model');

		if ($this->User_model->can_log_in()) {
			return true;
	} else {
			$this->form_validation->set_message('validate_credentials', 'Mot de passe incorrect');
			return false;
	  }
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('user/login');
	}



}
