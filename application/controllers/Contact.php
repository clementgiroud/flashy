<?php

class Contact extends CI_Controller {
 public function index()
 {

   $this->form_validation->set_rules('nom','Nom','trim|required|min_length[3]');
   $this->form_validation->set_rules('email','Email','trim|required|valid_email');
   $this->form_validation->set_rules('demande','Demande','required');


   if ($this->form_validation->run()==TRUE)
     {
       $this->load->model('Contact_model');
       $data = array(
         'nom'=>$this->input->post('nom'),
         'email'=>$this->input->post('email'),
         'demande'=>$this->input->post('demande'),
       );
       $this->Contact_model->add($data);

      extract($_POST);
      $this->email->from($email,$nom);
      $this->email->to('pereirachristophe.devweb@gmail.com');
      $this->email->subject('Contact');
      $this->email->message($demande);

      $this->email->send();


       $this->load->view('pages/success');
     }
   else
     {
 $this->load->view('templates/header');
 $this->load->view('pages/contact');
     }
}

}
