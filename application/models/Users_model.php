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
}
