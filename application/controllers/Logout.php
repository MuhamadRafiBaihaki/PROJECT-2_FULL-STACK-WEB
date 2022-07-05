<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    public function index()
    {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/welcome');
    }
}