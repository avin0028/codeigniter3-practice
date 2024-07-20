<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producers_model extends CI_Model
{
    public function getProducers($username)
    {

        $master_query = $this->db->query("select producers.date, producers.count as produced ,employees.name as employee_name ,products.name as product_name ,factories.title as factories_name from (select employee_id,count,product_id,date from product_producers where employee_id in (select id from employees where factory_id in(SELECT id FROM factories where owner_username = '{$username}'))) as producers inner join employees on employees.id = producers.employee_id inner join products on products.id = producers.product_id inner join factories on factories.id = products.factory_id");
        $res = $master_query->result_array();
        return $res;
    }
    public function getProductiondetails($username)
    {
        $employees = $this->db->query("select name,id from employees where factory_id in (SELECT id FROM factories where owner_username = '{$username}')");
        $products = $this->db->query("select name,id from products where factory_id in (SELECT id FROM factories where owner_username = '{$username}')");
        return array(
            "emps" => $employees->result_array(),
            "prods" => $products->result_array()
        );
    }
    public function setProducer($data)
    {
        $this->db->insert('product_producers', $data);
    }
}
