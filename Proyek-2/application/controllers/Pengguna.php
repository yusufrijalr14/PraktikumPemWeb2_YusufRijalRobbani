<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');

        if(!$this->pengguna_model->current_user()){
			redirect('administrator');
		}
    }

    public function index()
    {
        $data["array_pengguna"] = $this->pengguna_model->getAll();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/pengguna', $data);
    }

    public function form_add()
    {
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/tambah_pengguna', $data);
    }

    public function form_edit($id)
    {
        $data["pengguna"] = $this->pengguna_model->getById($id);
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/edit_pengguna', $data);
    }

    public function add()
    {
        $pengguna = $this->pengguna_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        redirect('administrator/pengguna');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/pengguna');
       
        $pengguna = $this->pengguna_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/pengguna');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengguna_model->delete($id)) {
            redirect('administrator/pengguna');
        }
    }
}