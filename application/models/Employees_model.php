<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees_model extends My_Model
{
    protected $table_name = "employees";

    public function getEmployees($factory_id)
    {

        return $this->get_where(["factory_id" => $factory_id]);
    }
    public function addEmployee($data)
    {
        return $this->insert($data);
    }
    public function removeEmployee($id)
    {
        return $this->delete(['id' => $id]);
    }
}
