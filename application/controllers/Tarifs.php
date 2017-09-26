<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tarifs extends CI_Controller {
    public function list($offset = 0, $count = 12)
    {
        $this->load->model('Tarifs_model');
        $vars['tariflist'] = $this->Tarifs_model->getList($offset, $count);
        $vars['itemcount'] = $this->Tarifs_model->count();
        $vars['itemoffset'] = $offset;
        $vars['itemcount'] = $count;
        // $this->load->view('templates/header');
        $this->load->view('pages/tarifs', $vars);
        // $this->load->view('footer');
    }
    // public function categorie($cat) {
    //     $this->load->model('Tarifs_model');
    //     $vars['dvdlist'] = $this->Tarifs_model->getCat(urldecode($cat));
    //     $vars['itemcount'] = $this->Tarifs_model->count();
    //     $vars['itemoffset'] = 0;
    //     $vars['itemcount'] = 12;
    //     $this->load->view('header');
    //     $this->load->view('dvd_list', $vars);
    //     $this->load->view('footer');
    // }
    public function view($id = 1) {
        $this->load->model('Tarifs_model');
        $vars['tarif'] = $this->Tarifs_model->getOne($id);
        // $this->load->view('header');
        $this->load->view('pages/tarifs', $vars);
        // $this->load->view('footer');
    }


		public function viewcarte() {
			$this->load->model('Tarifs_model');
			$data['cate'] = $this->Tarifs_model->getAll();
			//$result = $this->Tarifs_model->getAll();
			// $data['data'] = $this->Tarifs_model->getAll();
      $this->load->view('templates/header');
			$this->load->view('pages/tarifs',$data);

		}
}
