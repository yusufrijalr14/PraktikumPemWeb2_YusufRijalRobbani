<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisWisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jenis_wisata_model");
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');

        if(!$this->pengguna_model->current_user()){
			redirect('administrator');
		}
    }

    public function index()
    {
        $data["array_jenis_wisata"] = $this->jenis_wisata_model->getAll();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/jenis_wisata', $data);
    }

    public function form_add()
    {
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/tambah_jenis_wisata', $data);
    }

    public function form_edit($id)
    {
        $data["jenis_wisata"] = $this->jenis_wisata_model->getById($id);
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/edit_jenis_wisata', $data);
    }

    public function add()
    {
        $jenisWisata = $this->jenis_wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisWisata->rules());

        if ($validation->run()) {
            $jenisWisata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/jenis-wisata');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/jenis_wisata');
       
        $jenisWisata = $this->jenis_wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisWisata->rules());

        if ($validation->run()) {
            $jenisWisata->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/jenis-wisata');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->jenis_wisata_model->delete($id)) {
            redirect('administrator/jenis-wisata');
        }
    }
}