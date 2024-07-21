<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees_model extends My_Model
{
    protected $table_name = "employees";

    public function getEmployees($factory_id)
    {

        $query = $this->get_where('employees', ["factory_id" => $factory_id]);
        return $query->result_array();
    }
    public function setEmployees($data)
    {
        $this->insert($data);
    }
    public function removeEmployee($id)
    {
        $this->delete(['id' => $id]);
    }
}
