<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengguna_model");
    }

    private $_table = "komentar";

    public $id;
    public $isi;
    public $nilai_rating_id;

    public function rules()
    {
        return [
            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->tanggal = date("Y-m-d H:i:s");
        $this->isi = $post["isi"];
        $this->users_id = $this->pengguna_model->current_user()->id;
        $this->wisata_id = $post["wisata_id"];
        $this->nilai_rating_id = $post["nilai_rating_id"];
        return $this->db->insert($this->_table, $this);
    }

    public function getByWisataId($id)
    {
        $this->db->select('k.*, u.username, nr.nama');
        $this->db->from('komentar k');
        $this->db->join('tempat_wisata tw', 'tw.id = k.wisata_id');
        $this->db->join('users u', 'u.id = k.users_id');
        $this->db->join('nilai_rating nr', 'nr.id = k.nilai_rating_id');
        return $this->db->get()->result();
    }
}