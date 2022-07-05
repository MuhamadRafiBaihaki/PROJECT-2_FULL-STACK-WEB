<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index()
    {
        $this->load->view('register');    

    }

    public function regist(){
        $this->load->model('user_model', 'newmember');

        $_username = $this->input->post('username');
		$_email = $this->input->post('email');
		$_password = $this->input->post('password');

		$data_member[]= $_username;
        $data_member[]= $_password;
		$data_member[]= $_email;


        $this->newmember->regist($data_member);
		redirect(base_url().'index.php/welcome');
    }
}