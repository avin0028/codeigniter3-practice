<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees_model extends CI_Model
{

    public function getEmployees($factory_id)
    {
        $condition = array(
            "factory_id" => $factory_id
        );
        $query = $this->db->get_where('employees', $condition);
        return $query->result_array();
    }
    public function setEmployees($data)
    {
        $this->db->insert('employees', $data);
    }
    public function removeEmployee($id)
    {
        $condition = array('id' => $id);
        // $this->db->query("delete * from employees where id = {$id}");
        $this->db->delete('employees', $condition);
    }
}
