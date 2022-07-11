<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_wisata_model extends CI_Model
{   
    private $_table = "tempat_wisata";

    public $id;
    public $nama;
    public $alamat;
    public $latlong;
    public $jenis_id;
    public $skor_rating;
    public $harga_tiket;
    public $foto1;
    public $foto2;
    public $foto3;
    public $kecamatan_id;
    public $website;
    public $fasilitas;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'latlong',
            'label' => 'Latlong',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function uploadFoto($foto)
    {
        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = rand();
        $config['max_size'] = 2048;
 
        $this->load->library('upload', $config);
 
        if ($this->upload->do_upload($foto)) {
            return $this->upload->data();
        }
    }

    public function save()
    {
        $foto1 = $this->uploadFoto("foto1");
        $foto2 = $this->uploadFoto("foto2");
        $foto3 = $this->uploadFoto("foto3");

        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->latlong = $post["latlong"];
        $this->jenis_id = $post["jenis_id"];
        $this->skor_rating = $post["skor_rating"];
        $this->harga_tiket = $post["harga_tiket"];
        $this->foto1 = $foto1["file_name"];
        $this->foto2 = $foto2["file_name"];
        $this->foto3 = $foto3["file_name"];
        $this->kecamatan_id = $post["kecamatan_id"];
        $this->website = $post["website"];
        $this->fasilitas = $post["fasilitas"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $foto1 = $this->uploadFoto("foto1");
        $foto2 = $this->uploadFoto("foto2");
        $foto3 = $this->uploadFoto("foto3");
        
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->latlong = $post["latlong"];
        $this->jenis_id = $post["jenis_id"];
        $this->skor_rating = $post["skor_rating"];
        $this->harga_tiket = $post["harga_tiket"];
        $this->foto1 = $foto1["file_name"];
        $this->foto2 = $foto2["file_name"];
        $this->foto3 = $foto3["file_name"];
        $this->kecamatan_id = $post["kecamatan_id"];
        $this->website = $post["website"];
        $this->fasilitas = $post["fasilitas"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function count()
    {
        return $this->db->count_all($this->_table);
    }
}