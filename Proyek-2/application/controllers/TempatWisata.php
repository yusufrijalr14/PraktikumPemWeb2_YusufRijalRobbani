<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TempatWisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tempat_wisata_model");
        $this->load->model("jenis_wisata_model");
        $this->load->model("kecamatan_model");
        $this->load->model("komentar_model");
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');

        if(!$this->pengguna_model->current_user()){
			redirect('administrator');
		}
    }

    public function index()
    {
        $data["array_tempat_wisata"] = $this->tempat_wisata_model->getAll();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/tempat_wisata', $data);
    }

    public function form_add()
    {
        $data["array_jenis_wisata"] = $this->jenis_wisata_model->getAll();
        $data["array_kecamatan"] = $this->kecamatan_model->getAll();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/tambah_wisata', $data);
    }

    public function form_edit($id)
    {
        $data["tempat_wisata"] = $this->tempat_wisata_model->getById($id);
        $data["jenis_wisata_selected"] = $this->jenis_wisata_model->getById($data["tempat_wisata"]->jenis_id);
        $data["array_jenis_wisata"] = $this->jenis_wisata_model->getAllWithoutId($data["jenis_wisata_selected"]->id);
        $data["kecamatan_selected"] = $this->kecamatan_model->getById($data["tempat_wisata"]->kecamatan_id);
        $data["array_kecamatan"] = $this->kecamatan_model->getAllWithoutId($data["kecamatan_selected"]->id);
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/edit_wisata', $data);
    }

    public function add()
    {
        $tempatWisata = $this->tempat_wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($tempatWisata->rules());

        if ($validation->run()) {
            $tempatWisata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/tempat-wisata');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/tempat_wisata');
       
        $tempatWisata = $this->tempat_wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($tempatWisata->rules());

        if ($validation->run()) {
            $tempatWisata->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('administrator/tempat-wisata');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->tempat_wisata_model->delete($id)) {
            redirect('administrator/tempat-wisata');
        }
    }

    public function detail($id)
    {
        $data["detail_wisata"] = $this->tempat_wisata_model->getById($id);
        $data["jenis_wisata"] = $this->jenis_wisata_model->getById($data["detail_wisata"]->jenis_id);
        $data["kecamatan"] = $this->kecamatan_model->getById($data["detail_wisata"]->kecamatan_id);
        $data["komentar"] = $this->komentar_model->getByWisataId($id);
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/detail_wisata', $data);
    }
}