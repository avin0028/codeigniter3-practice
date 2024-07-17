<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function getUser()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $query = $this->db->get_where('users', $data);
        return $query->row_array();
    }
    public function setUser()
    {
        $input_username = $this->input->post('username');
        $query = $this->db->query("select * from users where username = '{$input_username}'");
        if ($query->num_rows() == 1) {
            echo "duplicate username";
            return;
        }

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nickname' => $this->input->post('nickname')
        );
        $query = $this->db->insert('users', $data);
        return $data;
    }
}
