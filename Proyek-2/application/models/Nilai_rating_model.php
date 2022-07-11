<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_rating_model extends CI_Model
{
    private $_table = "nilai_rating";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}