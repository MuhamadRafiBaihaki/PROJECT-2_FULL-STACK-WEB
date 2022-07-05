<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_perawatan extends CI_Controller {
    public function index()
    {
		$this->load->model('jenis_perawatan_model', 'perawatan');
		$list_perawatan = $this->perawatan->getAll();

		$data['list_perawatan'] = $list_perawatan;

		$this->load->view('template/header');
		$this->load->view('admin/jenis_perawatan', $data);
		$this->load->view('template/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("jenis_perawatan_model", "perawatan");
        $perawatanedit = $this->perawatan->findById($_id);

        $data['perawatanedit'] = $perawatanedit;
        $this->load->view('template/header');
        $this->load->view('admin/perawatan_update', $data);
        $this->load->view('template/footer');
	}

	public function save()
    {
        $this->load->model("jenis_perawatan_model", "perawatan");

        $_nama = $this->input->post('nama');
		$_perawatanedit = $this->input->post('perawatanedit');

        $data_perawatan[] = $_nama;
   

        if(isset($_perawatanedit)){
            // update data lama
            $data_perawatan[] = $_perawatanedit;
            $this->perawatan->update($data_perawatan);
        }else{  //save data baru
            $this->perawatan->save($data_perawatan);
        }

        redirect(base_url().'index.php/jenis_perawatan/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model', 'perawatan');
        $this->perawatan->delete($_id);

        redirect(base_url().'index.php/jenis_perawatan/', 'refresh');
	}

	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('admin/form_jenis_perawatan');
		$this->load->view('template/footer');
	}
}