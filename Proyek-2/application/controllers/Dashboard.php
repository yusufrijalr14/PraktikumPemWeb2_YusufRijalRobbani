<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tempat_wisata_model");
        $this->load->model("jenis_wisata_model");
        $this->load->model("kecamatan_model");
        $this->load->model("pengguna_model");

        if(!$this->pengguna_model->current_user()){
			redirect('administrator');
		}
    }

    public function index()
    {
        $data["count_tempat_wisata"] = $this->tempat_wisata_model->count();
        $data["count_jenis_wisata"] = $this->jenis_wisata_model->count();
        $data["count_kecamatan"] = $this->kecamatan_model->count();
        $data["count_pengguna"] = $this->pengguna_model->count();
        $data["current_user"] = $this->pengguna_model->current_user();
        $this->load->view('backend/dashboard', $data);
    }
}