<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = [];
		$this->load->view('login', $data);
		
	}

    public function autentikasi()
    {
        $this->load->model("user_model", "user");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username, $_password);
        if(isset($row)){
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ID', $row->id);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);
            redirect(base_url().'index.php/welcome');
        }else{
            redirect(base_url().'index.php/login?status=f');
        }
    }

    public function register()
    {

        $data = [];
        $this->load->view('register', $data);
    }
}