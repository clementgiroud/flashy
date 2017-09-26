<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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

   private $username;
   private $password;
   private $userDetail;


	 public function __construct()
	 	{
	 		parent::__construct();
			$this->username=$this->session->userdata('email');
      $this->password=$this->session->userdata('password');
      $this->load->model('Admin_model');
			$this->load->library('form_validation');
      $isUserPresent=$this->Admin_model->checkUser($this->username, $this->password);
      if($isUserPresent){
        $this->userDetail=$isUserPresent;
      }else{
        // redirect('auth/login');
      }

	 	}


	public function index()
	{

	}


	public function register_validation()
	{
		$this->load->library('form_validation');

		// set validation rules

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Confirmer mot de passe', 'trim|required|min_length[6]|matches[password]');

		$this->form_validation->set_message('is_unique', "Cette adresse email existe déjà");

    if ($this->form_validation->run() === false) {

   		// validation not ok, send validation errors to the view
   		$this->load->view('admin_register');


   	} else {

   		// set variables from the form
      $data = array(

     		$email    = $this->input->post('email'),
     		$password = $this->input->post('password')

			);


   		if ($this->Admin_model->add_admin($email, $password)) {

   			// admin creation ok

   			$this->load->view('admin_login', $data);


   		} else {

   			// user creation failed, this should never happen
   			$data->error = 'There was a problem creating your new account. Please try again.';

   			// send error to the view

   			$this->load->view('admin_register', $data);


   		}

   	}
	}

  public function login()
  {
    $this->load->view('admin_login');

  }

	// public function login($submit = null)
	// {
	// 	if ($submit == null)
	// 	{
	// 		$this->load->view('admin_login');
	// 		return true;
	// 	}
	// 	$email = $this->input->post('email');
	// 	$password = $this->input->post('password');
	//
	// 	$this->load->model('User_model');
	// 	$result = $this->User_model->login('admin', $email, $password);
	//
	// 	if($result == true)
	// 	{
	// 		// echo "login";
	// 	}
	// }

	public function login_validation() {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
    $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		if($this->form_validation->run())
            {
                if($this->input->post('email') != 'admin@gmail.com' || $this->input->post('password') != '21232f297a57a5a743894a0e4a801fc3')
                {
									$this->session->set_userdata($data);
									   redirect('auth/success');
                }
                else
                {

                    redirect('auth/login');
                }

    // if ($this->form_validation->run()) {
		// 	$data = array(
		// 		'email' => $this->input->post('email'),
		// 		'is_logged_in' => 1
		// 	);
		// 	$this->session->set_userdata($data);
    //   redirect('auth/success');
		//
    // } else {
    //   $this->load->view('admin_login');
     }
  }

	public function success()
	{
		$data['tarif']=$this->Members_model->get_all_tarif();
		$this->load->view('admin',$data);
	}

	public function restricted (){
		$this->load->view('admin_restricted');
	}

	public function validate_credentials() {
		$this->load->model('Admin_model');

		if ($this->Admin_model->can_log_in()) {
			return true;
	} else {
			$this->form_validation->set_message('validate_credentials', 'Mot de passe incorrect');
			return false;
	  }
	}

}
