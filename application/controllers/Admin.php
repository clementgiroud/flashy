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
			$this->load->helper(['url','html','form']);
	 		$this->load->model('Admin_model');
			$this->load->library('form_validation','session');
			$this->load->database();

	 	}

	public function index()
	{
		// $this->load->view('admin/restricted');
		echo("Vous ne pouvez accéder à cette page");
		$data = $this->session->set_flashdata('alert', 'Cette page est protégée par un mot de passe.').redirect('main');

        return $data;

	}

	public function success()
	{
		if ($this->session->userdata('is_logged_in')):
			$this->load->view('admin/admin');
		else:
			redirect('main');
		endif;
	}

	public function compte(){
		if ($this->session->userdata('is_logged_in')):
			$data['compte']=$this->Admin_model->get_all_user();
			$this->load->view('admin/compte',$data);
		else:
			redirect('main');
		endif;
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
		if ($this->session->userdata('is_logged_in')):
			$data['tarif']=$this->Members_model->get_all_tarif();
			$this->load->view('admin/admin_tarifs',$data);
		else:
			redirect('main');
		endif;
	}

	public function reservation()
	{
			if ($this->session->userdata('is_logged_in')):
				$this->load->view('admin/calendrier');
			else:
				redirect('main');
			endif;
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

	public function service()
	{
		if ($this->session->userdata('is_logged_in')):
			$data['services']=$this->Admin_model->get_all_service();

			$this->load->view('admin/admin_service',$data);
		else:
			redirect('main');
		endif;
	}

	public function add_service(){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			],

			[
							'field' => 'description',
							'label' => 'Description',
							'rules' => 'required'
			]

					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add_service');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
										'upload_path'	=> 'assets/images/service',
	            			'allowed_types' => 'gif|jpg|png|mp4',
	            			'max_size'      => 100000000,
	            			'max_width'     => 1024000,
	            			'max_height'    => 768000,
										'file_name' =>  $_FILES["userfile"]["name"],
										'overwrite' => TRUE
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {

                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/add_service', $error);

            }
            else
            {

                    $file = $this->upload->data();
										$data = [
											'file' 			=> 'assets/images/service/' . $file['file_name'],
											'description'	=> set_value('description'),
											'caption'		=> set_value('caption')
										];

                    //print_r($file);
                    $this->Admin_model->create_service($data);
					$this->session->set_flashdata('message','Une nouvelle image a été ajoutée');
					redirect('admin/service');
            }
		}
	}

	public function edit_service($id){
		$rules = 	[
								[
												'field' => 'caption',
												'label' => 'Titre',
												'rules' => 'required'
								],

				        [
				                'field' => 'description',
				                'label' => 'Description',
				                'rules' => 'required'
				        ]
					];

		$this->form_validation->set_rules($rules);
		$service = $this->Admin_model->find_service($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/edit_service',['service'=>$service]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> 'assets/images/service/',
		            			'allowed_types' => 'gif|jpg|png|mp4',
		            			'max_size'      => 100000000,
		            			'max_width'     => 10240000,
		            			'max_height'    => 7680000,
											'file_name' => $id,
											'overwrite' => TRUE
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('admin/edit_service',['service'=>$service,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'assets/images/' . $file['file_name'];
						unlink($image->file);
	            }
			}


			$data = [
						'file' 			=> 'assets/images/service/' . $file['file_name'],
						'description'	=> set_value('description'),
						'caption'		=> set_value('caption')
					];

			$this->Admin_model->update_service($id,$data);
			$this->session->set_flashdata('message',"L'image a été mise à jour");
			redirect('admin/service');
		}
	}


	public function delete_service($id)
	{
		$this->Admin_model->delete_service($id);
		$this->session->set_flashdata('message',"L'image a été supprimée");
		redirect('admin/service');
	}


	public function nettoyage()
	{
		if ($this->session->userdata('is_logged_in')):
			$data['decalaminage']=$this->Admin_model->get_all_nettoyage();
			$data['carrosserie']=$this->Admin_model->get_all_carrosserie();
			$data['interieur']=$this->Admin_model->get_all_interieur();



			$this->load->view('admin/admin_nettoyage',$data);
		else:
			redirect('main');
		endif;
	}

	public function carrosserie()
	{
		if ($this->session->userdata('is_logged_in')):

			$data['carrosserie']=$this->Admin_model->get_all_carrosserie();




			$this->load->view('admin/admin_carrosserie',$data);
		else:
			redirect('main');
		endif;
	}

	public function interieur()
	{
		if ($this->session->userdata('is_logged_in')):

			$data['interieur']=$this->Admin_model->get_all_interieur();



			$this->load->view('admin/admin_interieur',$data);
		else:
			redirect('main');
		endif;
	}

	public function add_nettoyage(){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]


					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add_nettoyage');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
										'upload_path'	=> 'assets/images/nettoyage',
	            			'allowed_types' => 'gif|jpg|png|mp4',
	            			'max_size'      => 100000000,
	            			'max_width'     => 1024000,
	            			'max_height'    => 768000,
										'file_name' =>  $_FILES["userfile"]["name"],
										'overwrite' => TRUE
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {

                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/add_nettoyage', $error);

            }
            else
            {

                    $file = $this->upload->data();
										$data = [
											'file' 			=> 'assets/images/nettoyage/' . $file['file_name'],
											'caption'		=> set_value('caption')
										];

                    //print_r($file);
                    $this->Admin_model->create_nettoyage($data);
					$this->session->set_flashdata('message','Une nouvelle image a été ajoutée');
					redirect('admin/nettoyage');
            }
		}
	}

	public function edit_nettoyage($id){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]

					];

		$this->form_validation->set_rules($rules);
		$nettoyage = $this->Admin_model->find_nettoyage($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/edit_nettoyage',['nettoyage'=>$nettoyage]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> 'assets/images/nettoyage/',
		            			'allowed_types' => 'gif|jpg|png|mp4',
		            			'max_size'      => 100000000,
		            			'max_width'     => 10240000,
		            			'max_height'    => 7680000,
											'file_name' => $id,
											'overwrite' => TRUE
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('admin/edit_nettoyage',['nettoyage'=>$nettoyage,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'assets/images/' . $file['file_name'];
						unlink($image->file);
	            }
			}


			$data = [
						'file' 			=> 'assets/images/nettoyage/' . $file['file_name'],
						'caption'		=> set_value('caption')
					];

			$this->Admin_model->update_nettoyage($id,$data);
			$this->session->set_flashdata('message',"L'image a été mise à jour");
			redirect('admin/nettoyage');
		}
	}


	public function delete_nettoyage($id)
	{
		$this->Admin_model->delete_nettoyage($id);
		$this->session->set_flashdata('message',"L'image a été supprimée");
		redirect('admin/nettoyage');
	}

	public function add_carrosserie(){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]


					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add_carrosserie');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
										'upload_path'	=> 'assets/images/carrosserie',
	            			'allowed_types' => 'gif|jpg|png|mp4',
	            			'max_size'      => 100000000,
	            			'max_width'     => 1024000,
	            			'max_height'    => 768000,
										'file_name' =>  $_FILES["userfile"]["name"],
										'overwrite' => TRUE
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {

                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/add_carrosserie', $error);

            }
            else
            {

                    $file = $this->upload->data();
										$data = [
											'file' 			=> 'assets/images/carrosserie/' . $file['file_name'],
											'caption'		=> set_value('caption')
										];

                    //print_r($file);
                    $this->Admin_model->create_carrosserie($data);
					$this->session->set_flashdata('message','Une nouvelle image a été ajoutée');
					redirect('admin/nettoyage');
            }
		}
	}

	public function edit_carrosserie($id){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]

					];

		$this->form_validation->set_rules($rules);
		$carrosserie = $this->Admin_model->find_carrosserie($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/edit_carrosserie',['carrosserie'=>$carrosserie]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> 'assets/images/carrosserie/',
		            			'allowed_types' => 'gif|jpg|png|mp4',
		            			'max_size'      => 100000000,
		            			'max_width'     => 10240000,
		            			'max_height'    => 7680000,
											'file_name' => $id,
											'overwrite' => TRUE
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('admin/edit_carrosserie',['carrosserie'=>$carrosserie,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'assets/images/' . $file['file_name'];
						unlink($image->file);
	            }
			}


			$data = [
						'file' 			=> 'assets/images/carrosserie/' . $file['file_name'],
						'caption'		=> set_value('caption')
					];

			$this->Admin_model->update_carrosserie($id,$data);
			$this->session->set_flashdata('message',"L'image a été mise à jour");
			redirect('admin/nettoyage');
		}
	}


	public function delete_carrosserie($id)
	{
		$this->Admin_model->delete_carrosserie($id);
		$this->session->set_flashdata('message',"L'image a été supprimée");
		redirect('admin/nettoyage');
	}

	public function add_interieur(){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]


					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add_interieur');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
										'upload_path'	=> 'assets/images/interieur',
	            			'allowed_types' => 'gif|jpg|png|mp4',
	            			'max_size'      => 100000000,
	            			'max_width'     => 1024000,
	            			'max_height'    => 768000,
										'file_name' =>  $_FILES["userfile"]["name"],
										'overwrite' => TRUE
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {

                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/add_interieur', $error);

            }
            else
            {

                    $file = $this->upload->data();
										$data = [
											'file' 			=> 'assets/images/interieur/' . $file['file_name'],
											'caption'		=> set_value('caption')
										];

                    //print_r($file);
                    $this->Admin_model->create_interieur($data);
					$this->session->set_flashdata('message','Une nouvelle image a été ajoutée');
					redirect('admin/nettoyage');
            }
		}
	}

	public function edit_interieur($id){
		$rules = 	[
			[
							'field' => 'caption',
							'label' => 'Titre',
							'rules' => 'required'
			]

					];

		$this->form_validation->set_rules($rules);
		$interieur = $this->Admin_model->find_interieur($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/edit_interieur',['interieur'=>$interieur]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> 'assets/images/interieur/',
		            			'allowed_types' => 'gif|jpg|png|mp4',
		            			'max_size'      => 100000000,
		            			'max_width'     => 10240000,
		            			'max_height'    => 7680000,
											'file_name' => $id,
											'overwrite' => TRUE
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('admin/edit_interieur',['interieur'=>$interieur,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'assets/images/' . $file['file_name'];
						unlink($image->file);
	            }
			}


			$data = [
						'file' 			=> 'assets/images/interieur/' . $file['file_name'],
						'caption'		=> set_value('caption')
					];

			$this->Admin_model->update_interieur($id,$data);
			$this->session->set_flashdata('message',"L'image a été mise à jour");
			redirect('admin/nettoyage');
		}
	}


	public function delete_interieur($id)
	{
		$this->Admin_model->delete_in($id);
		$this->session->set_flashdata('message',"L'image a été supprimée");
		redirect('admin/nettoyage');
	}





}
