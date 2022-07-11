<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tempat_wisata_model");
        $this->load->model("jenis_wisata_model");
        $this->load->model("kecamatan_model");
        $this->load->model("pengguna_model");
        $this->load->model("komentar_model");
        $this->load->model("nilai_rating_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["array_tempat_wisata"] = $this->tempat_wisata_model->getAll();
        $this->load->view('frontend/home', $data);
    }

    public function detail($id)
    {
        $data['detail_wisata'] = $this->tempat_wisata_model->getById($id);
        $data["jenis_wisata"] = $this->jenis_wisata_model->getById($data["detail_wisata"]->jenis_id);
        $data["kecamatan"] = $this->kecamatan_model->getById($data["detail_wisata"]->kecamatan_id);
        $this->load->view('frontend/detail', $data);
    }

    public function register($wisata_id)
    {
        if ($this->pengguna_model->current_user()) {
			redirect('komentar/' . $wisata_id);
		}

        $data["wisata_id"] = $wisata_id;
        $this->load->view('frontend/login', $data);
    }

    public function login()
	{
        $wisata_id = $this->input->post('wisata_id');
        $username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->pengguna_model->loginUser($username, $email, $password)) {
			redirect('komentar/' . $wisata_id);
		}
	}

	public function logout()
	{
		$this->pengguna_model->logout();
		redirect('');
	}

    public function komentar($wisata_id)
    {
        $data['wisata_id'] = $wisata_id;
        $data['array_nilai_rating'] = $this->nilai_rating_model->getAll();
        $this->load->view('frontend/komentar', $data);
    }

    public function tambah_komentar()
    {
        $komentar = $this->komentar_model;
        $validation = $this->form_validation;
        $validation->set_rules($komentar->rules());

        if ($validation->run()) {
            $komentar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        redirect('');
    }
}