<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kecamatan_model");
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');

        if(!$this->pengguna_model->current_user()){
			redirect('administrator');
		}
    }

    public function index()
    {
        $data["array_kecamatan"] = $this->kecamatan_model->getAll();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/kecamatan', $data);
    }

    public function form_add()
    {
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/tambah_kecamatan', $data);
    }

    public function form_edit($id)
    {
        $data["kecamatan"] = $this->kecamatan_model->getById($id);
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/edit_kecamatan', $data);
    }

    public function add()
    {
        $kecamatan = $this->kecamatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kecamatan->rules());

        if ($validation->run()) {
            $kecamatan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/kecamatan');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/kecamatan');
       
        $kecamatan = $this->kecamatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kecamatan->rules());

        if ($validation->run()) {
            $kecamatan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/kecamatan');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kecamatan_model->delete($id)) {
            redirect('administrator/kecamatan');
        }
    }
}