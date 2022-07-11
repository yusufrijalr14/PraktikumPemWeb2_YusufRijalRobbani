<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    private $_table = "users";
    const SESSION_KEY = 'id';

    public $id;
    public $username;
    public $password;
    public $email;
    public $last_login;
    public $status;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
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

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->email = $post["email"];
        $this->created_at = date('Y-m-d H:m:i');
        $this->status = 1;
        $this->role = "administrator";
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {   
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];

        $getById = $this->getById($post["id"]);
        
        if ($post["password"]) {
            $this->password = md5($post["password"]);
        } else {
            $this->password = $getById->password;
        }

        $this->email = $post["email"];
        $this->status = $post["status"];
        $this->role = "administrator";
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

    public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		if (!$user) {
			return FALSE;
		}

        if ($user->password != md5($password)) {
            return FALSE;
        }

		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s")
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}

    public function loginUser($username, $email, $password)
	{
		$query = $this->db->where('email', $email)->where('username', $username)->get($this->_table)->row();

		if ($query) {
            if ($query->password != md5($password)) {
                return FALSE;
            }

            $this->session->set_userdata([self::SESSION_KEY => $query->id]);
            $this->update_last_login($query->id);

            return $this->session->has_userdata(self::SESSION_KEY);
        } else {
            $this->username = $username;
            $this->password = md5($password);
            $this->email = $email;
            $this->created_at = date('Y-m-d H:m:i');
            $this->status = 1;
            $this->role = "public";
            $this->db->insert($this->_table, $this);

            $register = $this->db->where('email', $email)->where('username', $username)->get($this->_table)->row();

            $this->session->set_userdata([self::SESSION_KEY => $register->id]);
            $this->update_last_login($register->id);

            return $this->session->has_userdata(self::SESSION_KEY);
        }
	}
}