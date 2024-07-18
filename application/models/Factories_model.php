<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Factories_model extends CI_Model
{
    public function getFactories()
    {
        $condition = array(
            "owner_username" => $_SESSION['username']
        );
        $query = $this->db->get_where('factories', $condition);
        return $query->result_array();
    }
    public function setFactory()
    {
        $date = date('sihmY'); //second,minute,hour, month, year
        $data = array(
            'owner_username' => $_SESSION['username'],
            'title' => $this->input->post('factorytitle'),
            'address' => $this->input->post('factoryaddress'),
            'date' => $date
        );
        return $this->db->insert('factories', $data);
    }

    public function deleteFactory($id)
    {
        $condition = array("id" => $id);
        $this->db->where($condition);
        $this->db->delete('factories');
    }
}
