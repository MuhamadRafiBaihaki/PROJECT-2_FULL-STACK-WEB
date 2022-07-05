<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_merk extends CI_Controller {
    public function index()
    {
		$this->load->model('kelola_merk_model', 'merk');
		$list_merk = $this->merk->getAll();

		$data['list_merk'] = $list_merk;

		$this->load->view('template/header');
		$this->load->view('admin/kelola_merk', $data);
		$this->load->view('template/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("kelola_merk_model", "merk");
        $merkedit = $this->merk->findById($_id);

        $data['merkedit'] = $merkedit;
        $this->load->view('template/header');
        $this->load->view('admin/merk_update', $data);
        $this->load->view('template/footer');
	}

	public function save()
    {
        $this->load->model("kelola_merk_model", "merk");

        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
		$_merkedit = $this->input->post('merkedit');

        $data_merk[] = $_nama;
        $data_merk[] = $_produk;
   

        if(isset($_merkedit)){
            // update data lama
            $data_merk[] = $_merkedit;
            $this->merk->update($data_merk);
        }else{  //save data baru
            $this->merk->save($data_merk);
        }

        redirect(base_url().'index.php/kelola_merk/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('kelola_merk_model', 'merk');
        $this->merk->delete($_id);

        redirect(base_url().'index.php/kelola_merk/', 'refresh');
	}

	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('admin/form_merk');
		$this->load->view('template/footer');
	}
}