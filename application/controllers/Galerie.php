<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galerie extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
		$this->load->helper(['url','html','form']);
		$this->load->database();
		$this->load->library(['form_validation','session']);
	}

	public function index()
	{
		$this->load->model('Gallery_model');
		$data['images']=$this->Gallery_model->getAll_images();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/galerie', $data);
		$this->load->view('templates/footer', $data);

	}

	// public function slide()
	// {
	// 	$this->load->model('Gallery_model');
	// 	$data['slides']=$this->Gallery_model->getAll_slide();
	// 	$this->load->view('pages/home', $data);
	// }

	public function add_slide()
	{
		/* Start Uploading File */
		$config =	[
						'upload_path'	=> 'assets/images/slide',
									'allowed_types' => 'gif|jpg|png',
									'max_size'      => 100,
									'max_width'     => 1024,
									'max_height'    => 768
								];

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
					{
									$error = array('error' => $this->upload->display_errors());

									$this->load->view('gallery/add_image', $error);
					}
					else
					{
									$file = $this->upload->data();
									//print_r($file);
									$data = [
												'file' 			=> 'assets/images/galerie/' . $file['file_name'],
												'caption'		=> set_value('caption'),
												'description'	=> set_value('description')
											];
									$this->Gallery_model->create($data);
				$this->session->set_flashdata('message','New image has been added..');
				redirect('gallery');
					}
	}


	public function add(){
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
			$this->load->view('gallery/add_image');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
							'upload_path'	=> 'assets/images/galerie',
	            			'allowed_types' => 'gif|jpg|png',
	            			'max_size'      => 100,
	            			'max_width'     => 1024,
	            			'max_height'    => 768
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('gallery/add_image', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 			=> 'assets/images/galerie/' . $file['file_name'],
                    			'caption'		=> set_value('caption'),
                    			'description'	=> set_value('description')
                    		];
                    $this->Gallery_model->create($data);
					$this->session->set_flashdata('message','New image has been added..');
					redirect('gallery');
            }
		}
	}

	public function edit($id){
		$rules = 	[
				        [
				                'field' => 'caption',
				                'label' => 'Caption',
				                'rules' => 'required'
				        ],
				        [
				                'field' => 'description',
				                'label' => 'Description',
				                'rules' => 'required'
				        ]
					];

		$this->form_validation->set_rules($rules);
		$image = $this->Gallery_model->find($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('gallery/edit_image',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> '/galerie',
		            			'allowed_types' => 'gif|jpg|png',
		            			'max_size'      => 100,
		            			'max_width'     => 1024,
		            			'max_height'    => 768
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('gallery/edit_image',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'assets/images/galerie/' . $file['file_name'];
						unlink($image->file);
	            }
			}

			$data['caption']		= set_value('caption');
			$data['description']	= set_value('description');

			$this->Gallery_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('gallery');
		}
	}


	public function delete($id)
	{
		$this->Gallery_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('gallery');
	}
}
