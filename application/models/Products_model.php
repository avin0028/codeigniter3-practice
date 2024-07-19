<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{

    public function getproducts($factory_id)
    {
        $condition = array(
            "factory_id" => $factory_id
        );
        $query = $this->db->get_where('products', $condition);
        return $query->result_array();
    }
    public function setproduct($data)
    {
        $this->db->insert('products', $data);
    }
    public function removeProduct($id)
    {
        $this->db->delete("products", array("id" => $id));
    }
}
