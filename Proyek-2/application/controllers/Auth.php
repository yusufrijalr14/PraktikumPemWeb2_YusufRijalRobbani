<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengguna_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		if ($this->pengguna_model->current_user()) {
			redirect('administrator/dashboard');
		}

        $this->load->view('backend/login');
    }

    public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->pengguna_model->login($email, $password)){
			redirect('administrator/dashboard');
		} else {
            redirect('administrator');
		}
	}

	public function logout()
	{
		$this->pengguna_model->logout();
		redirect('administrator');
	}
}