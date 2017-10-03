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

	public function login_validation()
	{
		   $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
		   $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		   if ($this->form_validation->run()) {
		 		$data = array(
		 			'email' => $this->input->post('email'),
		 			'is_logged_in' => 1
		 		);
		     $email = $this->input->post('email');
         $password = $this->input->post('password');
         $is_valid = $this->User_model->validate($email, $password);

         if($is_valid)/*If valid email and password set */
         {
             $get_id = $this->User_model->get_id($email, $password);

            foreach($get_id as $val)
                {
                     $id = $val->id;
                     $email = $val->email;
                     $password = $val->password;
                     $type = $val->type;
                     if($type == 'admin')
                     {
                        $data = array(
                        'email' => $email,
                        'password' => $password,
                        'type'=> $type,
                        'id'=> $id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the Admin datas in session */
                          redirect('admin/success');
                     }
                    if($type == 'user')
                     {

											 $data = array(
											 'email' => $email,
											 'password' => $password,
											 'type'=> $type,
											 'id'=> $id,
											 'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  user datas values in session */
                          redirect('user/members');
                     }


            }

        }
        else // incorrect email or password
        {

            $this->session->set_flashdata('msg1', 'Email ou mot de passe incorrect !');
            redirect('user/login');
        }

    }
	}

  public function members() {
		if ($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header');
			$this->load->view('pages/members');

		} else {
			redirect('user/restricted');
		}

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
		redirect('main');
	}



}
