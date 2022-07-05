<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawatan_mobil extends CI_Controller {
    public function index()
    {
		$this->load->model('perawatan_mobil_model', 'rawatmobil');
		$list_rawatmobil = $this->rawatmobil->getAll();

		$data['list_rawatmobil'] = $list_rawatmobil;

		$this->load->view('template/header');
		$this->load->view('admin/perawatan_mobil', $data);
		$this->load->view('template/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("perawatan_mobil_model", "perawatan_mobil");
        $perawatanmobiledit = $this->perawatan_mobil->findById($_id);

        $data['perawatanmobiledit'] = $perawatanmobiledit;
        $this->load->view('template/header');
        $this->load->view('admin/perawatan_mobil_update', $data);
        $this->load->view('template/footer');
	}

	public function save()
    {
        $this->load->model("perawatan_mobil_model", "perawatan_mobil");

        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
		$_km_mobil = $this->input->post('km_mobil');
		$_deskripsi = $this->input->post('deskripsi');
		$_mobil_id = $this->input->post('mobil_id');
		$_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');
		$perawatanmobiledit = $this->input->post('perawatanmobiledit');

        $data_perawatan_mobil[] = $_tanggal;
        $data_perawatan_mobil[] = $_biaya;
		$data_perawatan_mobil[] = $_km_mobil;
		$data_perawatan_mobil[] = $_deskripsi;
		$data_perawatan_mobil[] = $_mobil_id;
		$data_perawatan_mobil[] = $_jenis_perawatan_id;
   

        if(isset($perawatanmobiledit)){
            // update data lama
            $data_perawatan_mobil[] = $perawatanmobiledit;
            $this->perawatan_mobil->update($data_perawatan_mobil);
        }else{  //save data baru
            $this->perawatan_mobil->save($data_perawatan_mobil);
        }

        redirect(base_url().'index.php/perawatan_mobil/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('perawatan_mobil_model', 'rawatmobil');
        $this->rawatmobil->delete($_id);

        redirect(base_url().'index.php/perawatan_mobil/', 'refresh');
	}

	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('admin/form_perawatan_mobil');
		$this->load->view('template/footer');
	}
}