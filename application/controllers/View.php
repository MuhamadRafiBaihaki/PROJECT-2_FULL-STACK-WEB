<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function index()
	{
        $_id = $this->input->get('id');
        $this->load->model('view_model', 'mobil');
        $data['mobil'] = $this->mobil->findById($_id);


		$this->load->view('view_header');
		$this->load->view('view', $data);
		$this->load->view('template/footer');
	}
}