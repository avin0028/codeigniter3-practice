<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends My_Model
{
    protected $table_name = "products";

    public function getproducts($factory_id)
    {
        return $this->get_where(["factory_id" => $factory_id]);
    }
    public function addproduct($data)
    {
        return $this->insert($data);
    }
    public function removeProduct($id)
    {
        return $this->db->delete(["id" => $id]);
    }
}
